<?php
require '../pages/blocks/set_lang.php';
require_once 'lang/lang_scripts_' . $_SESSION['lang'] . '.php';

$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$user_password = trim(filter_var($_POST['user_password'], FILTER_SANITIZE_STRING));

$error = '';
if (strlen($email) == 0)
    $error = $Lang['wrong_email'];
else if (strlen($user_password) < 6)
    $error = $Lang['wrong_password'];

if ($error != '') {
    echo $error;
    $_SESSION['error_text'] = $error;
    exit();
}

//$hash = "vbycr";
//$password = md5($password . $hash);
//WHERE `email` = :email && `password` = :password';
//['email' => $email, 'password' => $password]

require_once 'fgb_db_connect.php';

$sql = 'SELECT * FROM `users` WHERE `email` = :email && `password` = :password';
$query = $pdo->prepare($sql);
$query->execute(['email' => $email, 'password' => $user_password]);

$user = $query->fetch(PDO::FETCH_OBJ);
if ($user == null || $user->id == 0) {
    echo $Lang['wrong_user'];
    $_SESSION['error_text'] = $Lang['wrong_user'];
} else {
    setcookie('login', $user->full_name, time() + 3600, "/");
    echo 'Successful';
}
?>