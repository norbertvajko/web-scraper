<?php

//declare(strict_types=1);

interface productParts {
    function startPhone();
    function closePhone();
}

abstract class Product {

    protected $ramMemo = 5;

    abstract public function type();
    protected function ramMemory()
    {
       return $this->ramMemo;
    }

}

class tuningProduct extends buildProduct {

    public function ramMemory() {
        return 2;
    }
}

class buildProduct extends Product implements productParts {

        const PRICE_LIMIT = 10000;

        private $name;
        private $price;
        protected $image;
        public $reviews;
        public $inStock;

        public function __construct($name , $price , $image , $reviews , $inStock)
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
        echo "Phone has started".'<br>';
    }
    public function closePhone()
    {
        // TODO: Implement closePhone() method.
        echo "Phone closed!";
    }

    public function type()
    {
        // TODO: Implement type() method.
        echo "Product type:".'<br>';
        return "SMARTPHONE";
    }
     function ramMemory()
    {
        // TODO: Implement ramMemory() method.
        echo "Ram Memory:".'<br>';
        return parent::ramMemory();
    }

}
