<?php
session_start();
if (!isset($_SESSION['lang']) && !isset($_GET['lang'])) {
    $_SESSION['lang'] = 'ru';
} else if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}
?>
