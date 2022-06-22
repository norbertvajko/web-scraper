<?php

include "connDB.php";


$search =  $_POST['valueToSearch'];
$date = date('Y-m-d H:i:s');

if (isset($valueToSearch)) {

    $query = "SELECT name FROM products WHERE name LIKE '%" . $search . "%' LIMIT 3";
    $result = mysqli_query($GLOBALS['conn'], $query);

    if ($result) {

        foreach ($result as $row) {

            $searQ = "INSERT into recent_searches (query,time) VALUES ('$search','$date')";
            mysqli_query($GLOBALS['conn'], $searQ);
        }

    }
}






