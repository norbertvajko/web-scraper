<?php

include 'connDB.php';

if (isset($_GET['vkey'])) {
    $vkey = $_GET['vkey'];

    $query = "SELECT verified, vkey FROM users WHERE verified = 0 AND vkey = '$vkey' LIMIT 1";
    $result = mysqli_query($GLOBALS['conn'], $query);

    if ($result->num_rows == 1) {
        //Validate email
        $updateQ = "UPDATE users SET verified = 1 WHERE vkey = '$vkey' LIMIT 1";
        $update = mysqli_query($GLOBALS['conn'],$updateQ);

        if ($update) {
            echo "Your account has been verified. You can log in now";
        }

    } else {
        echo "This account is invalid or already verified";
    }

} else {
    die('Something went wrong');
}