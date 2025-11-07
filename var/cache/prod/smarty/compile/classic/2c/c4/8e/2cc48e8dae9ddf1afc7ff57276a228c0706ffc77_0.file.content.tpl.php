<?php
/* Smarty version 4.2.1, created on 2025-11-04 18:32:40
  from 'D:\xampp\htdocs\prestashop\modules\blockreassurance\views\templates\admin\tabs\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6909e458a0e416_68610996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cc48e8dae9ddf1afc7ff57276a228c0706ffc77' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\modules\\blockreassurance\\views\\templates\\admin\\tabs\\content.tpl',
      1 => 1677729000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./content/listing.tpl' => 1,
    'file:./content/config.tpl' => 1,
  ),
),false)) {
function content_6909e458a0e416_68610996 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./content/listing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./content/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
