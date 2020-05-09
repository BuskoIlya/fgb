<?php
session_start();
setcookie('login', "", time() - 3600, "/");
unset($_COOKIE['login']);
echo true;
?>