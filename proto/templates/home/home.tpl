{include file='common/header.tpl'}
{include file='common/navbar.tpl'}
  <div class="container">
  </div>
  <script src="{$BASE_URL}javascript/jquery-2.1.3.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

  <div class="jumbotron kp-info">
      <h1 class="text-center">StackUnderflow</h1>
      <p class="text-center">Asks everything you need to know!</p>
    </div>

  <div class="kp-body">
      <div class="container">
		{include file='common/login_modal.tpl'}
		{include file='common/signup_modal.tpl'}
        <div class="row">
          <div class="col-md-4 text-center">
            <img width="100" height="100" src="{$BASE_URL}images/assets/task.png">
            <p>Just ask a question and whait for the help of our network. </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet augue a elit euismod malesuada. Duis ornare nisl nec purus tempor interdum id et dui. Aenean dapibus fermentum ligula, non posuere justo cursus nec. Etiam mollis bibendum felis, nec scelerisque arcu lacinia sed</p>
          </div>
          <div class="col-md-4 text-center">
            <img width="100" height="100" src="{$BASE_URL}images/assets/calendar.png">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet augue a elit euismod malesuada. Duis ornare nisl nec purus tempor interdum id et dui. Aenean dapibus fermentum ligula, non posuere justo cursus nec. Etiam mollis bibendum felis, nec scelerisque arcu lacinia sed</p>
          </div>
          <div class="col-md-4 text-center">
            <img width="100" height="100" src="{$BASE_URL}images/assets/statistic.png">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet augue a elit euismod malesuada. Duis ornare nisl nec purus tempor interdum id et dui. Aenean dapibus fermentum ligula, non posuere justo cursus nec. Etiam mollis bibendum felis, nec scelerisque arcu lacinia sed</p>
          </div>
        </div>
      </div>
    </div>

    <div class="kp-header">
      <div class="text-center">
        <img width="50" height="50" src="{$BASE_URL}images/assets/facebook.png">
        <img width="50" height="50" src="{$BASE_URL}images/assets/google_plus.png">
        <img width="50" height="50" src="{$BASE_URL}images/assets/feed.png">
      </div>
    </div>
{include file='common/footer.tpl'}
