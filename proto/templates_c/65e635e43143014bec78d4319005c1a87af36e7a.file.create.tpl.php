<?php /* Smarty version Smarty-3.1.15, created on 2015-06-06 13:02:42
         compiled from "/opt/lbaw/lbaw1414/public_html/proto/templates/question/create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12669091245541e3c3955330-96295847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65e635e43143014bec78d4319005c1a87af36e7a' => 
    array (
      0 => '/opt/lbaw/lbaw1414/public_html/proto/templates/question/create.tpl',
      1 => 1433587719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12669091245541e3c3955330-96295847',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5541e3c3ad6f50_42889049',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5541e3c3ad6f50_42889049')) {function content_5541e3c3ad6f50_42889049($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap-tagsinput.css">

<div class="container-container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="well bs-component">
        <form class="form-horizontal" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/question/create.php">
          <fieldset>
            <legend>
              Submit a question
            </legend>
            <div class="form-group">
              <label for="inputTitle" class="col-lg-2 control-label">Title</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="inputTitle" placeholder="Ask away!" name="title">
              </div>
            </div>
            <div class="form-group">
              <label for="inputDetails" class="col-lg-2 control-label">Details</label>
              <div class="col-lg-10">
                <textarea class="form-control" id="inputDetails" name="content"></textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="inputTags" class="col-lg-2 control-label">Tags</label>
              <div class="col-lg-10">
                <input type="text" data-role="tagsinput" class="form-control" id="inputTags" name="tags">
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/bootstrap-tagsinput.js"></script>
<script>
$('#inputTags').tagsinput({
  confirmKeys: [13, 32, 44]
});
</script>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
