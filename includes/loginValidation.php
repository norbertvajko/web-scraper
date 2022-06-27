<?php

include "connDB.php";
session_start();


$loginComplete = true;

$username = $_POST['uname'];
$password = $_POST["password"];

$hashedPassword = md5($password);

$response = [
    'success' => '',
    'username_error' => '',
    'password_error' => '',
    'success_error' => ''
];

$uppercase     =    preg_match('@[A-Z]@', $password);
$lowercase     =    preg_match('@[a-z]@', $password);
$number        =    preg_match('@[0-9]@', $password);
$specialchars  =    preg_match('@[^\w]@', $password);

if (empty($username)) {
    $response['username_error'] = 'Field required';
    $loginComplete = false;
}elseif(!filter_var($username, FILTER_VALIDATE_EMAIL)) {
    $response['username_error'] = 'Invalid email format';
    $loginComplete = false;
}
if (empty($password)) {
    $response['password_error'] = 'Field Required';
    $loginComplete = false;
}


if ($loginComplete) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE email = '$username' AND password='$password'";
    $results = mysqli_query($GLOBALS['conn'], $query);

    if (mysqli_num_rows($results)) {

        while ($row = mysqli_fetch_assoc($results)) {

            $verified = $row['verified'];

            $username_db = $row['full_name'];
            $password_db = $row['password'];
            $id_db = $row['ID'];


            if ($hashedPassword == $password_db && $verified == 1) {

                $_SESSION['username'] = $username_db;
                $_SESSION['user_id'] = $id_db;


                $response['success'] = "Logging in...";
            } else {
                $response['success_error'] = "Please verify your e-mail!";
            }


        }
    }
    else {
        $response['success_error'] = "Wrong email/password";
    }
}

//transform into json obj
echo json_encode($response);
