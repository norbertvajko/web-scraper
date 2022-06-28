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
$sql = "SELECT password from users WHERE ID = '$user_id'";
$result = mysqli_query($GLOBALS['conn'],$sql);



if (empty($password)) {
    $response['pass_error'] = 'Camp obligatoriu';
    $verifyPassword = false;
}


if ($verifyPassword) {
    if (mysqli_num_rows($result)) {

        while ($row = mysqli_fetch_assoc($result)) {

            $password_db = $row['password'];


            if ($hashedPass == $password_db) {
                $response['success'] = "Success";
            } else {
                $response['pass_error'] = "Parola incorecta";
            }
        }
    }

}

//transform into json obj
echo json_encode($response);