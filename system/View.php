<?php

class View
{
    private $model;
    private $controller;

    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }

    public static function render($filename,$data) {
        $a = $data;
        require_once '../views/components/' .$filename. '.php';
//        require_once $filename;
    }
}