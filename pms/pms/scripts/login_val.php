<?php session_start();
include 'database.php';




?>

<?php

if(isset($_POST["login"]))
{
$email=$_POST["uname"];

$pass=$_POST["pass"];
$email1=strlen($email);
$pass1=strlen($pass);


$sql=mysql_query("SELECT * FROM employee  where emp_id='$email' and pass='$pass'");
$row =mysql_fetch_array($sql);

$empid=$row['emp_id'];


echo "$empid";




if($email1 >0 && $pass1 >0){
if ($row["emp_id"]==$empid && $row["pass"]==$pass)
{
	
	echo"insiode if";
$sql=mysql_query("SELECT * FROM employee  where emp_id='$email' and pass='$pass'");
$row =mysql_fetch_array($sql);

//$_SESSION["filename"]=$row['filename'];

    $_SESSION["empid"]=$row['emp_id'];

    $_SESSION["emp_name"]=$row['emp_name'];

    $_SESSION["company_name"]=$row['company_name'];
    $_SESSION["emp_type"]=$row['emp_type'];



  //  echo " $_SESSION[empid]";
header('Location:../dashboard.php');

 
}
else
{



/*

echo "<script type='text/javascript'> alert('WRONG PASSWORD');
window.location.href='../login.php';
</script>";
*/

}
}
else
{
	/*
echo "<script type='text/javascript'> alert('PASSWORD OR USERNAME CANNOT BE EMPTY');
window.location.href='../html/login.php';
</script>";
*/
}

}


?>