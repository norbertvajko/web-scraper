<?php

date_default_timezone_set('Europe/Bucharest');
$date = date('m/d/Y h:i:s a', time());

include "connDB.php";

$input  = $_POST['valueToSearch'];

$query = "SELECT id FROM products WHERE name LIKE '%" . $input . "%' ";
$result = mysqli_query($GLOBALS['conn'],$query);

if ($result) {

    foreach ($result as $row) {

        $id = $row['id'];

        $insertSQL = "INSERT INTO recent_searches (product_id, date) VALUES ('$id', '$date')";
        mysqli_query($GLOBALS['conn'],$insertSQL);

    }

}

//return json_encode($data);