<?php

include "connDB.php";

$forgetPasswordComplete = true;

$code = $_POST['forgottencode'];

$response = [
    'code_error' => '',
    'success' => '',
];

$number = preg_match('@[0-9]@', $code);

$codeCheckQuery = "SELECT * FROM users WHERE password_code_reset = '$code'";
$codeCheckResult = mysqli_query($GLOBALS['conn'], $codeCheckQuery);


if (empty($code)) {
    $response['code_error'] = "Field required";
    $forgetPasswordComplete = false;
} elseif (!$number) {
    $response['code_error'] = 'Numbers only!';
    $forgetPasswordComplete = false;
} elseif ((mysqli_fetch_assoc($codeCheckResult)) == 0) {
    $response['code_error'] = 'Invalid code!';
    $forgetPasswordComplete = false;
}

if ($forgetPasswordComplete) {

    $newQuery = "UPDATE users SET password_code_reset = 1 WHERE password_code_reset = '$code'";
    mysqli_query($GLOBALS['conn'], $newQuery);


    $response['success'] = 'Success';
}

echo json_encode($response);