<?php

session_start();
session_destroy();
setcookie('remember_me','',time() - 30 , '/');
