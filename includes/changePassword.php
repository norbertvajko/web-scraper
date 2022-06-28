<?php
session_start();
include "connDB.php";
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
    $response['new_pass_error'] = 'Camp obligatoriu';
    $newPasswordComplete = false;
} elseif (!$uppercase || !$lowercase || !$number || !$specialchars || strlen($newPassword) < 8) {
    $response['new_pass_error'] = "Parola trebuie sa contina cel putin 8 caractere , o litera mare, un numar, si un caracter special.";
    $newPasswordComplete = false;
}
if (empty($_POST['change_passwd_corr'])) {
    $response['new_pass_error_correct'] = "Camp obligatoriu";
    $newPasswordComplete = false;
} elseif ($_POST['change_passwd'] !== $_POST['change_passwd_corr']) {
    $response['new_pass_error_correct'] = "Parolele nu sunt la fel. Incearca din nou!";
    $newPasswordComplete = false;
}

if ($newPasswordComplete) {

    $hashedPass = md5($newPassword);
    $newQuery = "UPDATE users SET password = '$hashedPass' WHERE ID = '$user_id'";
    mysqli_query($GLOBALS['conn'], $newQuery);


    $response['success'] = "Parola a fost schimbata cu succes!";
}

//transform into json obj
echo json_encode($response);