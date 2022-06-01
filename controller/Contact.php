<?php

require_once '../system/Controller.php';
require_once '../model/Contact.php';


class Controller_Contact extends Controller {

  public function sendMail() {
       if (isset($_POST['submit'])) {

           $to = 'norbertvajko@yahoo.com';
           $from = $_POST['email'];
           $subject = $_POST['subject'];
           $message = $_POST['message'];


           $emailSender = new Model_Contact();
           $emailSender->sendEmail($to,$subject,$message,$from);
//           echo 'E-mail sent';
       }

  }

  public function displayEmailTemplate() {

    $data = [
          'email' => $_POST['email'],
          'name' => $_POST['name'],
            'subject' => $_POST['subject'],
          'message' => $_POST['message'],
      ];
//      $name = $_POST['name'];
//      $from = $_POST['from'];
//      $message = $_POST['message'];

//      $formModel = new Model_Contact();
//      $formModel->displayEmailTemaplte($data['name'],$data['email'],$data['message']);
//
//      View::render('emailTemplate', $data);

      $displayForm = new Model_Contact();
      $displayForm->emailTemplate($_POST['name'],$_POST['subject'],$_POST['email'],$_POST['message']);

//      require_once "../system/View.php";
//      View::render('emailTemplate', $data);
  }
}

