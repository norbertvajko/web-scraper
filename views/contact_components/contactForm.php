<?php

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
        $response['success'] = '<span id="sucMessage">Message Sent</span>';
    }


//transform into json obj
echo json_encode($response);





