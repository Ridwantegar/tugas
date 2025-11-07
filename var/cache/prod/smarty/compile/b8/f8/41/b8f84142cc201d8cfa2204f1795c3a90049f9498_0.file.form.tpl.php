<?php
/* Smarty version 4.2.1, created on 2025-10-25 15:42:23
  from 'D:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\stores\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_68fcd3bf164923_21992633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8f84142cc201d8cfa2204f1795c3a90049f9498' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\stores\\helpers\\form\\form.tpl',
      1 => 1679907208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68fcd3bf164923_21992633 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94452955368fcd3bf1108e6_23625189', 'script');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196559667568fcd3bf11ea21_52993836', "input");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2218247968fcd3bf136657_00379397', "other_input");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block 'script'} */
class Block_94452955368fcd3bf1108e6_23625189 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_94452955368fcd3bf1108e6_23625189',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	$(document).ready(function() {
		$('#latitude, #longitude').keyup(function() {
			$(this).val($(this).val().replace(/,/g, '.'));
		});
	});
<?php
}
}
/* {/block 'script'} */
/* {block "input"} */
class Block_196559667568fcd3bf11ea21_52993836 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_196559667568fcd3bf11ea21_52993836',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'latitude') {?>
	<div class="row">
		<div class="col-lg-3">
			<input type="text"
				<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['size']))) {?>size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxlength']))) {?>maxlength="<?php echo $_smarty_tpl->tpl_vars['input']->value['maxlength'];?>
"<?php }?>
				name="latitude"
				id="latitude"
				value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'html','UTF-8' ));?>
" />
		</div>
		<div class="col-lg-1">
			<div class="form-control-static text-center"> / </div>
		</div>
		<div class="col-lg-3">
			<input type="text"
				<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['size']))) {?>size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxlength']))) {?>maxlength="<?php echo $_smarty_tpl->tpl_vars['input']->value['maxlength'];?>
"<?php }?>
				name="longitude"
				id="longitude"
				value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['fields_value']->value['longitude'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'html','UTF-8' ));?>
" />
		</div>
	</div>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
/* {block "other_input"} */
class Block_2218247968fcd3bf136657_00379397 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'other_input' => 
  array (
    0 => 'Block_2218247968fcd3bf136657_00379397',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['key']->value == 'hours') {?>
    <div class="form-group">
      <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hours:','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>
</label>
      <div class="col-lg-9"><p class="form-control-static"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'e.g. 10:00AM - 9:30PM','d'=>'Admin.Shopparameters.Help'),$_smarty_tpl ) );?>
</p></div>
    </div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (($tmp = $_smarty_tpl->tpl_vars['fields_value']->value['days'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp), 'value', false, 'k');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    <div class="form-group">
      <label class="control-label col-lg-3"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</label>
      <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
          <div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
            <div class="col-lg-7">
              <input type="text" size="25"
                     name="hours[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
]"
                     value="<?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value['hours'][$_smarty_tpl->tpl_vars['language']->value['id_lang']][$_smarty_tpl->tpl_vars['k']->value-1]))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value['hours'][$_smarty_tpl->tpl_vars['language']->value['id_lang']][$_smarty_tpl->tpl_vars['k']->value-1],'html','UTF-8' ));
}?>"/>
            </div>
            <div class="col-lg-2">
              <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                <?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

                <i class="icon-caret-down"></i>
              </button>
              <ul class="dropdown-menu">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
                  <li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);"
                         tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
            </div>
          </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php } else { ?>
        <div class="col-lg-9"><input type="text" size="25" name="hours[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" value="<?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value['hours'][$_smarty_tpl->tpl_vars['k']->value-1]))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value['hours'][$_smarty_tpl->tpl_vars['k']->value-1],'html','UTF-8' ));
}?>"/>
        </div>
      <?php }?>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }
}
}
/* {/block "other_input"} */
}
