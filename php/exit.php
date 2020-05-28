<?php
session_start();
setcookie('login', "", time() - 30 * 24 * 3600, "/");
unset($_COOKIE['login']);
setcookie('user_role', "", time() - 30 * 24 * 3600, "/");
unset($_COOKIE['user_role']);
echo true;
?>