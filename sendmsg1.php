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

//$email="rakeshvtv01@gmail.com";





$to      = $email;
$to_admin="rakesh@svastera.com";
$subject = "SVASTERA HEALTHCARE";
$message   = "THANKS  FOR YOUR INTREST WITH US \n WE WILL GET BACK TO YOU SHORTLY";
$message1   = "CUSTOMER NAME : $fname \n CUSTOMER MOBILE : $mob \n CUSTOMER EMAIL : $email \n message : $msg  \n WE WILL GET BACK TO YOU SHORTLY";
	
	
  $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: SVASTERA <sales@svastera.com >' . "\r\n";
ini_set('SMTP', "relay-hosting.secureserver.net");
ini_set('smtp_port', "25");






    $str="<html>
<head>
</head>
<body>
<table style=\"font-family: 'Trebuchet MS', 'Helvetica Neue', Arial, sans-serif; color: #e6e6e6; width: 100%; font-size: 15px; line-height: 1.4; border-collapse: collapse; border-spacing: 0; background: #e6e6e6; margin: 0; border: 0;\" cellspacing=\"0\" cellpadding=\"0\">
    <tbody>
    <tr>
        <td style=\"text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" align=\"center\" valign=\"top\"><center>
                <table style=\"width: 600px; border-collapse: collapse; border-spacing: 0; margin: auto; border: 0;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\">
                    <tbody>
                    <tr>
                        <td style=\"text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" align=\"left\" valign=\"top\"></td>
                        <td style=\"text-align: right; font-weight: normal; vertical-align: middle; font-size: 12px; color: #323e47; margin: 0; padding: 0;\" align=\"right\" valign=\"middle\">Thanks for Contacting Us<br>We will get back to you Shortly</a></td>
                    </tr>
                    <tr>
                        <td style=\"text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0; height: 20px;\" colspan=\"2\" align=\"center\" valign=\"top\">&nbsp;</td>
                    </tr>
                    </tbody>
                </table>
            </center></td>
    </tr>
    <tr>
        <td style=\"text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" align=\"center\" valign=\"top\" height=\"20\">&nbsp;</td>
    </tr>
    <tr>
        <td style=\"text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" align=\"center\" valign=\"top\"><center>
                <table style=\"width: 600px; border-collapse: collapse; background: #e6e6e6; border-spacing: 0; margin: auto; border: 0;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\">
                    <tbody>
                    <tr>
                        <td style=\"text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" align=\"left\" valign=\"top\"><img style=\"display: block;\" src=\"http://login.sendpulse.com/files/emailservice/userfiles/e87c2cc59bdd62b30b9245c0a00c5c32366067/insurance-life.jpg\" alt=\"\" width=\"250\" align=\"left\" border=\"0\" hspace=\"40\">
                            <div style=\"height: 40px;\">&nbsp;</div>
                            <h3 style=\"color: #1b505c; line-height: 1.19; font-family: 'Trebuchet MS', 'Helvetica Neue', Arial, sans-serif; vertical-align: top; font-size: 18px; margin: 0 0 12px; padding: 0; font-weight: bold;\">Kishore</h3>
                            <p>Business Developmnet</p>
                            <p style=\"font-family: 'Trebuchet MS', 'Helvetica Neue', Arial, sans-serif; vertical-align: top; font-size: 13px; line-height: 1.4; color: #3a4041; margin: 0 0 7px; padding: 0;\">Svastera Healthcare Solutions  kishore@svastera.com </p>
                            <p>Thanks for Contacting us meanwhile please take look into our products</p>
                            <p style=\"font-family: 'Trebuchet MS', 'Helvetica Neue', Arial, sans-serif; vertical-align: top; font-size: 15px; line-height: 1.4; color: #3a4041; margin: 0 0 7px; padding: 0;\"><a style=\"color: #2b77b5;\" href=\"#\">Details &raquo;</a></p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </center></td>
    </tr>
    <tr>
        <td style=\"text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" align=\"center\" valign=\"top\" height=\"20\">&nbsp;</td>
    </tr>
    <tr>
        <td style=\"text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" align=\"center\" valign=\"top\"><center>
                <table style=\"width: 600px; border-collapse: collapse; background: #e6e6e6; border-spacing: 0; margin: auto; border: 0;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\">
                    <tbody>
                    <tr>
                        <td style=\"text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" align=\"left\" valign=\"top\"><img style=\"display: block;\" src=\"http://login.sendpulse.com/files/emailservice/userfiles/e87c2cc59bdd62b30b9245c0a00c5c32366067/insurance-health.jpg\" alt=\"\" width=\"210\" align=\"right\" border=\"0\" hspace=\"40\">
                            <div style=\"height: 40px;\">&nbsp;</div>
                            <h3 style=\"color: #1b505c; line-height: 1.19; font-family: 'Trebuchet MS', 'Helvetica Neue', Arial, sans-serif; vertical-align: top; font-size: 18px; margin: 0 0 12px; padding: 0; font-weight: bold;\">Products</h3>
                            <h3 style=\"color: #1b505c; line-height: 1.19; font-family: 'Trebuchet MS', 'Helvetica Neue', Arial, sans-serif; vertical-align: top; font-size: 18px; margin: 0 0 12px; padding: 0; font-weight: bold;\">imanage</h3>
                            <p style=\"font-family: 'Trebuchet MS', 'Helvetica Neue', Arial, sans-serif; vertical-align: top; font-size: 13px; line-height: 1.4; color: #3a4041; margin: 0 0 7px; padding: 0;\"> A Technology platform aiming to impart efficiency related to cash flow management, communications management, claims management and data management Register to get a 30 day trail Version iManage </p>
                            <p style=\"font-family: 'Trebuchet MS', 'Helvetica Neue', Arial, sans-serif; vertical-align: top; font-size: 15px; line-height: 1.4; color: #3a4041; margin: 0 0 7px; padding: 0;\"><a style=\"color: #2b77b5;\" href=\"http://svastera.com/imanage/\">Details &raquo;</a></p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </center></td>
    </tr>
    <tr>
        <td style=\"text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" align=\"center\" valign=\"top\" height=\"20\">&nbsp;</td>
    </tr>
    <tr>
        <td style=\"text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" align=\"center\" valign=\"top\"><center>
                <table style=\"width: 600px; border-collapse: collapse; background: #e6e6e6; border-spacing: 0; margin: auto; border: 0;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\">
                    <tbody>
                    <tr>
                        <td style=\"text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" align=\"left\" valign=\"top\"><img style=\"display: block;\" src=\"http://login.sendpulse.com/files/emailservice/userfiles/e87c2cc59bdd62b30b9245c0a00c5c32366067/insurance-home.jpg\" alt=\"\" width=\"260\" align=\"left\" border=\"0\" hspace=\"40\">
                            <div style=\"height: 40px;\">&nbsp;</div>
                            <h3 style=\"color: #1b505c; line-height: 1.19; font-family: 'Trebuchet MS', 'Helvetica Neue', Arial, sans-serif; vertical-align: top; font-size: 18px; margin: 0 0 12px; padding: 0; font-weight: bold;\">HEALTH MANAGEMENT SYSTEM</h3>
                            <p style=\"font-family: 'Trebuchet MS', 'Helvetica Neue', Arial, sans-serif; vertical-align: top; font-size: 13px; line-height: 1.4; color: #3a4041; margin: 0 0 7px; padding: 0;\">It is a package for hospitals & healthcare centers delivering healthcare services to both inpatients & out patients. This solution is mainly used to plan, support & manage the flow of patients.</p>

                        </td>
                    </tr>
                    </tbody>
                </table>
            </center></td>
    </tr>

    <tr>
        <td style=\"text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" align=\"center\" valign=\"top\" height=\"20\">&nbsp;</td>
    </tr>
    <tr>
        <td style=\"text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" align=\"center\" valign=\"top\"><center>
                <table style=\"width: 100%; border-collapse: collapse; border-spacing: 0; background: #e6e6e6; border: 0;\" cellspacing=\"0\" cellpadding=\"0\">
                    <tbody>
                    <tr>
                        <td style=\"text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" align=\"left\" valign=\"top\">
                            <table style=\"width: 600px; border-collapse: collapse; border-spacing: 0; background: #0a2a31; margin: auto; border: 0;\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\">
                                <tbody>
                                <tr>
                                    <td style=\"height: 15px; font-size: 1px; line-height: 1px; text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" colspan=\"3\" align=\"left\" valign=\"top\" height=\"15\">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style=\"width: 40px; text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" align=\"left\" valign=\"top\" width=\"40\">&nbsp;</td>
                                    <td style=\"text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" align=\"left\" valign=\"top\">
                                        <table style=\"width: 100%; border-collapse: collapse; border-spacing: 0; border: 0;\" cellspacing=\"0\" cellpadding=\"0\">
                                            <tbody>
                                            <tr>
                                                <td style=\"height: 30px; font-size: 1px; line-height: 1px; text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" colspan=\"3\" align=\"left\" valign=\"top\" height=\"30\">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td style=\"text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" align=\"left\" valign=\"top\" width=\"58%\">
                                                    <p style=\"font-family: 'Trebuchet MS', 'Helvetica Neue', Arial, sans-serif; vertical-align: top; font-size: 15px; line-height: 1.4; color: #efefef; margin: 0 0 7px; padding: 0;\">Best wishes,&nbsp; Svastera Healthcare Team</p>
                                                    <p style=\"font-family: 'Trebuchet MS', 'Helvetica Neue', Arial, sans-serif; vertical-align: top; font-size: 12px; line-height: 1.4; color: #efefef; margin: 0 0 7px; padding: 0;\">&copy; Copyright, 2018<br> Our address: Svastera Healthcare Solutions Pvt Ltd, No 945, 1st Floor, 5th Main, 21st Cross, Sector 7, HSR Layout, Bangalore 560102 Karnataka India</p>
                                                </td>
                                                <td style=\"text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" align=\"left\" valign=\"top\" width=\"4%\">&nbsp;</td>
                                                <td style=\"text-align: right; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" align=\"right\" valign=\"top\" width=\"38%\">
                                                    <p style=\"font-family: 'Trebuchet MS', 'Helvetica Neue', Arial, sans-serif; vertical-align: top; font-size: 13px; line-height: 1.4; color: #efefef; margin: 0 0 7px; padding: 0;\"><strong>support@svastera.com</strong></p>
                                                    <p style=\"font-family: 'Trebuchet MS', 'Helvetica Neue', Arial, sans-serif; vertical-align: top; font-size: 9px; line-height: 1.4; color: #efefef; margin: 0 0 7px; padding: 0;\"><a style=\"color: #ffa821; text-decoration: none;\" href=\"#\">&nbsp; </a><a style=\"color: #ffa821; text-decoration: none;\" href=\"#\"><img src=\"http://login.sendpulse.com/files/emailservice/userfiles/e87c2cc59bdd62b30b9245c0a00c5c32366067/f-fb-r.png\" alt=\"fb\" width=\"27\" height=\"27\" border=\"0\"></a> &nbsp; <a style=\"color: #ffa821; text-decoration: none;\" href=\"#\"> <img src=\"http://login.sendpulse.com/files/emailservice/userfiles/e87c2cc59bdd62b30b9245c0a00c5c32366067/f-tw-r.png\" alt=\"tw\" width=\"27\" height=\"27\" border=\"0\"></a> &nbsp; <a style=\"color: #ffa821; text-decoration: none;\" href=\"#\"> <img src=\"http://login.sendpulse.com/files/emailservice/userfiles/e87c2cc59bdd62b30b9245c0a00c5c32366067/f-yt-r.png\" alt=\"yt\" width=\"27\" height=\"27\" border=\"0\"></a></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style=\"height: 15px; font-size: 1px; line-height: 1px; text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" colspan=\"3\" align=\"left\" valign=\"top\" height=\"15\">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td style=\"text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" colspan=\"3\" align=\"left\" valign=\"top\">
                                                    <p style=\"font-family: 'Trebuchet MS', 'Helvetica Neue', Arial, sans-serif; vertical-align: top; font-size: 12px; line-height: 1.4; color: #efefef; margin: 0 0 7px; padding: 0;\">You received this email as you registered on svastera.com</p>

                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                    <td style=\"width: 40px; text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" align=\"left\" valign=\"top\" width=\"40\">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style=\"height: 15px; font-size: 1px; line-height: 1px; text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" colspan=\"3\" align=\"left\" valign=\"top\" height=\"15\">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style=\"text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" colspan=\"3\" align=\"left\" valign=\"top\">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style=\"height: 15px; font-size: 1px; line-height: 1px; text-align: left; font-weight: normal; vertical-align: top; margin: 0; padding: 0;\" colspan=\"3\" align=\"left\" valign=\"top\" height=\"15\">&nbsp;</td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </center></td>
    </tr>
    </tbody>
</table> </body>
</html>";


    mail($to, $subject, $str, $Header);
	mail($to, $subject, $str, $Header);


    //header('Location:index.html');
	
	echo "<script type='text/javascript'> alert(' WE WILL GET BACK TO YOU SHORTLY');
window.location.href='index.html';
</script>";

}

?>