<?php /* Smarty version Smarty-3.1.12, created on 2014-01-07 10:08:28
         compiled from "/Users/telsmith/Personal/git/shorty-framework/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97417488752cc267c664c81-73283514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1704c5d4fe835022cf9cf06e1f1138a0bb2827b' => 
    array (
      0 => '/Users/telsmith/Personal/git/shorty-framework/templates/login.tpl',
      1 => 1382580338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97417488752cc267c664c81-73283514',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52cc267c70e809_04177732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cc267c70e809_04177732')) {function content_52cc267c70e809_04177732($_smarty_tpl) {?><form>
    <div class="row split">
        <div>
            <input class="check_val" id="username" name="name" type="text" placeholder="Username" required="required" data-trigger="keyup" />
        </div>
        <div>
            <input class="check_val" id="password" name="date" type="text" placeholder="Password" required="required" data-trigger="keyup" />
        </div>
    </div>
    <div class="row">
        <button class="validate centered cta">Login</button>
    </div>
</form><?php }} ?>