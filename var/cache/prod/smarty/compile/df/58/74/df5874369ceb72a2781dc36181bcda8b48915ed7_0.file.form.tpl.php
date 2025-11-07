<?php
/* Smarty version 4.2.1, created on 2025-10-25 15:42:22
  from 'D:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\shop_url\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_68fcd3bedac973_82682905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df5874369ceb72a2781dc36181bcda8b48915ed7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\shop_url\\helpers\\form\\form.tpl',
      1 => 1679907208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68fcd3bedac973_82682905 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199715236468fcd3bedaa753_49857787', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block 'script'} */
class Block_199715236468fcd3bedaa753_49857787 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_199715236468fcd3bedaa753_49857787',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	$(document).ready(function(){
		fillShopUrl();
		checkMainUrlInfo();
		$('#domain, #physical_uri, #virtual_uri').keyup(fillShopUrl);

		var change_domain_value = false;
		$('#domain').keydown(function()
		{
			if (!$('#domain_ssl').val() || $('#domain_ssl').val() == $('#domain').val())
				change_domain_value = true;
		});

		$('#domain_ssl').keydown(function()
		{
			change_domain_value = false;
		});

		$('#domain').blur(function()
		{
			if (change_domain_value)
			{
				change_domain_value = false;
				$('#domain_ssl').val($(this).val().replace(/ /g, '-'));
			}
		});

		$('#domain, #domain_ssl, #physical_uri, #virtual_uri').blur(function()
		{
			$(this).val($.trim($(this).val().replace(/ /g, '-')));
		});

	});

	var shopUrl = <?php echo $_smarty_tpl->tpl_vars['js_shop_url']->value;?>
;

	function fillShopUrl()
	{
		var domain = $('#domain').val();
		var physical = $('#physical_uri').val();
		var virtual = $('#virtual_uri').val();
		url = ((domain) ? domain : '???');
		if (physical)
		url += '/'+physical;
		if (virtual)
			url += '/'+virtual+'/';
		url = url.replace(/\/+/g, "/");
		$('#final_url').val('http://' + url.replace(/ /g, '-'));
	};

	function checkMainUrlInfo(shopID)
	{
		if (!shopID)
			if ($('#shop_id').length)
				shopID = $('#shop_id').val();
			else
				shopID = $('#id_shop').val();

		if (!shopUrl[shopID])
		{
			$('#main_off').attr('disabled', true);
			$('#main_on').attr('checked', true);
			$('#mainUrlInfo').css('display', 'block');
			$('#mainUrlInfoExplain').css('display', 'none');
		}
		else
		{
			$('#main_off').attr('disabled', false);
			$('#mainUrlInfo').css('display', 'none');
			$('#mainUrlInfoExplain').css('display', 'block');
		}
	}
<?php
}
}
/* {/block 'script'} */
}
