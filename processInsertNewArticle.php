<?php
include "functions.php";
$files = $_FILES;

var_dump($_POST['categoryId']);
var_dump(getAuthUser()->getId());
die;
copy($files['image']['tmp_name'],'/var/www/html/national02/alin/national02/images/'.$files['image']['name']);
$user = getAuthUser();
$article = new \Entities\Articles();
$article->setTitle($_POST['title']);
$article->setKeywords($_POST['keywords']);
$article->setCategoryid(intval($_POST['categoryId']));
$article->setText($_POST['text']);

if ($user){
    $article->setUserId($user->getId());
}

$entityManager->persist($article);
$entityManager->flush();

$image = new \Entities\Images();
$image->setFile($files['image']['name']);
$image->setArticleId($article->getId());
$entityManager->persist($image);
$entityManager->flush();


header('Location: index.php');