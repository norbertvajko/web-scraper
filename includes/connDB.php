<?php

    $userName = "n.vajko";
    $dbPass = "PQqNVaYk9V9ZWet";
    $hostname = "internship.rankingcoach.com:13306";
    $db = "n_vajko";

    $conn = mysqli_connect($hostname, $userName, $dbPass, $db)
    or die ("DB Connection Error");



$GLOBALS['conn'] = $conn;
