<?php

class Productss
{
        private  $name;
        private  $price;
        private  $description;
        private  $reviews;
        private  $inStock;

        function __construct($name , $price , $description , $reviews , $inStock)
        {
            $this->name = $name;
            $this->price = $price;
            $this->description = $description;
            $this->reviews = $reviews;
            $this->inStock = $inStock;
        }

        //GETTERS
        function getName() { return $this->name; }
        function getPrice() { return $this->price; }
        function getDescription() { return $this->description; }
        function getReviews() { return $this->reviews; }
        function getStock() { return $this->inStock; }

        //SETTERS
        function setName($name) { $this->name = $name; }
        function setPrice($price) { $this->price = $price; }
        function setDescription($description) { $this->description = $description; }
        function setReviews($reviews) { $this->reviews = $reviews; }
        function setStock($inStock) { $this->inStock = $inStock; }



}

$productOne = new Productss("Samsung",432.32,"fdsfsd das",4.3,1);
echo $productOne->getName() .'<br>';
$productOne->setName("Iphone");
echo $productOne->getName();