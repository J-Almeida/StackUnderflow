<?php /* Smarty version Smarty-3.1.15, created on 2015-04-30 00:10:55
         compiled from "/opt/lbaw/lbaw1414/public_html/proto/templates/registered_user/own_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2032137931554153f4294b34-51318233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd6369b07efee966e7c76b17ec4733f54392ae94' => 
    array (
      0 => '/opt/lbaw/lbaw1414/public_html/proto/templates/registered_user/own_profile.tpl',
      1 => 1430345449,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2032137931554153f4294b34-51318233',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_554153f4347832_91253652',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554153f4347832_91253652')) {function content_554153f4347832_91253652($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="jumbotron kp-info">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-justify">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">User Profile</h3>
          </div>
          <div class="panel-body">
            <div class="col-md-4 text-justify">
              <img width="180" height="130" src="images/avatar.png" class="img-responsive img-center">
              <br/>
              <div class="row">

                <input class="form-control" type="file">

              </div>
              <h4>Bibliography</h4>
              <textarea class="form-control" rows="5"> <?php echo $_smarty_tpl->tpl_vars['user']->value['bibliography'];?>
</textarea>

              </div>
              <div class="col-md-6 text-justify">
                <br/>
                <h3>Personal Info</h3>

                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label class="col-lg-3 control-label">First name:</label>
                    <div class="col-lg-8">
                      <input class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Last name:</label>
                    <div class="col-lg-8">
                      <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['surname'];?>
" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Company:</label>
                    <div class="col-lg-8">
                      <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['company'];?>
" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                      <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Password:</label>
                    <div class="col-md-8">
                      <input class="form-control" type="password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Confirm password:</label>
                    <div class="col-md-8">
                      <input class="form-control" type="password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                      <input class="btn btn-primary" value="Save Changes" type="button">
                      <span></span>
                      <input class="btn btn-default" value="Cancel" type="reset">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
