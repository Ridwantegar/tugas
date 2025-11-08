const express = require('express');
const WebSocket = require('ws');
const { WebcastPushConnection } = require('tiktok-live-connector');
const cors = require('cors');
const http = require('http');

const app = express();
const port = process.env.PORT || 3000;

// ✅ Aktifkan CORS agar frontend dari Vercel/overlay bisa akses API
// app.use(cors()); // Ubah ke ini kalau mau allow semua origin (opsional, tapi kurang aman)
app.use(cors({
    origin: [
        'https://livechat-production-95eb.up.railway.app', // domain overlay kamu
        'https://tugas-production-66fb.up.railway.app'     // domain backend sendiri
    ]
}));

// ✅ Gunakan HTTP server gabungan agar bisa support WSS di Railway
const server = http.createServer(app);
const wss = new WebSocket.Server({ server });

let tiktokConnection = null;
let allClients = new Set();
let latestMessages = [];
const MAX_STORED_MESSAGES = 50;

wss.on('connection', (ws) => {
    console.log('Client connected to WebSocket');
    allClients.add(ws);

    ws.send(JSON.stringify({ type: 'info', message: 'Connected to server. Enter a TikTok username to start.' }));

    latestMessages.forEach(msg => ws.send(JSON.stringify(msg)));

    ws.on('message', (message) => {
        try {
            const data = JSON.parse(message);
            if (data.type === 'setUsername') {
                const username = data.username;
                // ✅ Validasi username: pastikan string dan tidak kosong
                if (!username || typeof username !== 'string' || username.trim() === '') {
                    ws.send(JSON.stringify({ type: 'error', message: 'Invalid username provided.' }));
                    return;
                }
                console.log(`Setting username to: ${username.trim()}`);

                if (tiktokConnection) {
                    tiktokConnection.disconnect();
                }

                tiktokConnection = new WebcastPushConnection(username.trim());

                tiktokConnection.on('chat', (chatData) => {
                    const msg = { type: 'chat', data: chatData };
                    broadcastToAll(msg);
                });

                tiktokConnection.on('gift', (giftData) => {
                    const msg = { type: 'gift', data: giftData };
                    broadcastToAll(msg);
                });

                // ✅ Gabung event viewerCount dan roomUser biar gak duplikat
                tiktokConnection.on('viewerCount', (count) => {
                    const msg = { type: 'viewerCount', count };
                    broadcastToAll(msg);
                });

                tiktokConnection.on('roomUser', (roomData) => {
                    // Skip broadcast duplikat, karena viewerCount sudah handle
                    console.log(`Room user update: ${roomData.viewerCount} viewers`);
                });

                tiktokConnection.on('liveUrl', (url) => {
                    const msg = { type: 'liveLink', link: url };
                    broadcastToAll(msg);
                });

                // ✅ Tambah auto-reconnect sederhana (retry 3x dengan delay)
                let retryCount = 0;
                const maxRetries = 3;
                const connectWithRetry = () => {
                    tiktokConnection.connect().then(state => {
                        console.log(`Connected to roomId ${state.roomId} for ${username}`);
                        const msg = { type: 'info', message: `Connected to ${username}'s live stream` };
                        broadcastToAll(msg);
                        retryCount = 0; // Reset retry on success
                    }).catch(err => {
                        console.error('Failed to connect', err);
                        if (retryCount < maxRetries) {
                            retryCount++;
                            console.log(`Retrying connection (${retryCount}/${maxRetries}) in 5 seconds...`);
                            setTimeout(connectWithRetry, 5000);
                        } else {
                            const msg = { type: 'error', message: `Failed to connect to ${username} after ${maxRetries} retries. Make sure they are live.` };
                            broadcastToAll(msg);
                        }
                    });
                };
                connectWithRetry();
            }
        } catch (err) {
            console.error('Error parsing WebSocket message:', err);
            ws.send(JSON.stringify({ type: 'error', message: 'Invalid message format.' }));
        }
    });

    ws.on('close', () => {
        console.log('Client disconnected');
        allClients.delete(ws);
    });

    ws.on('error', (err) => {
        console.error('WebSocket error:', err);
        allClients.delete(ws);
    });
});

function broadcastToAll(message) {
    const jsonMessage = JSON.stringify(message);
    allClients.forEach(client => {
        if (client.readyState === WebSocket.OPEN) {
            try {
                client.send(jsonMessage);
            } catch (err) {
                console.error('Error sending to client:', err);
                allClients.delete(client);
            }
        }
    });

    if (message.type === 'chat' || message.type === 'gift') {
        latestMessages.push(message);
        if (latestMessages.length > MAX_STORED_MESSAGES) {
            latestMessages.shift();
        }
    }
}

app.use(express.static('public'));

app.get('/', (req, res) => {
    res.sendFile(__dirname + '/public/index.html');
});

app.get('/api/messages', (req, res) => {
    res.json(latestMessages);
});

// ✅ Jalankan HTTP server gabungan (Express + WebSocket)
server.listen(port, () => {
    console.log(`Server running at http://localhost:${port}`);
    console.log(`WebSocket server running at ws://localhost:${port}`);
    console.log(`API endpoint available at http://localhost:${port}/api/messages`);
    // Catatan: Di Railway, ganti localhost dengan domain Railway-mu, dan port otomatis dari env
});
