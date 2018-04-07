<?php

$email="rakeshvtv01@gmail.com";
$to      = $email;
$subject = "Please validate your email from cash2money";
$message   = "http://www.site.com/confirmation.php?passkey=$confirm_code";
$Header = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$Header .= 'From: Administrator <info@problem.com >' . "\r\n";
ini_set('SMTP', "relay-hosting.secureserver.net");
ini_set('smtp_port', "25");

mail($to, $subject, $message, $Header);

?>