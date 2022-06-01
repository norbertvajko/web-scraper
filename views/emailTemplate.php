<?php

//include_once("../model/Contact.php");
include_once("../controller/Contact.php");
//include_once("../system/View.php");
$controller = new Controller_Contact();
//echo $controller->displayEmailTemplate();
$controller->sendMail();

