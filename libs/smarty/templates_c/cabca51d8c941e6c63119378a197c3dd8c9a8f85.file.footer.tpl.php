<?php /* Smarty version Smarty-3.1.12, created on 2014-01-07 10:22:33
         compiled from "/Users/telsmith/Personal/git/shorty-framework/templates/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91295393552cc15fc5958a7-08171424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cabca51d8c941e6c63119378a197c3dd8c9a8f85' => 
    array (
      0 => '/Users/telsmith/Personal/git/shorty-framework/templates/footer.tpl',
      1 => 1389111736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91295393552cc15fc5958a7-08171424',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52cc15fc596224_81600034',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cc15fc596224_81600034')) {function content_52cc15fc596224_81600034($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/telsmith/Personal/git/shorty-framework/libs/smarty/libs/plugins/modifier.date_format.php';
?><div id="footer">
	<div class="container">
		<p class="text-muted">
			&copy; <?php echo smarty_modifier_date_format(time(),'%Y');?>

		</p>
	</div>
</div><?php }} ?>