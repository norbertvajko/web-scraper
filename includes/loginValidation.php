<?php

$loginComplete = true;

$username = $_POST["uname"];
$password = $_POST["password"];

$hashedPassword = md5($password);

$response = [
    'success' => '',
    'username_error' => '',
    'password_error' => ''
];

$uppercase     =    preg_match('@[A-Z]@', $password);
$lowercase     =    preg_match('@[a-z]@', $password);
$number        =    preg_match('@[0-9]@', $password);
$specialchars  =    preg_match('@[^\w]@', $password);

if (empty($username)) {
    $response['username_error'] = 'Field required';
    $loginComplete = false;
}
if (empty($password)) {
    $response['password_error'] = 'Field Required';
    $loginComplete = false;
}
elseif(!$password == 'aaa') {
    $response['password_error'] = 'Invalid Password';
    $loginComplete = false;
}


if ($loginComplete) {

    $response['success'] = "Welcome";
}

//transform into json obj
echo json_encode($response);
