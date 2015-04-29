<?php /* Smarty version Smarty-3.1.15, created on 2015-04-29 12:03:40
         compiled from "/opt/lbaw/lbaw1414/public_html/proto/templates/home/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193677498554002d0ae5f49-45741120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e942c1f6a7496110145ac816021c26c85ad0be72' => 
    array (
      0 => '/opt/lbaw/lbaw1414/public_html/proto/templates/home/home.tpl',
      1 => 1430301814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193677498554002d0ae5f49-45741120',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_554002d0b7ace2_86191243',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554002d0b7ace2_86191243')) {function content_554002d0b7ace2_86191243($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <div class="container">
  </div>
  <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/jquery-2.1.3.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

  <div class="jumbotron kp-info">
      <h1 class="text-center">StackUnderflow</h1>
      <p class="text-center">Asks everything you need to know!</p>
    </div>

  <div class="kp-body">
      <div class="container">
		<?php echo $_smarty_tpl->getSubTemplate ('common/login_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ('common/signup_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="row">
          <div class="col-md-4 text-center">
            <img width="100" height="100" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/task.png">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet augue a elit euismod malesuada. Duis ornare nisl nec purus tempor interdum id et dui. Aenean dapibus fermentum ligula, non posuere justo cursus nec. Etiam mollis bibendum felis, nec scelerisque arcu lacinia sed</p>
          </div>
          <div class="col-md-4 text-center">
            <img width="100" height="100" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/calendar.png">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet augue a elit euismod malesuada. Duis ornare nisl nec purus tempor interdum id et dui. Aenean dapibus fermentum ligula, non posuere justo cursus nec. Etiam mollis bibendum felis, nec scelerisque arcu lacinia sed</p>
          </div>
          <div class="col-md-4 text-center">
            <img width="100" height="100" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/statistic.png">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet augue a elit euismod malesuada. Duis ornare nisl nec purus tempor interdum id et dui. Aenean dapibus fermentum ligula, non posuere justo cursus nec. Etiam mollis bibendum felis, nec scelerisque arcu lacinia sed</p>
          </div>
        </div>
      </div>
    </div>

    <div class="kp-header">
      <div class="text-center">
        <img width="50" height="50" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/facebook.png">
        <img width="50" height="50" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/google_plus.png">
        <img width="50" height="50" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
images/assets/feed.png">
      </div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
