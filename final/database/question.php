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
?>
