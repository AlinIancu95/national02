<?php
include "functions.php";

$category = new \Entities\Categories();
$category->setName($_POST['name']);

$entityManager->persist($category);
$entityManager->flush();

header('Location: index.php');