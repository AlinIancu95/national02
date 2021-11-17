<?php
include "functions.php";
$limit=2;
$page= $_GET['page'];
$id = $_GET['id'];

$offset =  $page* $limit;
$comments = $entityManager->getRepository(\Entities\Comments::class)->findBy(array('article_id'=>$id));
var_dump($comments);die;
$comments = $entityManager->getRepository(\Entities\Comments::class)->findBy([],['id'=>'DESC'],$offset,$limit );
$user = getAuthUser();


$template = $twig->load('loadMoreComments.html.twig');
echo $template->render(['comments'=>$comments, 'user'=>$user]);

