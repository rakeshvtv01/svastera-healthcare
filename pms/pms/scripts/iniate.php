<?php
/**
 * Created by PhpStorm.
 * User: Rakeshkp
 * Date: 27-01-2018
 * Time: 13:37
 */

session_start();
include "database.php";

include "test_medoo.php";


$date= date("Y-m-d");
$y=date("Y");
$m=date("m");






$sql21=mysql_query("SELECT * FROM `pms_init` WHERE  stats='yes' AND month='$m' AND year='$y' AND emp_id=' $_SESSION[empid]'");
$row21 =mysql_fetch_array($sql21);
$count=mysql_num_rows($sql21);


if($count!=0){
    echo "<script type='text/javascript'> alert('PMS HAS ALREADY BEEN INITIATED');
window.location.href='../dashboard.php';
</script>";
    exit();



}







$sql20=mysql_query("SELECT * FROM `employee` WHERE  stats='yes' AND manager_id='$_SESSION[empid]'");
while($row20 =mysql_fetch_array($sql20))

{

    $empid=$row20['emp_id'];



    $sql21="INSERT INTO `pms`(`id`, `emp_id`, `dates`, `obj1`, `obj2`, `obj3`, `act1`, `act2`, `act3`, `act4`, `act5`, `w1`, `w2`, `w3`, `w4`, `w5`, `t1`, `t2`, `t3`, `t4`, `t5`, `et1`, `et2`, `et3`, `et4`, `et5`, `ppr1`, `ppr2`, `ppr3`, `ppr4`, `ppr5`, `pprx1`, `pprx2`, `pprx3`, `pprx4`, `pprx5`, `vpr1`, `vpr2`, `vpr3`, `vpr4`, `vpr5`, `vprx1`, `vprx2`, `vprx3`, `vprx4`, `vprx5`, `comments1`, `comments2`, `comments3`, `comments4`, `comments5`, `earned`, `performance`, `concerns`, `support_needed`, `feedback`, `performance_pay`, `performance_pay_c`, `performance_payout`, `variable_pay_asses`, `variable_pay_asses_C`, `variable_payout`,`month`, `year`,`manager_id`,`actual1`,`actual2`,`actual3`,`actual4`,`actual5`,`aproved1`,`aproved2`,`aproved3`,`aproved4`,`aproved5`) VALUES ('','$empid','$date','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','$m','$y','$_SESSION[empid]','','','','','','','','','','')";

    $result21=mysql_query($sql21);







}


$data = $database->insert('pms_init', [
    'id'=>'',
    'dates'=>$date,
    'month'=>$m,
    'year'=>$y,
    'stats'=>'yes',
    'emp_id'=> $_SESSION['empid'],

], [

]);


?>