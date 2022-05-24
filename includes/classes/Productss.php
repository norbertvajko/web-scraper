<?php

//declare(strict_types=1);

interface productParts {
    function startPhone();
    function closePhone();
}

class Productss implements productParts {

        const PRICE_LIMIT = 10000;

        private $name;
        private $price;
        protected $image;
        public $reviews;
        public $inStock;

        function __construct($name , $price , $image , $reviews , $inStock)
        {
            $this->name = $name;
            $this->price = $price;
            $this->image = $image;
            $this->reviews = $reviews;
            $this->inStock = $inStock;
        }


        //GETTERS
        public function getName() { return $this->name; }
        public function getPrice() { return $this->price; }
        public function getImage() { return $this->image; }
        public function getReviews() { return $this->reviews; }
        public function getStock() { return $this->inStock; }

        public function __get($name)
        {
            // TODO: Implement __get() method.
            return $this->$name;
        }


    //SETTERS
        public function setName($name) { $this->name = $name; }
        public function setPrice($price) { $this->price = $price; }
        public function setImage($image) { $this->image = $image; }
        public function setReviews($reviews) { $this->reviews = $reviews; }
        public function setStock($inStock) { $this->inStock = $inStock; }

        public function setProduct($name ,$price , $image , $reviews , $inStock) {
            $this->name = $name;
            $this->price = $price;
            $this->image = $image;
            $this->reviews = $reviews;
            $this->inStock = $inStock;
        }

        public function __set($name, $value)
        {
            // TODO: Implement __set() method.
            $this->$name = $value;
        }



    //
    public function whatIsThis() { var_dump($this); }
    public function printProduct() {
            echo "Product name: " .$this->name.'<br>';
            echo "Product price: " .$this->price.'<br>';
            echo "Product image: " .$this->image.'<br>';
            echo "Product reviews: ".$this->reviews.'<br>';
            echo "Product inStock: ".$this->inStock.'<br>';
    }
    public function startPhone()
    {
        // TODO: Implement startPhone() method.
        echo "Phone has started";
    }
    public function closePhone()
    {
        // TODO: Implement closePhone() method.
        echo "Phone closed!";
    }
}