<?php

include "connDB.php";

if (isset($_POST['submit'])) {

    $valueToSearch = $_POST['valueToSearch'];
    $sql = "SELECT * FROM products WHERE name LIKE '%$valueToSearch%'";
    $result = mysqli_query($GLOBALS['conn'], $sql) or die("Querry Failed");

    if (mysqli_num_rows($result) > 0) {
        $count = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<br>";
            $count++;
        }
    } else exit();

} else exit(); // The user accessed the script directly



