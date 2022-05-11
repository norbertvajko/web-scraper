<?php

//Database Conn
$userName = "n.vajko";
$dbPass = "PQqNVaYk9V9ZWet";
$hostname = "internship.rankingcoach.com:13306";
$db = "n_vajko";

$conn = mysqli_connect($hostname, $userName, $dbPass, $db)
or die ("DB Connection Error");

$newsLetterComplete = true;

$newsletterEmail = $_POST["newsLetterName"];
$subscribeButton = $_POST["subscribeButton"];

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
    mysqli_query($conn, $query);
}
//transform into json obj
echo json_encode($response);