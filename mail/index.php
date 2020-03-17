<?php

require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';

$mail->Username='abdelkodoussbelhaimer20@gmail.com';
$mail->Password='Abdou1997';

$mail->setFrom('abdelkodoussbelhaimer20@gmail.com','Abdelkodouss');
$mail->addAddress('abdelkodoussbelhaimer@gmail.com');
$mail->AddReplyTo('abdelkodoussbelhaimer20@gmail.com');

$mail->isHTML(true);
$mail->Subject='PHP Mailer Subject';
$mail->Body='<h1 align=centre>Subscribe my chanel</h1><br/><h4>Like my video</h4>';

if(!$mail->send())
{
    echo 'Message could not be sent!';
}
else
{
    echo 'Message has been sent congratulation';
}


