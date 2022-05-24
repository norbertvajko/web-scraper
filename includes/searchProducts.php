<?php

include "connDB.php";

require_once 'classes/Productss.php';

if (isset($_POST['user_input'])) {



    $data = array();
    $condition = preg_replace('/[^A-Za-z0-9\- ]/', '', $_POST['user_input']);
    $query = "SELECT name, price, images, in_stock, reviews, link, logo FROM products 
              WHERE name LIKE '%" . $condition . "%' 
              ORDER BY price ASC ";
    $result = mysqli_query($GLOBALS['conn'], $query);
    $replace_string = '<b>' . $condition . '</b>';


    foreach ($result as $row) {
        $data[] = array(
            'post_title' => str_ireplace($condition, $replace_string, $row['name']),
            'post_price' => $row['price'],
            'post_image' => $row['images'],
            'post_stock' => $row['in_stock'],
            'post_reviews' => $row['reviews'],
            'post_link' => $row['link'],
            'post_logo' => $row['logo']

        );

    }
    echo json_encode($data);
}
?>
