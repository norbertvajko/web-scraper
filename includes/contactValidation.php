<?php

//Database Conn
$userName = "n.vajko";
$dbPass = "PQqNVaYk9V9ZWet";
$hostname = "internship.rankingcoach.com:13306";
$db = "n_vajko";

$conn = mysqli_connect($hostname, $userName, $dbPass, $db)
or die ("DB Connection Error");

$formComplete = true;

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$response = [
    'success' => '',
    'name_error' => '',
    'email_error' => '',
    'message_error' => ''
    ];

    if (empty($name)) {
        $response['name_error'] = 'Name is Required';
        $formComplete = false;
    }elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $response['name_error']  = 'Only Letters and White Space Allowed';
        $formComplete = false;
    }
    if (empty($email)) {
        $response['email_error'] = 'Email is Required';
        $formComplete = false;
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['email_error'] = 'eMail is invalid';
        $formComplete = false;
    }

    if (empty($message)) {
        $response['message_error'] = 'Message required';
        $formComplete = false;
    }


if ($formComplete) {
    $response['success'] = 'Message Sent';

    $query = "INSERT INTO contact (name , email , message) VALUES('$name','$email','$message')";
    mysqli_query($conn, $query);
}

//transform into json obj
echo json_encode($response);





