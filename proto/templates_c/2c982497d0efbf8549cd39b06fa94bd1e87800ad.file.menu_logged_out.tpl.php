<?php /* Smarty version Smarty-3.1.15, created on 2015-04-24 11:27:53
         compiled from "/opt/lbaw/lbaw1414/public_html/proto/templates/common/menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:325843212553a0c99657fd0-12515653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c982497d0efbf8549cd39b06fa94bd1e87800ad' => 
    array (
      0 => '/opt/lbaw/lbaw1414/public_html/proto/templates/common/menu_logged_out.tpl',
      1 => 1429867626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325843212553a0c99657fd0-12515653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553a0c99668fe3_49506395',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553a0c99668fe3_49506395')) {function content_553a0c99668fe3_49506395($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Register</a>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="password" placeholder="password" name="password">
  <input type="submit" value=">">
</form>
<?php }} ?>
