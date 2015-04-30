<?php /* Smarty version Smarty-3.1.15, created on 2015-04-30 10:11:28
         compiled from "/opt/lbaw/lbaw1414/public_html/proto/templates/common/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1799962114554096a1af4865-69263138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '322a0f2bb2a955a00914a0edb40e210f8af15d6f' => 
    array (
      0 => '/opt/lbaw/lbaw1414/public_html/proto/templates/common/navbar.tpl',
      1 => 1430381476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1799962114554096a1af4865-69263138',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_554096a1af8330_23405167',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554096a1af8330_23405167')) {function content_554096a1af8330_23405167($_smarty_tpl) {?><nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">StackUnderflow</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/question/create.php">Ask a question</a></li>
          <li><a href="#">Browse questions</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
        </form>
        <ul class="nav navbar-nav navbar-right">
			<?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
				<?php echo $_smarty_tpl->getSubTemplate ('common/menu_logged_in.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php } else { ?>
				<?php echo $_smarty_tpl->getSubTemplate ('common/menu_logged_out.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php }?>
        </ul>
      </div>
    </div>
  </nav>
<?php }} ?>
