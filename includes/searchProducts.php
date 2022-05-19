<?php

include "connDB.php";

$valueToSearch = $_GET['$valueToSearch'];

$sql = "SELECT * FROM products WHERE name LIKE '%$valueToSearch%' OR price LIKE '%$valueToSearch%' OR in_stock LIKE '%$valueToSearch%' OR link LIKE '%$valueToSearch%'";
$result = mysqli_query($GLOBALS['conn'], $sql) or die("Query Failed");

if ($result->num_rows >= 1) {
    while ($row = mysqli_fetch_array($result)) {
        $productName = $row['name'];
        $productPrice = $row['price'];
        $productImage = $row['image'];
        $productLink = $row['link'];
        $productReviews = $row['reviews'];
    }
}
