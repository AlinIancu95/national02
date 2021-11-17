<?php
include "functions.php";
$userName = $_POST['username'];
$userEmail = $_POST['email'];
$userN = $entityManager->getRepository(\Entities\Users::class)->findBy(array('username' => $userName));
$userE = $entityManager->getRepository(\Entities\Users::class)->findBy(array('email' => $userEmail));

if (count($userN) > 0 || count($userE) > 0){
    header('Location: newUser.php');
} else {
    $user = new \Entities\Users();

    $user->setPassword(md5($_POST['password']));
    $user->setEmail($_POST['email']);
    $user->setRole('user');
    $user->setUsername($_POST['username']);

    $entityManager->persist($user);
    $entityManager->flush();

    header('Location: index.php');
}