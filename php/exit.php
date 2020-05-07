<?php
session_start();
setcookie('login', "", time() - 3600, "/fgb/");
unset($_COOKIE['login']);
echo true;
?>