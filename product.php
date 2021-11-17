<?php
include "parts/header.php";

$user = getAuthUser();
$products = $entityManager->getRepository(\Entities\Products::class)->findBy([], ['id'=>'DESC'], 4);
$product = $products[0];

$template = $twig->load('product.html.twig');
echo $template->render(['products'=>$products, 'user'=>$user, 'product'=>$product ]);
