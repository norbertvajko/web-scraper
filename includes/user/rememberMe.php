<?php

$cookieValue = 'yes';
setcookie('remember_me', $cookieValue, time() + (86400 * 30), "/");

