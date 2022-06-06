<?php

include "connDB.php";
session_start();


$loginComplete = true;

$username = $_POST['uname'];
$password = $_POST["password"];
//$remember = $_POST["remember"];

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

            $username_db = $row['full_name'];
            $password_db = $row['password'];

            if ($hashedPassword == $password_db) {

//                $remember_checkbox = $_POST['remember'];

                $_SESSION['username'] = $username_db;
                $_SESSION['password'] = $password;


//                setcookie('username' , $username_db , time() + 86400 * 14);
//                setcookie('password', $password_db, time() + 86400 * 14);
                setcookie('remember_me', 'test');
//                setcookie('userlogin',$remember_checkbox,time() + 86400 * 14);

//                if (!empty($_POST['remember'])) {
//
//                    $remember_checkbox = $_POST['remember'];
//
//                    setcookie('username' , $username_db , time() + 86400 * 14);
//                    setcookie('password', $password_db, time() + 86400 * 14);
//                    setcookie('userlogin',$remember_checkbox,time() + 86400 * 14);
//                } else {
//                    setcookie('username' , $username_db , 30);
//                    setcookie('password', $password_db, 30);
//                }
//                session_start();
//                $_SESSION['username'] = $username;
            }

            $response['success'] = "Logging in...";
        }
    }
    else {
        $response['success_error'] = "Wrong email/password";
    }
}

//transform into json obj
echo json_encode($response);
