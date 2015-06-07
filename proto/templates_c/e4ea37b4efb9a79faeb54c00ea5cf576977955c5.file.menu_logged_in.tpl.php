<?php /* Smarty version Smarty-3.1.15, created on 2015-06-06 13:08:17
         compiled from "/opt/lbaw/lbaw1414/public_html/proto/templates/common/menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178271479553a0c9d941016-61348518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4ea37b4efb9a79faeb54c00ea5cf576977955c5' => 
    array (
      0 => '/opt/lbaw/lbaw1414/public_html/proto/templates/common/menu_logged_in.tpl',
      1 => 1433587719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178271479553a0c9d941016-61348518',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553a0c9d9e2df5_67234993',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553a0c9d9e2df5_67234993')) {function content_553a0c9d9e2df5_67234993($_smarty_tpl) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/registered_user/own_profile.php">Logged in as <?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</a></li>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/registered_user/logout.php">Logout</a></li>
<?php }} ?>
