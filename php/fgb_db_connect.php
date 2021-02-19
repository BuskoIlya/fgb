<?php
$user = 'root';
$password = 'root';
$db = 'fgb_2020_06_27';
$host = '127.0.0.1';//'93.125.99.130';//'127.0.0.1';

//$user = 'xn90ad4c_test';
//$password = 'Venera@21';
//$db = 'xn90ad4c_federationgoby';
//$host = '127.0.0.1';

$charset = 'utf8';
$dsn = 'mysql:host=' . $host . ';port=3307;dbname=' . $db . ';charset=' . $charset;
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