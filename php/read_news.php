<?php
$year = trim(filter_var($_POST['year'], FILTER_SANITIZE_STRING));

require_once 'fgb_db_connect.php';
$sql = 'SELECT * FROM `news` WHERE `year` = :year ORDER BY `date`';
$query = $pdo->prepare($sql);
$query->execute(['year' => $year]);
$tournaments = $query->fetchAll(PDO::FETCH_OBJ);
echo json_encode($tournaments);
?>