<?php

if(isset($_POST["name"]))
{

    $success = '';
    $formComplete = true;

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $name_error = '';
    $email_error = '';
    $message_error = '';



    if(empty($name))
    {
        $name_error = 'Name is Required';
        $formComplete = false;
    }
    else
    {
        if(!preg_match("/^[a-zA-Z-' ]*$/", $name))
        {
            $name_error = 'Only Letters and White Space Allowed';
            $formComplete = false;
        }
    }

    if(empty($email))
    {
        $email_error = 'Email is Required';
        $formComplete = false;
    }
    else
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $email_error = 'eMail is invalid';
            $formComplete = false;
        }
    }
    if(empty($message))
    {
        $message_error = 'Message required';
        $formComplete = false;
    }

    if($formComplete) {
        $success = '<span id="sucMessage">Message Sent</span>';
    }

    $output = array(
        'success'		=>	$success,
        'name_error'	=>	$name_error,
        'email_error'	=>	$email_error,
        'message_error' =>  $message_error
    );

    echo json_encode($output);

}





