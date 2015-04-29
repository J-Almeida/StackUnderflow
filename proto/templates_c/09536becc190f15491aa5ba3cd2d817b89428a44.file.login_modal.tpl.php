<?php /* Smarty version Smarty-3.1.15, created on 2015-04-29 15:04:55
         compiled from "/opt/lbaw/lbaw1414/public_html/proto/templates/common/login_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7433493505540ac7c5ce912-70921854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09536becc190f15491aa5ba3cd2d817b89428a44' => 
    array (
      0 => '/opt/lbaw/lbaw1414/public_html/proto/templates/common/login_modal.tpl',
      1 => 1430312689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7433493505540ac7c5ce912-70921854',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5540ac7c5d2820_11327657',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5540ac7c5d2820_11327657')) {function content_5540ac7c5d2820_11327657($_smarty_tpl) {?><div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Log in</h4>
      </div>
      <form class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/registered_user/login.php">
        <div class="modal-body">
          <fieldset>
            <div class="form-group">
              <label for="inputEmail" class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
                <input class="form-control" id="inputEmail" name="email" placeholder="Email" type="text">
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-lg-2 control-label">Password</label>
              <div class="col-lg-10">
                <input class="form-control" id="inputPassword" name="password" placeholder="Password" type="password">
              </div>
            </div>
          </fieldset>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Log in</button>
        </div>
      </div>
    </form>
  </div>
</div>
<?php }} ?>
