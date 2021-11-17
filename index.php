<?php
include "functions.php";

$articles = $entityManager->getRepository(\Entities\Articles::class)->findBy([],['id'=>'DESC'],2);

$article = $articles[0];
$categories = $entityManager->getRepository(\Entities\Categories::class)->findAll();
$user = getAuthUser();

$template = $twig->load('index.html.twig');
echo $template->render(['articles'=>$articles, 'article'=>$article, 'categories'=>$categories, 'user'=>$user]);

