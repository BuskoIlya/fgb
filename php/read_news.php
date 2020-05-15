<?php
$year = trim(filter_var($_POST['year'], FILTER_SANITIZE_STRING));
$type = trim(filter_var($_POST['type'], FILTER_SANITIZE_STRING));
$is_finished = trim(filter_var($_POST['is_finished'], FILTER_SANITIZE_STRING));

require_once 'fgb_db_connect.php';

$array ['year'] = $year;
$params = '';
if ($type == 'tournament') {
    $params = ' && `type` = :type';
    $array ['type'] = $type;
}
if ($is_finished == 'finished') {
    $params = $params . ' && `is_finished` = :is_finished';
    $array ['is_finished'] = $is_finished;
}

$sql = 'SELECT * FROM `news` WHERE `year` = :year' . $params . ' ORDER BY `date`';
$query = $pdo->prepare($sql);
$query->execute($array);
$tournaments = $query->fetchAll(PDO::FETCH_OBJ);

echo json_encode($tournaments);
?>