<?php

include "connDB.php";

$forgetPasswordComplete = true;

$forgetEmail = $_POST["forgottenemail"];

$response = [
    'email_error' => '',
    'success' => '',
];

// Check to see if the e-mail exists
$check_email = mysqli_query($GLOBALS['conn'], "SELECT email FROM users where email = '$forgetEmail'");

if(empty($forgetEmail)) {
    $response['email_error'] = "Field required";
    $forgetPasswordComplete = false;
} elseif(!filter_var($forgetEmail, FILTER_VALIDATE_EMAIL)) {
    $response['email_error'] = 'Invalid email format';
    $forgetPasswordComplete = false;
} elseif(mysqli_num_rows($check_email) == 0){
    $response['email_error'] = 'This e-mail doesnt exist';
    $forgetPasswordComplete = false;
}

if ($forgetPasswordComplete) {

//    $query = "INSERT INTO users (full_name, email, password, vkey)
//  			  VALUES('$fullName', '$registerEmail', '$hashedPassword', '$vkey')";
//    $insert = mysqli_query($GLOBALS['conn'], $query);

    $to = $forgetEmail;
    $subject = "Email Password Change";
    $message = "aaa";
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $headers[] = 'From: Scrappy <scrappy@example.com>';

    mail($to, $subject, $message, implode("\r\n", $headers));

    $response['success'] = 'An e-mail was sent in order to reset your password. Please check your inbox';
    // NU VINE response span
}

echo json_encode($response);