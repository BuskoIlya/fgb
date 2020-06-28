<?php
require '../pages/blocks/set_lang.php';
require_once 'lang/lang_scripts_' . $_SESSION['lang'] . '.php';

$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_EMAIL));
$user_password = trim(filter_var($_POST['user_password'], FILTER_SANITIZE_STRING));

$error = '';
if (strlen($login) == 0)
    $error = $Lang['wrong_login'];
else if (strlen($user_password) < 6)
    $error = $Lang['wrong_password'];

if ($error != '') {
    echo $error;
    $_SESSION['error_text'] = $error;
    exit();
}

require_once 'fgb_db_connect.php';

$sql = 'SELECT * FROM `users` WHERE `login` = :login && `password` = :password';
$query = $pdo->prepare($sql);
$query->execute(['login' => $login, 'password' => $user_password]);

$user = $query->fetch(PDO::FETCH_OBJ);
if ($user == null || $user->id == 0) {
    echo $Lang['wrong_user'];
    $_SESSION['error_text'] = $Lang['wrong_user'];
} else {
    setcookie('login', $user->full_name, time() + 30 * 24 * 3600, "/");
    setcookie('user_role', $user->role, time() + 30 * 24 * 3600, "/");
    echo 'Successful';
}
?>