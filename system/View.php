<?php

//class View {
//    protected $view_file;
//    protected $view_data;
//
//    public function __construct($view_file,$view_data) {
//        $this->view_file = $view_file;
//        $this->view_data = $view_data;
//    }
//
//}

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
        require_once '../views/' .$filename. '.php';
//        require_once $filename;
    }
}