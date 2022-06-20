<?php

include "connDB.php";

$data = "k";
$search =  $_POST['valueToSearch'];
$date = date('Y-m-d H:i:s');

if (isset($_GET['q'])) {
    $data = $_GET['q'];
}

$query = "SELECT name FROM products WHERE name LIKE '%" . $data . "%' LIMIT 3";
$result = mysqli_query($GLOBALS['conn'],$query);

if ($result) {

    foreach ($result as $row) {

       $searQ = "INSERT into recent_searches (query,time) VALUES ('$query', '$date')";
       mysqli_query($GLOBALS['conn'],$searQ);
    }

}

return json_encode($data);






