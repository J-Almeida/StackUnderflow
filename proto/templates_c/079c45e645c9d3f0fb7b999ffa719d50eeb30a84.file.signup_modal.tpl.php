<?php /* Smarty version Smarty-3.1.15, created on 2015-06-06 13:02:36
         compiled from "/opt/lbaw/lbaw1414/public_html/proto/templates/common/signup_modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13058425685540ac7c5d65e6-79744300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '079c45e645c9d3f0fb7b999ffa719d50eeb30a84' => 
    array (
      0 => '/opt/lbaw/lbaw1414/public_html/proto/templates/common/signup_modal.tpl',
      1 => 1433587719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13058425685540ac7c5d65e6-79744300',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5540ac7c5dabe9_23970726',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5540ac7c5dabe9_23970726')) {function content_5540ac7c5dabe9_23970726($_smarty_tpl) {?><div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Sign up</h4>
			</div>
			<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/registered_user/create.php" method="POST">
				<div class="modal-body">
					<fieldset>
						<div class="form-group">
							<label class="col-lg-3 control-label">First name:</label>
							<div class="col-lg-8">
								<input class="form-control" name="name" type="text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label">Last name:</label>
							<div class="col-lg-8">
								<input class="form-control" name="surname" type="text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label">Company:</label>
							<div class="col-lg-8">
								<input class="form-control" name="company" type="text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label">Email:</label>
							<div class="col-lg-8">
								<input class="form-control" name="email" type="text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Username:</label>
							<div class="col-md-8">
								<input class="form-control" name="username" type="text">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Password:</label>
							<div class="col-md-8">
								<input class="form-control" name="password" type="password">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Confirm password:</label>
							<div class="col-md-8">
								<input class="form-control" name="confirm_password" type="password">
							</div>
						</div>
					</fieldset>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Register</button>
				</div>
			</form>
		</div>
	</div>
</div><?php }} ?>
