<?php
/* Smarty version 4.2.1, created on 2025-10-25 15:42:22
  from 'D:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\shop\helpers\tree\shop_tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_68fcd3beb90dc5_36675779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd03d669a158aa65a79afeef68c12fca73b03228d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\shop\\helpers\\tree\\shop_tree_header.tpl',
      1 => 1679907208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68fcd3beb90dc5_36675779 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel-heading">
	<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?><i class="icon-sitemap"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<div class="pull-right">
		<?php if ((isset($_smarty_tpl->tpl_vars['toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
	</div>
</div>
<?php }
}
