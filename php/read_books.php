<?php
$param = trim(filter_var($_POST['param'], FILTER_SANITIZE_STRING));

require_once 'fgb_db_connect.php';

if ($param == 'all') {
    $sql = 'SELECT * FROM `books` ORDER BY `name` DESC';
    $query = $pdo->prepare($sql);
    $query->execute();
} else if ($param == 'current_book') {
    $id = trim(filter_var($_POST['book_id'], FILTER_SANITIZE_NUMBER_INT));
    $sql = 'SELECT * FROM `books` WHERE `id` = :id';
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);
}

$books = $query->fetchAll(PDO::FETCH_OBJ);
echo json_encode($books);
?>