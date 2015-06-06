{include file='common/header.tpl'}
{include file='common/navbar.tpl'}

<div class="container-fluid">
  </div class="row">
    <div class="col-lg-12">
      <div class="btn-group-vertical pull-right">
        <a href="#" class="btn btn-default">+</a>
      </div>
    </div>
    <div class="col-lg-12">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Rating</th>
            <th>Question</th>
            <th>Number of Answers</th>
            <th>Author</th>
          </tr>
        </thead>
        <tbody>
          {foreach $questions as $question}
          <tr>
            <td><a href="{$BASE_URL}pages/question/view.php?id={$question.questionid}">{$question.questionid}<a></td>
            <td>1</td>
            <td>{$question.content}</td>
            <td>0</td>
            <td>{$question.createdby}</td>
          </tr>
          {/foreach}
        </tbody>
      </table>
    </div>
    <div class="col-lg-12">
      <div class="primary pull-right">
           <ul class="pagination">
   		  <li class="disabled"><a href="#"><</a></li>
        {for $i=1  to $numberOfPages}
          <li {if $i eq $page}class="active" {/if}><a href="{$BASE_URL}pages/question/list.php?page={$i}">{$i}</a></li>
        {/for}
   		  <li><a href="#">></a></li>
   		</ul>
       </div>
    </div>
  </div>
</div>
{include file='common/footer.tpl'}
