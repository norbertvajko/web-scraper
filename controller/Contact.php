<?php

require_once '../system/Controller.php';
require_once '../model/Contact.php';
require_once '../system/View.php';


class Controller_Contact extends Controller {

    public function sendMail() {

        $emailSender = new Model_Contact();

        $to = 'norbertvajko@yahoo.com';
        $from = $_POST['email'];
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $emailSender->checkErrors($name,$subject,$message,$from);
      $emailSender->sendEmail($to, $subject, $message, $from);

    }


  public function displayEmailTemplate() {

      $name = $_POST['name'];
      $subject = $_POST['subject'];
      $from = $_POST['email'];
      $message = $_POST['message'];


      $displayForm = new Model_Contact();
      $displayForm = $displayForm->emailTemplate($name,$subject,$message,$from);

      View::render('emailTemplate',$displayForm);

  }
}

