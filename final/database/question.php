<?php
function createQuestion($title, $content, $createdBy, $tags){
  global $conn;
  $conn->beginTransaction();
  try{
    $stmt = $conn->prepare('INSERT INTO question(title, content, createdby) VALUES (?, ?, ?)');
    $stmt->execute(array($title, $content, $createdBy));
    $questionId = $conn->lastInsertId('question_questionid_seq');
    foreach($tags as $tag){
      $stmt = $conn->prepare('SELECT tagid FROM tag WHERE name = ?');
      $stmt->execute(array($tag));
      $tagId = $stmt->fetch()['tagid'];
      echo $tagId;
      if($tagId){
        echo 'tag id:'.$tagId;
        echo 'question id:'.$questionId;
        $stmt = $conn->prepare('INSERT INTO question_tag(tagid, questionid) VALUES (?,?)');
        $stmt->execute(array($tagId, $questionId));
      }else{
        $stmt = $conn->prepare('INSERT INTO tag(name) VALUES (?)');
        $stmt->execute(array($tag));
        $tagId = $conn->lastInsertId('tag_tagid_seq');
        $stmt = $conn->prepare('INSERT INTO question_tag(tagid, questionid) VALUES (?,?)');
        $stmt->execute(array($tagId, $questionId));

      }
    }
  }catch(Exception $e){
    echo $e->getMessage();
    $conn->rollback();
    return 0;
  }

  $conn->commit();
  return $questionId;
}

function getQuestionById($id){
  global $conn;
  $stmt = $conn->prepare('SELECT * FROM question WHERE questionid = ?');
  $stmt->execute(array($id));
  return $stmt->fetch();
}

function getQuestionTagsById($id){
  global $conn;
  $stmt = $conn->prepare('SELECT tag.name FROM question, question_tag, tag WHERE ' .
  'question.questionid = question_tag.questionid AND '.
  'question_tag.tagid = tag.tagid AND '.
  'question.questionid = ?;');
  $stmt->execute(array($id));
  return $stmt->fetchAll();
}

function listQuestions($page){
  global $conn;
  $stmt = $conn->prepare(
    'SELECT question_with_ratings.*, registered_user.username AS authorname FROM 
      (SELECT question.questionid, question.title, question.content, question.createdby AS authorid, COALESCE(SUM(rating), 0) AS rating 
        FROM question, question_rating WHERE
        question.questionid = question_rating.question GROUP BY(question.questionid) ORDER BY (question.questionid) LIMIT ? OFFSET ?)
                        AS question_with_ratings, registered_user
                        WHERE question_with_ratings.authorid = registered_user.userid ORDER BY (question_with_ratings.questionid)');
  $stmt->execute(array(15, 15 * ($page - 1)));
  return $stmt->fetchAll();
}


function listQuestions($page, $tag){
  global $conn;
  $stmt = $conn->prepare(
  'SELECT 
  question.questionid, 
  question_rating.rating, 
  question.title, 
  question.createdby
FROM 
  public.question, 
  public.question_tag, 
  public.tag, 
  public.question_rating
WHERE 
  question.questionid = question_tag.questionid AND
  question_tag.tagid = tag.tagid AND
  question_rating.question = question.questionid AND
  tag.name ILIKE 'print'
ORDER BY
  question.questionid DESC;');
  $stmt->execute(array(15, 15 * ($page - 1)));
  return $stmt->fetchAll();
}


#'SELECT * FROM question
#JOIN question_tag ON question_tag.questionid = question.questionid
#JOIN tag on tag.tagid = question_tag.tagid' // questions com as tags

 /* substitui isto por 'question' na query original:
'SELECT tag.tagid as tagid from tag where tag.name = $tag' // tags com o nome dado
'SELECT question_tag.questionid as questionid from question_tag where question_tag.tagid = (tags com o nome dado)' // id das perguntas com a tag
'SELECT question from question where question.questionid = (id das pergutas resultantes da query anterior)'

query original:
'SELECT question_with_ratings.*, registered_user.username AS authorname FROM 
      (SELECT question.questionid, question.title, question.content, question.createdby AS authorid, COALESCE(SUM(rating), 0) AS rating 
        FROM question, question_rating WHERE
        question.questionid = question_rating.question GROUP BY(question.questionid) ORDER BY (question.questionid) LIMIT ? OFFSET ?)
                        AS question_with_ratings, registered_user
                        WHERE question_with_ratings.authorid = registered_user.userid ORDER BY (question_with_ratings.questionid)');
  */
