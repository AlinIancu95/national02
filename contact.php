<?php
    include "parts/header.php";
$user = getAuthUser();
$categories = $entityManager->getRepository(\Entities\Categories::class)->findAll();

$template = $twig->load('contact.html.twig');
echo $template->render(['user'=>$user, 'categories'=>$categories]);