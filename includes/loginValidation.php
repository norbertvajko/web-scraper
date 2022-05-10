<?php

//Database Conn
$userName = "n.vajko";
$dbPass = "PQqNVaYk9V9ZWet";
$hostname = "internship.rankingcoach.com:13306";
$db = "n_vajko";

$conn = mysqli_connect($hostname, $userName, $dbPass, $db)
or die ("DB Connection Error");


$loginComplete = true;

$username = $_POST["uname"];
$password = $_POST["password"];

$hashedPassword = md5($password);

$response = [
    'success' => '',
    'username_error' => '',
    'password_error' => '',
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



if ($loginComplete) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE email = '$username' AND password='$password'";
    $results = mysqli_query($conn, $query);

    if (mysqli_num_rows($results) == 1) {
        $response['success'] = "You are now logged in";
    }
    else {
        $response['success'] = "Wrong email/password";
    }
}

//transform into json obj
echo json_encode($response);
