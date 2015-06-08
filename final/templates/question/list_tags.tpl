{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container-fluid">
  <div class="row">

    {if $USERNAME}
      {literal}
        <div class="col-lg-12">
          <div class="btn-group-vertical pull-right">
            <a href="http://gnomo.fe.up.pt/~lbaw1414/final/pages/question/create.php" class="btn btn-default">+</a>
          </div>
        </div>
      {/literal}
    {/if}

    <div class="col-lg-12">
      <table class="table table-striped table-hover">
        <thead>
          <tr >
            <th>ID</th>
            <th>Rating</th>
            <th>Title</th>
            <th>Author</th>
          </tr>
        </thead>
        <tbody>
          {foreach $questions_tags as $question_tags}
          <tr onclick="document.location = '{$BASE_URL}pages/question/view.php?id={$question.questionid}';">
            <td>{$question_tags.questionid}</td>
            <td>{$question_tags.rating}</td>
            <td>{$question_tags.title}</td>
            <td>{$question_tags.createdby}</td>
          </tr>
          {/foreach}
        </tbody>
      </table>
    </div>

    <div class="col-lg-12">
      <div class="primary pull-right">
           <ul class="pagination">
   		  <li class="disabled"><a href="#"><</a></li>
        {for $i=1  to $numberOfPages_tags}
          <li {if $i eq $page_tags}class="active" {/if}><a href="{$BASE_URL}pages/question/list_tags.php?page={$i}">{$i}</a></li>
        {/for}
   		  <li><a href="#">></a></li>
   		</ul>
       </div>
    </div>

  </div>
</div>
{include file='common/footer.tpl'}
