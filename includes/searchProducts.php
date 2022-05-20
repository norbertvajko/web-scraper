<?php

include "connDB.php";

if (isset($_POST['user_input'])) {


    $data = array();
    $condition = preg_replace('/[^A-Za-z0-9\- ]/', '', $_POST['user_input']);
    $query = "SELECT name FROM products 
              WHERE name LIKE '%".$condition."%' 
              ORDER BY price ASC LIMIT 2";
    $result = mysqli_query($GLOBALS['conn'], $query);
    $replace_string = '<b>'.$condition.'</b>';



    foreach ($result as $row) {
        $data[] = array(
            'post_title' => str_ireplace($condition,$replace_string,$row['name']),
            'post_price' => $row['price']
        );

    }
    echo json_encode($data);
}
?>
