<?php /* Smarty version Smarty-3.1.15, created on 2015-04-24 11:27:57
         compiled from "/opt/lbaw/lbaw1414/public_html/proto/templates/common/menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178271479553a0c9d941016-61348518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4ea37b4efb9a79faeb54c00ea5cf576977955c5' => 
    array (
      0 => '/opt/lbaw/lbaw1414/public_html/proto/templates/common/menu_logged_in.tpl',
      1 => 1429867626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178271479553a0c9d941016-61348518',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553a0c9d9e2df5_67234993',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553a0c9d9e2df5_67234993')) {function content_553a0c9d9e2df5_67234993($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a>
<span class="username"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</span>
<?php }} ?>
