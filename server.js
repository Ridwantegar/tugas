const express = require('express');
const WebSocket = require('ws');
const { WebcastPushConnection } = require('tiktok-live-connector');
const cors = require('cors');
const http = require('http');

const app = express();
const port = process.env.PORT || 3000;
const wsPort = process.env.WS_PORT || 8080;

// ✅ Aktifkan CORS agar frontend dari Vercel/overlay bisa akses API
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
        const data = JSON.parse(message);
        if (data.type === 'setUsername') {
            const username = data.username;
            console.log(`Setting username to: ${username}`);

            if (tiktokConnection) {
                tiktokConnection.disconnect();
            }

            tiktokConnection = new WebcastPushConnection(username);

            tiktokConnection.on('chat', (chatData) => {
                const msg = { type: 'chat', data: chatData };
                broadcastToAll(msg);
            });

            tiktokConnection.on('gift', (giftData) => {
                const msg = { type: 'gift', data: giftData };
                broadcastToAll(msg);
            });

            tiktokConnection.on('viewerCount', (count) => {
                const msg = { type: 'viewerCount', count };
                broadcastToAll(msg);
            });

            tiktokConnection.on('liveUrl', (url) => {
                const msg = { type: 'liveLink', link: url };
                broadcastToAll(msg);
            });

            tiktokConnection.on('roomUser', (roomData) => {
                const msg = { type: 'viewerCount', count: roomData.viewerCount };
                broadcastToAll(msg);
            });

            tiktokConnection.connect().then(state => {
                console.log(`Connected to roomId ${state.roomId} for ${username}`);
                const msg = { type: 'info', message: `Connected to ${username}'s live stream` };
                broadcastToAll(msg);
            }).catch(err => {
                console.error('Failed to connect', err);
                const msg = { type: 'error', message: `Failed to connect to ${username}. Make sure they are live.` };
                broadcastToAll(msg);
            });
        }
    });

    ws.on('close', () => {
        console.log('Client disconnected');
        allClients.delete(ws);
    });
});

function broadcastToAll(message) {
    const jsonMessage = JSON.stringify(message);
    allClients.forEach(client => {
        if (client.readyState === WebSocket.OPEN) {
            client.send(jsonMessage);
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
    console.log(`Server running at https://tugas-production-66fb.up.railway.app:${port}`);
    console.log(`WebSocket server running at wss://tugas-production-66fb.up.railway.app`);
    console.log(`API endpoint available at https://tugas-production-66fb.up.railway.app/api/messages`);
});
