<?php

include "connDB.php";

$forgetPasswordComplete = true;

$code = $_POST['forgottencode'];

$response = [
    'code_error' => '',
    'success' => '',
];

$number = preg_match('@[0-9]@', $code);

if(empty($code)) {
    $response['code_error'] = "Field required";
    $forgetPasswordComplete = false;
} elseif(!$number) {
$response['code_error'] = 'Numbers only!';
    $forgetPasswordComplete = false;
}

if ($forgetPasswordComplete) {

    if(isset($code)) {
        $codeCheckQuery = "SELECT * FROM uesrs WHERE password_code_reset = '$code'";
        $codeCheckResult = mysqli_query($GLOBALS['conn'], $codeCheckQuery);

        if ($codeCheckResult) {

        }
    }
    $response['success'] = 'Success';
}

echo json_encode($response);