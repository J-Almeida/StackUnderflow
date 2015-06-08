{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

  <title>StackUnderflow</title>

  <div class="container">
  </div>


  <div class="jumbotron kp-info">
      <h1 class="text-center">StackUnderflow</h1>
      <p class="text-center">Ask anything you need to know!</p>
    </div>

  <div class="kp-body">
      <div class="container">
    {include file='common/login_modal.tpl'}
    {include file='common/signup_modal.tpl'}
        <div class="row">
          <div class="col-md-4 text-center">
            <img width="100" height="100" src="{$BASE_URL}images/assets/questionmark.png">
            <p>Ask if you need help</p>
          </div>
          <div class="col-md-4 text-center">
            <img width="100" height="100" src="{$BASE_URL}images/assets/magnifyingglass.png">
            <p>Find questions that interest you, and help other users</p>
          </div>
          <div class="col-md-4 text-center">
            <img width="100" height="100" src="{$BASE_URL}images/assets/chat.png">
            <p>Comment on questions and answers</p>
          </div>
        </div>
      </div>
    </div>

    <!--
    <div class="kp-header">
      <div class="text-center">
        <img width="50" height="50" src="{$BASE_URL}images/assets/facebook.png">
        <img width="50" height="50" src="{$BASE_URL}images/assets/google_plus.png">
        <img width="50" height="50" src="{$BASE_URL}images/assets/feed.png">
      </div>
    </div>
    -->

    <div class="tip">
      <div class="text-center navbar-fixed-bottom">
        <p class="text-info">Tip: log in to post questions!</p> <!-- TODO - dar alguma margem até ao fundo da página -->
      </div>
    </div>


{include file='common/footer.tpl'}

