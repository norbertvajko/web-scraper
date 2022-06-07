<?php

session_start();
$cookieValue = 'Logged In';
setcookie('logged_in', $cookieValue, time() + (86400 * 30), "/");

