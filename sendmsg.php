<?php


$fname="rakesh";
//$lname="kp";
$email="rakeshvtv01@gmail.com";
$mobile="9964202911";
//$product=$_POST["product"];
$msg="hiii";


$url = 'https://api.elasticemail.com/v2/email/send';

//$email="rakeshvtv01@gmail.com";






$to_admin="rakesh@svastera.com";
$subject = "SVASTERA HEALTHCARE";
$message   = "THANKS  FOR YOUR INTEREST WITH US \n WE WILL GET BACK TO YOU SHORTLY";
$message1   = "CUSTOMER NAME : $fname \n CUSTOMER MOBILE : $mobile \n CUSTOMER EMAIL : $email \n  MESSAGE : $msg	 WE WILL GET BACK TO YOU SHORTLY";
	
  $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: SVASTERA <sales@svastera.com >' . "\r\n";
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
	
mail($email, $subject, $message, $headers);
	mail($to_admin, $subject, $message1, $headers);
//mail($to_admin, $subject, $htmlbody1, $Header);
	
	
/*
try{
        $post = array('from' => 'rakesh@svastera.com',
		'fromName' => 'svastera',
		'apikey' => '236480c9-cc0d-4981-844f-9e70cc85b562',
		'subject' => 'Product demo request',
		'to' => 'rakeshvtv01@gmail.com',
		'bodyHtml' => "<h1> $fname WANTS TO HAVE DEMO FOR $product <br> FIND THE CUSTOMER DETAILS BELOW</h1><BR><P>FIRST NAME   : $fname</P><P>SECOND NAME   : $fname</P><P>EMAIL   : $fname</P><P>FIRST NAME   : $fname</P><P>MSG   : $msg</P>",
		'bodyText' => '',
		'isTransactional' => false);
		
		$ch = curl_init();
		curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
			CURLOPT_POST => true,
			CURLOPT_POSTFIELDS => $post,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
			CURLOPT_SSL_VERIFYPEER => false
        ));
		
        $result=curl_exec ($ch);
        curl_close ($ch);
		
        echo $result;	
}
catch(Exception $ex){
	echo $ex->getMessage();
}
	
	
	
	try{
        $post = array('from' => 'info@svastera.com',
		'fromName' => 'SVASTERA HEALTHCARE',
		'apikey' => '236480c9-cc0d-4981-844f-9e70cc85b562',
		'subject' => 'PRODUCT DEMO REQUEST',
		'to' => '$email',
		'bodyHtml' => "<h1> THANK YOU $fname FOR REQUESTING FOR DEMO</h1><br> WE WILL GET BACK TO YOU SHORTLY <BR> THANK YOU",
		'bodyText' => '',
		'isTransactional' => false);
		
		$ch = curl_init();
		curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
			CURLOPT_POST => true,
			CURLOPT_POSTFIELDS => $post,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
			CURLOPT_SSL_VERIFYPEER => false
        ));
		
        $result=curl_exec ($ch);
        curl_close ($ch);
		
        echo $result;	
}
catch(Exception $ex){
	echo $ex->getMessage();
}
	
	*/


    //header('Location:index.html');
	
	
	/*echo "<script type='text/javascript'> alert(' WE WILL GET BACK TO YOU SHORTLY');
//window.location.href='index.html';
</script>";
	*/


?>