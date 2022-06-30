<?php
session_start();
include "../db/connDB.php";
$user_id = $_SESSION['user_id'];


$newPasswordComplete = true;

$newPassword = $_POST['change_passwd'];
//$currentPassword = $_POST['curr_passwd'];



$response = [
    'new_pass_error' => '',
    'new_pass_error_correct' => '',
    'curr_pass_error' => '',
    'success' => ''
];

$uppercase = preg_match('@[A-Z]@', $newPassword);
$lowercase = preg_match('@[a-z]@', $newPassword);
$number = preg_match('@[0-9]@', $newPassword);
$specialchars = preg_match('@[^\w]@', $newPassword);




if (empty($newPassword)) {
    $response['new_pass_error'] = 'Field required';
    $newPasswordComplete = false;
} elseif (!$uppercase || !$lowercase || !$number || !$specialchars || strlen($newPassword) < 8) {
    $response['new_pass_error'] = "Password should be at least 8 characters in length , and should include
    at least one upper case letter, one number, and one special character.";
    $newPasswordComplete = false;
}
if (empty($_POST['change_passwd_corr'])) {
    $response['new_pass_error_correct'] = "Field required";
    $newPasswordComplete = false;
} elseif ($_POST['change_passwd'] !== $_POST['change_passwd_corr']) {
    $response['new_pass_error_correct'] = "Passwords must be same!";
    $newPasswordComplete = false;
}

if ($newPasswordComplete) {

    $hashedPass = md5($newPassword);
    $newQuery = "UPDATE users SET password = '$hashedPass' WHERE ID = '$user_id'";
    mysqli_query($GLOBALS['conn'], $newQuery);


    $response['success'] = "Password changed successfully";
}

//transform into json obj
echo json_encode($response);