<?php
include "functions.php";

$users = $entityManager->getRepository(\Entities\Users::class)->findAll();
$categories = $entityManager->getRepository(\Entities\Categories::class)->findAll();

$template = $twig->load('insertNewArticle.html.twig');
echo $template->render(['categories'=>$categories, 'users'=>$users]);