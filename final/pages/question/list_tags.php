<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/question.php');

$page_tags = $_GET['page'];
$tag = $_GET['tag1'];

$questions_tags = listQuestions_tags($page_tags, $tag);

// $numberOfPages = ceil(getNumberOfQuestions()[0]['count'] / 15);
$numberOfPages_tags = 1;

$USERNAME = $_SESSION['username'];

$smarty->assign('page_tags', $page_tags);
$smarty->assign('numberOfPages_tags', $numberOfPages_tags);
$smarty->assign('questions_tags', $questions_tags);
$smarty->display('question/list_tags.tpl');
?>
