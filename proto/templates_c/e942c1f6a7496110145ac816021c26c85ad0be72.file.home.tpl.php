<?php /* Smarty version Smarty-3.1.15, created on 2015-04-29 00:07:09
         compiled from "/opt/lbaw/lbaw1414/public_html/proto/templates/home/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193677498554002d0ae5f49-45741120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e942c1f6a7496110145ac816021c26c85ad0be72' => 
    array (
      0 => '/opt/lbaw/lbaw1414/public_html/proto/templates/home/home.tpl',
      1 => 1430258824,
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
<?php if ($_valid && !is_callable('content_554002d0b7ace2_86191243')) {function content_554002d0b7ace2_86191243($_smarty_tpl) {?><html>
<head>
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/bootstrap.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
  <nav class="navbar navbar-default">
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
          <li><a href="#">Ask a question</a></li>
          <li><a href="#">Browse questions</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Logged in as LBAW1414</a></li>
        </ul>
      </div>
    </div>
  </nav>
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

</body>

</html>

<?php }} ?>
