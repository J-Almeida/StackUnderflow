{include file='common/header.tpl'}
{include file='common/navbar.tpl'}
<div id="fb-root"></div>
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
          <h3 class="list-group-item-heading">{$question.title}</h3>
          <hr/>
          <p class="list-group-item-text">{$question.content}</p>
          <hr/>
          <div class="row">
            <div class="col-lg-8">
              <span class="text-muted">Tags: </span>
              {foreach $tags as $tag}
              <span class="label label-info">{$tag['name']}</span>
              {/foreach}
            </div>
            <div class="col-lg-4">
              <p class="list-group-item-text text-muted pull-right"><small>Submitted by: {$createdUser.username}</small></p>
            </div>
          </div>
          <div id="socialRow" class="row" style="margin-left:10px">
            <div class="fb-share-button" data-layout="button_count"></div>
            <a href="https://twitter.com/share" class="twitter-share-button" data-hashtags="StackUnderflow">Tweet</a>
            <!-- Posicione esta tag onde você deseja que o botão compartilhar apareça. -->
            <div class="g-plus" data-action="share" data-annotation="bubble"></div>
          </div>
        </li>
        <a href="{$BASE_URL}pages/question/edit_question.php?id={$question.questionid}" class="btn btn-primary btn-xs pull-right">Edit</a>
      </ul>
    </div>
  </div>
</div> <!-- end container-->

{include file='common/footer.tpl'}