<?php

require_once '../system/Model.php';

class Model_Contact extends Model {

    public $string;

    public function __construct() {
        $this->string = 'Contact';
    }

    public static function emailTemplate($name,$subject,$email,$message) {
        $result = 'Name: ' . $name . '<br>' .
            'Subject:' . $subject .'<br>' .
            'Email: ' . $email . '<br>' .
            'Message: ' . $message ;
        return $result;
    }

    public function sendEmail($to, $subject, $message, $from)
    {
        $header = "From: ".$from." \r\n";
        $header .= "Cc:afgh@somedomain.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";

        mail($to, $subject, $message, $header);
    }

}