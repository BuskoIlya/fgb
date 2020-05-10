<?php
require_once 'fgb_db_connect.php';
$sql = 'SELECT * FROM `eu_personal`';
$query = $pdo->prepare($sql);
$query->execute();
$eup = $query->fetchAll(PDO::FETCH_OBJ);
echo json_encode($eup);
?>