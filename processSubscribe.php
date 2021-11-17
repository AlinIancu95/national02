<?php
include "functions.php";

$subscriber = new Entities\Subscribers();
$subscriber->setEmail($_POST['email']);
$entityManager->persist($subscriber);
$entityManager->flush();

header('Location: index.php');