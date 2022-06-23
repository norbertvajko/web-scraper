<?php

date_default_timezone_set('Europe/Bucharest');
$date = time();

include "connDB.php";

$product_id  = $_POST['product_id'];

$insertSQL = "INSERT INTO recent_searches (product_id, date) VALUES ('$product_id', '$date')";
$result = mysqli_query($GLOBALS['conn'],$insertSQL);

if ($result != FALSE) {
    echo json_encode(array('success' => true));
}

//$query = "SELECT id FROM products WHERE name LIKE '%" . $input . "%' ";
//$result = mysqli_query($GLOBALS['conn'],$query);
//
//if ($result) {
//
//    foreach ($result as $row) {
//
//        $id = $row['id'];
//
//        $insertSQL = "INSERT INTO recent_searches (product_id, date) VALUES ('$id', '$date')";
//        mysqli_query($GLOBALS['conn'],$insertSQL);
//
//    }
//
//}

//return json_encode($data);