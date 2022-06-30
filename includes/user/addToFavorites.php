<?php
session_start();

include "../db/connDB.php";

$conn = $GLOBALS['conn'];


    $userId = $_SESSION['user_id'];

//    var_dump($userId);

    //preia product id din url
    $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    //var_dump($actual_link);
    $url_components = parse_url($actual_link);

    // Use parse_str() function to parse the
    // string passed via URL
    if (!empty($url_components['query'])) {
        parse_str($url_components['query'],$param);
//        var_dump($param);
    }

    $id = $param['product'];

    // if product is not in wishlist
    $sql = "SELECT * FROM favorites WHERE user_id='$userId' AND product_id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows < 1) {
        // add to favorites
        $sqlAdd = "INSERT INTO favorites (user_id, product_id) VALUES ('$userId', '$id')";
        $resultAdd = mysqli_query($conn, $sqlAdd);
    } else {
        // delete from favorites
        $sqlDelete = "DELETE FROM favorites WHERE user_id='$userId' AND product_id='$id'";
        $resultDelete = mysqli_query($conn, $sqlDelete);
    }



//    $insert = "INSERT into favorites (user_id, product_id) VALUES ('$userId','$idParam')";
//    $result = mysqli_query($GLOBALS['conn'], $insert);









