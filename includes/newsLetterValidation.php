<?php

include "connDB.php";

$newsLetterComplete = true;

$newsletterEmail = $_POST["newsLetterName"];
//$subscribeButton = $_POST["subscribeButton"];

$response = [
    'success' => '',
    'email_error' => ''
];

if (empty($newsletterEmail)) {
    $response['email_error'] = "Field required";
    $newsLetterComplete = false;
} elseif (!filter_var($newsletterEmail, FILTER_VALIDATE_EMAIL)) {
    $response['email_error'] = 'Invalid email format';
    $newsLetterComplete = false;
}


if ($newsLetterComplete) {
    $response['success'] = 'You have succesfully subscribed to our newsletter';

    $query = "INSERT INTO newsletter (email) VALUES('$newsletterEmail')";
    mysqli_query($GLOBALS['conn'], $query);
}
//transform into json obj
echo json_encode($response);