<?php

$loginComplete = true;

$username = $_POST["uname"];
$password = $_POST["password"];

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

//if (!$uppercase || !$lowercase || !$number || !$specialchars || strlen($password) < 8) {
//    $response['password_error'] = "Password should be at least 8 characters in length , and should include
//    at least one upper case letter, one number, and one special character.";
//    $loginComplete = false;
//}

if ($loginComplete) {
    $response['success'] = "Welcome";
}


//transform into json obj
echo json_encode($response);
