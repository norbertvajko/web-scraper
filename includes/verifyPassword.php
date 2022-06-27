<?php
session_start();
include "connDB.php";
$user_id = $_SESSION['user_id'];
$verifyPassword = true;

$password = $_POST['verify_passwd'];
$hashedPass = md5($password);

$response = [
    'pass_error' => '',
    'success' => ''
];

// Check to see if the e-mail exists
$check_password = mysqli_query($GLOBALS['conn'], "SELECT password from users WHERE ID = '$user_id'");


foreach ($check_password as $row) {

    $dbPass = $row;
    var_dump(json_encode($dbPass));
}


if (empty($password)) {
    $response['pass_error'] = 'Field Required';
    $verifyPassword = false;
} elseif ($dbPass != $hashedPass) {
    $response['pass_error'] = 'Wrong password';
    $verifyPassword = false;
}

var_dump($hashedPass);

if ($verifyPassword) {
    $response['success'] = "Success";
}

//transform into json obj
echo json_encode($response);