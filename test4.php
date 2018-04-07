<?php
/**
 * Created by PhpStorm.
 * User: Rakeshkp
 * Date: 24-01-2018
 * Time: 10:11
 */
require_once "../PHPMailer/PHPMailerAutoload.php";

$email="rakeshvtv01@gmail.com";
$admin_mail='rakesh@svastera.com';







$mail1 = new PHPMailer;
$mail1->Host       = "relay-hosting.secureserver.net";
$mail1->Port       = 25;
$mail1->SMTPDebug  = 0;
$mail1->SMTPSecure = "none";
$mail1->SMTPAuth   = false;
$mail1->isHTML(true);
$mail1->Username   = "";
$mail1->Password   = "";



$mail1->setFrom('info@doodleinteriors.com', '');
$mail1->addAddress('rakeshvtv01@gmail.com', 'rakesh@svastera.com');
$mail1->Subject = 'doodle interiors get a quote';
$mail1->Body = $message1;

//$mail1->AddAttachment($_FILES['fileToUpload']['tmp_name'], $_FILES['fileToUpload']['name']);



if (!$mail1->send()) {
    $msg .= "Mailer Error: " . $mail->ErrorInfo;
} else {
    $msg .= "Mailer Error: " . $mail->ErrorInfo;
}







?>