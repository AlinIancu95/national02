<?php
include "functions.php";
$limit=2;
$page= $_GET['page'];
$offset =  $page* $limit;
$articles = $entityManager->getRepository(\Entities\Articles::class)->findBy([],['id'=>'DESC'],$offset, $limit);


$template = $twig->load('loadMore.html.twig');
echo $template->render(['articles'=>$articles]);

