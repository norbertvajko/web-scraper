<?php
session_start();
include "../db/connDB.php";
$user_id = $_SESSION['user_id'];

$newEmailComplete = true;

$newEmail = $_POST['newEmail'];

$response = [
    'new_email_err' => '',
    'success' => '',
];


if (empty($newEmail)) {
    $response['new_email_err'] = "Field required";
    $newEmailComplete = false;
} elseif (!filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
    $response['new_email_err'] = 'Invalid e-mail format';
    $newEmailComplete = false;
}

if ($newEmailComplete) {

    $sql = "SELECT email FROM users WHERE ID = '$user_id'";
    $result = mysqli_query($GLOBALS['conn'],$sql);

    if($result->num_rows == 1) {
        $newSQL = "UPDATE users SET email = '$newEmail' WHERE ID = '$user_id' ";
        mysqli_query($GLOBALS['conn'],$newSQL);

        $response['success'] = 'E-mailul a fost schimbat';
    } else {
        $response['new_email_err'] = "Error";
    }


}

echo json_encode($response);