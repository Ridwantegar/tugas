<?php
/* Smarty version 4.2.1, created on 2025-10-25 15:42:24
  from 'D:\xampp\htdocs\prestashop\admin\themes\default\template\helpers\form\form_category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_68fcd3c036cf50_66998755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08c9ee6691ef0cf9f1c08716c5875fc261911bfe' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\helpers\\form\\form_category.tpl',
      1 => 1679907208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68fcd3c036cf50_66998755 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['categories']->value) && (isset($_smarty_tpl->tpl_vars['categories']->value))) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		var inputName = '<?php echo addcslashes($_smarty_tpl->tpl_vars['categories']->value['input_name'],'\'');?>
';
		var use_radio = <?php if ($_smarty_tpl->tpl_vars['categories']->value['use_radio']) {?>1<?php } else { ?>0<?php }?>;
		var selectedCat = <?php echo intval(implode($_smarty_tpl->tpl_vars['categories']->value['selected_cat']));?>
;
		var selectedLabel = '<?php echo addcslashes($_smarty_tpl->tpl_vars['categories']->value['trads']['selected'],'\'');?>
';
		var home = '<?php echo addcslashes($_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['name'],'\'');?>
';
		var use_radio = <?php if ($_smarty_tpl->tpl_vars['categories']->value['use_radio']) {?>1<?php } else { ?>0<?php }?>;
		var use_context = <?php if ((isset($_smarty_tpl->tpl_vars['categories']->value['use_context']))) {?>1<?php } else { ?>0<?php }?>;
	<?php echo '</script'; ?>
>
<div class="panel">
	<div class="category-filter panel-heading">
		<a href="#" id="collapse_all" class="btn btn-link"><i class="icon-collapse-alt icon-large"></i> <?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Collapse all'];?>
</a>
		<a href="#" id="expand_all" class="btn btn-link"><i class="icon-expand-alt icon-large"></i> <?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Expand all'];?>
</a>
		<?php if (!$_smarty_tpl->tpl_vars['categories']->value['use_radio']) {?>
		<a href="#" id="check_all" class="btn btn-link"><i class="icon-check-sign"></i> <?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Check all'];?>
</a>
		<a href="#" id="uncheck_all" class="btn btn-link"><i class="icon-check-empty"></i> <?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Uncheck all'];?>
</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['categories']->value['use_search']) {?>
			<span>
				<?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['search'];?>
:&nbsp;
				<form method="post" id="filternameForm">
					<input type="text" name="search_cat" id="search_cat"/>
				</form>
			</span>
		<?php }?>
	</div>
	<?php $_smarty_tpl->_assignInScope('home_is_selected', false);?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value['selected_cat'], 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
		<?php if (is_array($_smarty_tpl->tpl_vars['cat']->value)) {?>
			<?php if ($_smarty_tpl->tpl_vars['cat']->value['id_category'] != $_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['id_category']) {?>
				<input <?php if (in_array($_smarty_tpl->tpl_vars['cat']->value['id_category'],$_smarty_tpl->tpl_vars['categories']->value['disabled_categories'])) {?>disabled="disabled"<?php }?> type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['categories']->value['input_name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id_category'];?>
"/>
			<?php } else { ?>
				<?php $_smarty_tpl->_assignInScope('home_is_selected', true);?>
			<?php }?>
		<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['cat']->value != $_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['id_category']) {?>
				<input <?php if (in_array($_smarty_tpl->tpl_vars['cat']->value,$_smarty_tpl->tpl_vars['categories']->value['disabled_categories'])) {?>disabled="disabled"<?php }?> type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['categories']->value['input_name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
"/>
			<?php } else { ?>
				<?php $_smarty_tpl->_assignInScope('home_is_selected', true);?>
			<?php }?>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<ul id="categories-treeview" class="filetree">
		<li id="<?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['id_category'];?>
" class="hasChildren">
			<span class="folder">
				<?php if ($_smarty_tpl->tpl_vars['categories']->value['top_category']->id != $_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['id_category']) {?>
					<input type="<?php if (!$_smarty_tpl->tpl_vars['categories']->value['use_radio']) {?>checkbox<?php } else { ?>radio<?php }?>"
							name="<?php echo $_smarty_tpl->tpl_vars['categories']->value['input_name'];?>
"
							value="<?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['id_category'];?>
"
							<?php if ($_smarty_tpl->tpl_vars['home_is_selected']->value) {?>checked="checked"<?php }?>
							onclick="clickOnCategoryBox($(this));"/>
						<span class="category_label"><?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['name'];?>
</span>
				<?php } else { ?>
					&nbsp;
				<?php }?>
			</span>
			<ul>
				<li><span class="placeholder">&nbsp;</span></li>
		  	</ul>
		</li>
	</ul>
	<?php if ($_smarty_tpl->tpl_vars['categories']->value['use_radio']) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		searchCategory();
	<?php echo '</script'; ?>
>
	<?php }?>
</div>
<?php }
}
}
