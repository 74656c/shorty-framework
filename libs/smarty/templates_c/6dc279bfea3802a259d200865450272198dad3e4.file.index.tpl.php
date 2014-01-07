<?php /* Smarty version Smarty-3.1.12, created on 2013-10-23 20:18:15
         compiled from "/Users/telsmith/Cloud Drive/www/mystuff.localhost/public/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1054621739526875574cecb5-57506963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dc279bfea3802a259d200865450272198dad3e4' => 
    array (
      0 => '/Users/telsmith/Cloud Drive/www/mystuff.localhost/public/templates/index.tpl',
      1 => 1382577372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1054621739526875574cecb5-57506963',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_href' => 0,
    'navigation' => 0,
    'title' => 0,
    'content' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_526875574dae53_76414482',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526875574dae53_76414482')) {function content_526875574dae53_76414482($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
    <head>
        <base href="<?php echo $_smarty_tpl->tpl_vars['base_href']->value;?>
"/>
        <title>Giftify | Gift Exchanges Made Easy</title>
        <link rel="stylesheet" type="text/css" href="/css/css.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="/css/picker.css" media="screen" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="/js/parsley.js"></script>
        <script src="/js/picker.js"></script>
        <script src="/js/picker.date.js"></script>
        <script src="/js/picker.time.js"></script>
        <script src="/js/misc.js"></script>
    </head>
    <body>
        <header>
            <?php echo $_smarty_tpl->tpl_vars['navigation']->value;?>

            <section id="headline">
                <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
            </section>
        </header>

        <article id="wrapper">
           <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        </article>
        <?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

    </body>
</html><?php }} ?>