<?php

session_start();
$cookieValue = 'yes';
setcookie('loggedIn', $cookieValue, time() + (86400 * 30), "/");

