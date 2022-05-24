<?php

include '../../includes/classes/ex.php';


$productOne = new buildProduct("Samsung",432.32,"/url/132.html",4.3,true);

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

echo $productOne->type().'<br>';
echo $productOne->ramMemory().'<br>';

$tProduct = new tuningProduct('Iphone',432,'/images',4.0,true);
foreach ($tProduct as $item) {
    echo $item.PHP_EOL;
}