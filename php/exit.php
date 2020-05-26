<?php
session_start();
setcookie('login', "", time() - 3600, "/");
unset($_COOKIE['login']);
setcookie('user_role', "", time() - 3600, "/");
unset($_COOKIE['user_role']);
echo true;
?>