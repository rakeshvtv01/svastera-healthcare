




<?php
session_start();
include 'database.php';


$date= date("Y-m-d");
$y=date("Y");
$m=date("m");

if(isset($_POST["save"]))
{




    $obj1 = $_POST["obj1"];
    $obj2 = $_POST["obj2"];
    $obj3 = $_POST["obj3"];
    $act1 = $_POST["activity1"];
    $act2 = $_POST["activity2"];
    $act3 = $_POST["activity3"];
    $act4 = $_POST["activity4"];
    $act5 = $_POST["activity5"];

    $remarks1 = $_POST["remarks1"];
    $remarks2 = $_POST["remarks2"];
    $remarks3 = $_POST["remarks3"];
    $remarks4 = $_POST["remarks4"];
    $remarks5 = $_POST["remarks5"];



    $w1 = $_POST["w1"];
    $w2 = $_POST["w2"];
    $w3 = $_POST["w3"];
    $w4 = $_POST["w4"];
    $w5 = $_POST["w5"];


    $t1 = $_POST["t1"];
    $t2 = $_POST["t2"];
    $t3 = $_POST["t3"];
    $t4 = $_POST["t4"];
    $t5 = $_POST["t5"];


    $et1 = $_POST["et1"];
    $et2 = $_POST["et2"];
    $et3 = $_POST["et3"];
    $et4 = $_POST["et4"];
    $et5 = $_POST["et5"];




    $pp1 = $_POST["pp1"];
    $pp2 = $_POST["pp2"];
    $pp3 = $_POST["pp3"];
    $pp4 = $_POST["pp4"];
    $pp5 = $_POST["pp5"];


    echo "$obj3   $obj2 $obj1 $t1 $t4";




    $sql21="UPDATE pms set `obj1`= '$obj1' , `obj2`='$obj2' , `obj3`= '$obj3' , `act1`='$act1', `act2`='$act2', `act3`='$act3', `act4`='$act4', `act5`='$act5', `w1`='$w1', `w2`='$w2', `w3`='$w3', `w4`='$w4', `w5`='$w5', `t1`='$t1', `t2`='$t2', `t3`='$t3', `t4`='$t4', `t5`='$t5', `et1`='$et1', `et2`='$et2', `et3`='$et3', `et4`='$et4', `et5`='$et5', `comments1`='$remarks1', `comments2`='$remarks2', `comments3`='$remarks3', `comments4`='$remarks4', `comments5`='$remarks5',`ppr1`='$pp1',`ppr2`='$pp2',`ppr3`='$pp3',`ppr4`='$pp4',`ppr5`='$pp5' WHERE emp_id='$_SESSION[empid]' AND month='$m' AND year='$y' ";

    $result21=mysql_query($sql21);




    }



?>



