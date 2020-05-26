<?php
require '../libs/phpmailer/PHPMailer.php';
require '../libs/phpmailer/SMTP.php';
require '../libs/phpmailer/Exception.php';

$news_id = $_POST['news_id'];
$news_ref = "www.federationgo.by/" . $_POST['news_ref'];
$news_title = $_POST['news_title'];
$og_img = "../" . $_POST['og_img'];

require_once "fgb_db_connect.php";
$sql = 'SELECT * FROM `users` WHERE `has_sign`="true"';
$query = $pdo->prepare($sql);
$query->execute();
$users = $query->fetchAll(PDO::FETCH_OBJ);

$body = "<a href=$news_ref>
    <img src='cid:og_image' width='640' height='300'></a>";

$mail = new PHPMailer\PHPMailer\PHPMailer();

try {
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth = true;

    $mail->Host = 'smtp.mail.ru';
    $mail->Username = '';
    $mail->Password = '';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('', 'Бусько Илья Владимирович');

    foreach ($users as $u) {
        $mail->addAddress($u->email);
        $mail->isHTML(true);

        $mail->Subject = $news_title;
        $mail->AddEmbeddedImage($og_img,'og_image');
        $mail->Body = $body;

        if ($mail->send()) {
        } else {
            $_SESSION['error_text'] = "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
            exit();
        }
        //$subject = "=?utf-8?B?" . base64_encode($news_title) . "?=";
        //$headers = "From: fgb\r\nReply-to: no-replay\r\nContent-type: text/html; charset=utf-8\r\n";
        //mail($email, $subject, $body, $headers);
    }
} catch (Exception $e) {
    $_SESSION['error_text'] = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
    exit();
}

$sql = 'UPDATE `news` SET `is_send_emails`="finished" WHERE `id`=:news_id';
$query = $pdo->prepare($sql);
$query->execute(['news_id' => $news_id]);

echo 'Successful';
?>
