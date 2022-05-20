<?php

include "connDB.php";

if (isset($_GET['valueToSearch'])) {

    $searchInput = $_GET['valueToSearch'];

    var_dump($searchInput);

    $sql = "SELECT name FROM products WHERE name LIKE '%$searchInput%'";
    $result = mysqli_query($GLOBALS['conn'], $sql) or die("Query Failed");

    echo json_encode(mysqli_fetch_array($result));

    if (mysqli_num_rows($result) > 0) {
        $respone = array();
        while ($row = mysqli_fetch_array($result)) {
//            array_push($respone,$row);
            echo $row['name'];

        }
        var_dump($respone);
    }


}