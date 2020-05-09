<?php
require '../pages/blocks/set_lang.php';
require_once 'lang/lang_scripts_' . $_SESSION['lang'] . '.php';

$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$user_password = trim(filter_var($_POST['user_password'], FILTER_SANITIZE_STRING));
$family = trim(filter_var($_POST['family'], FILTER_SANITIZE_STRING));
$name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
$father = trim(filter_var($_POST['father'], FILTER_SANITIZE_STRING));
$city = trim(filter_var($_POST['city'], FILTER_SANITIZE_STRING));
$birth_date = trim(filter_var($_POST['birth_date'], FILTER_SANITIZE_STRING));

$error = '';
if (strlen($email) <= 3)
    $error = $Lang['wrong_email'];
else if (strlen($user_password) < 6)
    $error = $Lang['wrong_password'];
else if (strlen($family) == 0)
    $error = $Lang['wrong_family'];
else if (strlen($name) == 0)
    $error = $Lang['wrong_name'];
else if (strlen($father) == 0)
    $error = $Lang['wrong_father'];
else if (strlen($city) == 0)
    $error = $Lang['wrong_city'];
else if (strlen($birth_date) == 0)
    $error = $Lang['wrong_birth_date'];

if ($error != '') {
    echo $error;
    $_SESSION['error_text'] = $error;
    exit();
}

//$hash = "vbycr";
//$password = md5($password . $hash);

require_once 'fgb_db_connect.php';

$sql = 'INSERT INTO users(full_name, email, password, city, birth_date) 
    VALUES(?, ?, ?, ?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$family . ' ' . $name . ' ' . $father,
    $email, $user_password, $city, $birth_date]);

$_SESSION['info_text'] = $Lang['user_registered'];
echo 'Successful';
?>