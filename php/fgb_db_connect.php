<?php
$user = 'root';//'xn90ad4c_buskoi';//'root';
$password = 'root';//'T34@fgb2020';//'root';
$db = 'federationgoby';//'xn90ad4c_federationgoby';//'federationgoby';
$host = '127.0.0.1';//'93.125.99.130';//'127.0.0.1';

$dsn = 'mysql:host=' . $host . ';port=3307;dbname=' . $db;
try {
    $pdo = new PDO($dsn, $user, $password,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
    $_SESSION['error_text'] =
        iconv('cp1251', 'utf-8', $e->getMessage());
    echo $_SESSION['error_text'];
    die();
};
?>