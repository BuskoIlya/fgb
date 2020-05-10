<?php
require_once 'fgb_db_connect.php';
$sql = 'SELECT * FROM `wagc`';
$query = $pdo->prepare($sql);
$query->execute();
$wagc = $query->fetchAll(PDO::FETCH_OBJ);
echo json_encode($wagc);
?>