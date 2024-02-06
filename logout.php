<?php

session_start();

unset($_SESSION['user_email']);
unset($_SESSION['pw']);

//session_unset();

//$_SESSION=array();

//session_destroy ();
$expir = time () + (86400*30);
setcookie('user', $_COOKIE ['user'], $expir, "/");
echo"you'r Logged Out";