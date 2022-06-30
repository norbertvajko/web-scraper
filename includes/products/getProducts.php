<?php


include "../classes/searchProducts.php";

$getProd = new SearchProduct();
$results = $getProd->getProducts();
echo $results;

//header('location: ../../views/Results.php');