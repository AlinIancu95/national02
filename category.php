<?php
include "functions.php";
$id = $_GET['id'];
$category =  $entityManager->getRepository(\Entities\Categories::class)->find($id);
$articles = $entityManager->getRepository(\Entities\Articles::class)->findBy(array('categoryId' => $category));
$article = $articles[0];
$user = getAuthUser();

$template = $twig->load('category.html.twig');
echo $template->render(['articles'=>$articles,  'category'=>$category, 'user'=>$user, 'article'=>$article]);
