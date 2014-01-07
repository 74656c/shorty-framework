<?php /* Smarty version Smarty-3.1.12, created on 2014-01-07 10:21:55
         compiled from "/Users/telsmith/Personal/git/shorty-framework/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205431927752cc1645165b56-84667434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b35192648504cc2185630d94a07a5756c514693' => 
    array (
      0 => '/Users/telsmith/Personal/git/shorty-framework/templates/index.tpl',
      1 => 1389111714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205431927752cc1645165b56-84667434',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52cc16452662f5_64365123',
  'variables' => 
  array (
    'base_href' => 0,
    'navigation' => 0,
    'title' => 0,
    'content' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cc16452662f5_64365123')) {function content_52cc16452662f5_64365123($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
	<head>
		<base href="<?php echo $_smarty_tpl->tpl_vars['base_href']->value;?>
"/>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Shorty Framework</title>

		<link href="/css/bootstrap.css" rel="stylesheet">

		<link href="starter-template.css" rel="stylesheet">
		<style>
			html,
			body {
				height: 100%;
				/* The html and body elements cannot have any padding or margin. */
			}

			/* Wrapper for page content to push down footer */
			#wrap {
				min-height: 100%;
				height: auto;
				/* Negative indent footer by its height */
				margin: 0 auto -60px;
				/* Pad bottom by footer height */
				padding: 0 0 60px;
			}

			#content{
				padding-top:60px;
			}

			/* Set the fixed height of the footer here */
			#footer {
				height: 60px;
				background-color: #f5f5f5;
			}

		</style>
	</head>

	<body>
		<div id="wrap">
			<?php echo $_smarty_tpl->tpl_vars['navigation']->value;?>


			<div class="container">

				<div id="content">
					<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
					<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

				</div>

			</div>
		</div>
		<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>


		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
	</body>
</html>
<?php }} ?>