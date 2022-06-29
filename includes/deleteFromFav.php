<?php
session_start();
include "connDB.php";
$user_id = $_SESSION['user_id'];

$favorites_id = $_POST['favorites_id'];

$deleteFromFav = true;


$response = [
    'error' => '',
    'success' => ''
];


$sql = "DELETE FROM favorites WHERE id = '$favorites_id'";
$result = mysqli_query($GLOBALS['conn'],$sql);
$response['success'] = "Product deleted";


//transform into json obj
echo json_encode($response);