<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields required" . '<br/>';
    }
    else {
        echo "Proceed..." . '<br/>';
    }
}
