<?php
/* Smarty version 4.2.1, created on 2025-10-25 15:42:20
  from 'D:\xampp\htdocs\prestashop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_68fcd3bc599711_46554816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2313fc7d5bf8b41ada411e1756051591ee4c7edf' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1671869250,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68fcd3bc599711_46554816 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'D:\\xampp\\htdocs\\prestashop\\var\\cache\\prod\\smarty\\compile\\23\\13\\fc\\2313fc7d5bf8b41ada411e1756051591ee4c7edf_2.file.helpers.tpl.php',
    'uid' => '2313fc7d5bf8b41ada411e1756051591ee4c7edf',
    'call_name' => 'smarty_template_function_renderLogo_186481878668fcd3bc58b1b9_03749554',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_186481878668fcd3bc58b1b9_03749554 */
if (!function_exists('smarty_template_function_renderLogo_186481878668fcd3bc58b1b9_03749554')) {
function smarty_template_function_renderLogo_186481878668fcd3bc58b1b9_03749554(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_186481878668fcd3bc58b1b9_03749554 */
}
