<?php

class Controller
{
    private $model;

    public function __construct($model=null) {
        $this->model = $model;
    }
}