<?php
include "connDB.php";

$newPasswordComplete = true;

$newPassword = $_POST['reset_passwd'];
//$newPasswordCorrect = $_POST['reset_passwd_cor'];



$response = [
    'new_pass_error' => '',
    'new_pass_error_correct' => '',
    'success' => ''
];

$uppercase = preg_match('@[A-Z]@', $newPassword);
$lowercase = preg_match('@[a-z]@', $newPassword);
$number = preg_match('@[0-9]@', $newPassword);
$specialchars = preg_match('@[^\w]@', $newPassword);


if (empty($newPassword)) {
    $response['new_pass_error'] = 'Field Required';
    $newPasswordComplete = false;
} elseif (!$uppercase || !$lowercase || !$number || !$specialchars || strlen($newPassword) < 8) {
    $response['new_pass_error'] = "Password should be at least 8 characters in length , and should include
    at least one upper case letter, one number, and one special character.";
    $newPasswordComplete = false;
}
if (empty($_POST['reset_passwd_cor'])) {
    $response['new_pass_error_correct'] = "Field Required";
    $newPasswordComplete = false;
} elseif ($_POST['reset_passwd'] !== $_POST['reset_passwd_cor']) {
    $response['new_pass_error_correct'] = "Passwords do not match! Try again";
    $newPasswordComplete = false;
}

if ($newPasswordComplete) {

    $hashedPass = md5($newPassword);
    $newQuery = "UPDATE users SET password = '$hashedPass' WHERE password_code_reset = 1";
    $result = mysqli_query($GLOBALS['conn'], $newQuery);

    if ($result) {
        $delQ = "UPDATE users SET password_code_reset = 0 WHERE password_code_reset = 1";
        mysqli_query($GLOBALS['conn'], $delQ);
    }

    $response['success'] = "Password Changed";
    }

//transform into json obj
echo json_encode($response);