<?php
/* Smarty version 4.2.1, created on 2025-10-25 15:42:23
  from 'D:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\zones\select.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_68fcd3bf824d38_03497717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54b63c45c3de7b1ad42b3027b234988c0a34961d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\zones\\select.tpl',
      1 => 1679907208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68fcd3bf824d38_03497717 (Smarty_Internal_Template $_smarty_tpl) {
?><select id="zone_to_affect" name="zone_to_affect">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zones']->value, 'z');
$_smarty_tpl->tpl_vars['z']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['z']->value) {
$_smarty_tpl->tpl_vars['z']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['z']->value['id_zone'];?>
"><?php echo $_smarty_tpl->tpl_vars['z']->value['name'];?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
<?php }
}
