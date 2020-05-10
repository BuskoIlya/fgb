<?php
require_once 'fgb_db_connect.php';
$sql = 'SELECT * FROM `eu_command`';
$query = $pdo->prepare($sql);
$query->execute();
$euc = $query->fetchAll(PDO::FETCH_OBJ);
echo json_encode($euc);
?>