<?php

$cookieValue = '1';
setcookie('consent_cookie', $cookieValue, time() + (86400 * 30), "/");
