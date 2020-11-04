<?php
$eu_group = trim(filter_var($_POST['eu_group'], FILTER_SANITIZE_STRING));
require_once 'fgb_db_connect.php';
$sql = 'SELECT * FROM `eu_20_21` WHERE `eu_group` = :eu_group ORDER BY `score` DESC, `bw` DESC, `b1` DESC, `b2` DESC';
$query = $pdo->prepare($sql);
$query->execute(['eu_group' => $eu_group]);
$eu_20_21 = $query->fetchAll(PDO::FETCH_OBJ);
echo json_encode($eu_20_21);
?>
