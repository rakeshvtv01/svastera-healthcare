<?php

if(isset($_POST["sendmsg"]))
{


    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
	 $mob=$_POST["mob"];
   // $product=$_POST["product"];
    $msg=$_POST["msg"];

$url = 'https://api.elasticemail.com/v2/email/send';

$email="rakeshvtv01@gmail.com";





$to      = $email;
$to_admin="sales@svastera.com";
$subject = "SVASTERA HEALTHCARE";
$message   = "THANKS  FOR YOUR INTREST WITH US \n WE WILL GET BACK TO YOU SHORTLY";
$message1   = "CUSTOMER NAME : $fname \n CUSTOMER MOBILE : $mob \n CUSTOMER EMAIL : $email \n message : $msg  \n WE WILL GET BACK TO YOU SHORTLY";
	
  $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$Header .= 'From: SVASTERA <info@svastera.com >' . "\r\n";
ini_set('SMTP', "relay-hosting.secureserver.net");
ini_set('smtp_port', "25");


	
	
	
	
	
		
	
	/*$msg_body="<table style='background-color: grey; color: white; font-family:VERDANA '>
    <tr><th>SVASTERA HEALTHCARE</th></tr>
	<tr><td>NAME</td><td></td></tr>
	<tr><td>MOBILE</td><td></td></tr>
	<tr><td>PRODUCT</td><td></td></tr>
	<tr><td>EMAIL</td><td></td></tr>
	</table>";
	*/
	
mail($to, $subject, $message, $Header);
	mail($to, $subject, $message1, $Header);


    //header('Location:index.html');
	
	echo "<script type='text/javascript'> alert(' WE WILL GET BACK TO YOU SHORTLY');
window.location.href='index.html';
</script>";

}

?>