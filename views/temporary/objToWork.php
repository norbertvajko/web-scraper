<?php

include '../../includes/classes/Productss.php';


$productOne = new Productss("Samsung",432.32,"/url/132.html",4.3,true);

$productOne->reviews = 2.2;

$productOne->__set('name','Samsung');
$productOne->__set('price',568);
$productOne->setName("Iphone");

//$productOne->whatIsThis();
echo $productOne->reviews .'<br>';
echo $productOne->getReviews() .'<br>';
echo $productOne->__get('reviews').'<br>';

$productOne->printProduct() ;

echo $productOne::PRICE_LIMIT.'<br>';

$productOne->startPhone().'<br>';