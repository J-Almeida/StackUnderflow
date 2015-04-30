<?php /* Smarty version Smarty-3.1.15, created on 2015-04-30 12:52:00
         compiled from "/opt/lbaw/lbaw1414/public_html/proto/templates/question/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169388770955420796947024-40738728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0f76d9f30ef6374b11c23ca6a4fd495b280f9a6' => 
    array (
      0 => '/opt/lbaw/lbaw1414/public_html/proto/templates/question/view.tpl',
      1 => 1430391114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169388770955420796947024-40738728',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_554207969f0d72_85479101',
  'variables' => 
  array (
    'question' => 0,
    'tags' => 0,
    'tag' => 0,
    'createdUser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554207969f0d72_85479101')) {function content_554207969f0d72_85479101($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-1">
      <div class="pull-right">
        <div><a href="#" class="btn btn-success btn-sm active"><i class="fa fa-chevron-up"></i></a></div>
        <span class="text-success"><strong>+1</strong></span>
        <div><a href="#" class="btn btn-danger btn-sm"><i class="fa fa-chevron-down"></i></a></div>
      </div>
    </div>
    <div class="col-lg-6">
      <ul class="list-group">
        <li class="list-group-item">
          <h3 class="list-group-item-heading"><?php echo $_smarty_tpl->tpl_vars['question']->value['title'];?>
</h3>
          <hr/>
          <p class="list-group-item-text"><?php echo $_smarty_tpl->tpl_vars['question']->value['content'];?>
</p>
          <hr/>
          <div class="row">
            <div class="col-lg-8">
              <span class="text-muted">Tags: </span>
              <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>
                <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['tag']->value['name'];?>
</span>
              <?php } ?>
            </div>
            <div class="col-lg-4">
              <p class="list-group-item-text text-muted pull-right"><small>Submitted by: <?php echo $_smarty_tpl->tpl_vars['createdUser']->value['username'];?>
</small></p>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div> <!-- end container-->

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
