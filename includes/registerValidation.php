<?php

$registerComplete = true;

$fullName = $_POST["fullName"];
$registerEmail = $_POST["remail"];
$registerPassword = $_POST["rpassword"];
$correctPassword = $_POST["crpassword"];

$response = [
    'success' => '',
    'name_error' => '',
    'email_error' => '',
    'password_error' => '',
    'correctPassword_error' => '',

];

$uppercase = preg_match('@[A-Z]@', $registerPassword, $correctPassword);
$lowercase = preg_match('@[a-z]@', $registerPassword, $correctPassword);
$number = preg_match('@[0-9]@', $registerPassword, $correctPassword);
$specialchars = preg_match('@[^\w]@', $registerPassword, $correctPassword);

if (empty($fullName)) {
    $response['name_error'] = 'Field required';
    $registerComplete = false;
} elseif (strlen($fullName) <= 5) {
    $response['name_error'] = "Name should be at least 5 characters";
    $registerComplete = false;
} elseif (!preg_match("/^[a-zA-Z\s]*$/", $fullName)) {
    $response['name_error'] = 'Only letters!';
    $registerComplete = false;
}

if(empty($registerEmail)) {
    $response['email_error'] = "Field required";
    $registerComplete = false;
} elseif(!filter_var($registerEmail, FILTER_VALIDATE_EMAIL)) {
    $response['email_error'] = 'Invalid email format';
    $registerComplete = false;
}
if (empty($registerPassword)) {
    $response['password_error'] = 'Field Required';
    $registerComplete = false;
}
if (!$uppercase || !$lowercase || !$number || !$specialchars || strlen($registerPassword) < 8) {
    $response['password_error'] = "Password should be at least 8 characters in length , and should include
    at least one upper case letter, one number, and one special character.";
    $registerComplete = false;
}
if (empty($correctPassword)) {
    $response['correctPassword_error'] = "Field required";
    $registerComplete = false;
} elseif (!$correctPassword == $registerPassword) {
    $response['correctPassword_error'] = "Passwords must match!";
    $registerComplete = false;
}

if ($registerComplete) {
    $response['success'] = "Welcome";
}

//transform into json obj
echo json_encode($response);
