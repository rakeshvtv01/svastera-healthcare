<?php
/**
 * Created by PhpStorm.
 * User: Rakeshkp
 * Date: 28-01-2018
 * Time: 14:40
 */



require 'Medoo.php';


use Medoo\Medoo;


$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'doodle',
    'server' => 'localhost',
    'username' => 'root',
    'password' => ''
]);




$aproved1="no";
$aproved2="no";
$aproved3="no";
$aproved4="no";
$aproved5="no";


if(isset($_POST["review"])) {




    $empid=$_POST["empid"];
    $pmsid=$_POST["pmsid"];


    $remarks1=$_POST["remarks1"];
    $remarks2=$_POST["remarks2"];
    $remarks3=$_POST["remarks3"];
    $remarks4=$_POST["remarks4"];
    $remarks5=$_POST["remarks5"];


    $vpr1=$_POST["vpr1"];

    $vpr2=$_POST["vpr2"];

    $vpr3=$_POST["vpr3"];

    $vpr4=$_POST["vpr4"];

    $vpr5=$_POST["vpr5"];


    $vp1=$_POST["vp1"];
    $vp2=$_POST["vp2"];
    $vp3=$_POST["vp3"];
    $vp4=$_POST["vp4"];
    $vp5=$_POST["vp5"];




    $pprx_w1=$_POST["pprx_w1"];
    $pprx_w2=$_POST["pprx_w2"];
    $pprx_w3=$_POST["pprx_w3"];
    $pprx_w4=$_POST["pprx_w4"];
    $pprx_w5=$_POST["pprx_w5"];


    if (isset($_POST["aproved1"])) {
        $aproved1 = "yes";
    }

    if (isset($_POST["aproved2"])) {
        $aproved2 = "yes";
    }

    if (isset($_POST["aproved3"])) {
        $aproved3 = "yes";
    }
    if (isset($_POST["aproved4"])) {
        $aproved4 = "yes";
    }

    if (isset($_POST["aproved5"])) {
        $aproved5 = "yes";
    }


    echo "==$aproved1==$aproved2==$aproved3==$aproved4==$aproved5";





    $data = $database->update('pms', [
        'pprx1'=>$pprx_w1,
        'pprx2'=>$pprx_w2,
        'pprx3'=>$pprx_w3,
        'pprx4'=>$pprx_w4,
        'pprx5'=>$pprx_w5,

        'vpr1'=>$vp1,
        'vpr2'=>$vp2,
         'vpr3'=>$vp3,
         'vpr4'=>$vp4,
         'vpr5'=>$vpr5,

        'vprx1'=>$vpr1,
        'vprx2'=>$vpr2,
        'vprx3'=>$vpr3,
        'vprx4'=>$vpr4,
        'vprx5'=>$vpr5,

        'comments1'=>$remarks1,
        'comments2'=>$remarks2,
        'comments3'=>$remarks3,
        'comments4'=>$remarks4,
        'comments5'=>$remarks5,

        'aproved1'=>$aproved1,
        'aproved2'=>$aproved2,
        'aproved3'=>$aproved3,
        'aproved4'=>$aproved4,
        'aproved5'=>$aproved5,



    ], [
        'id' => $pmsid
    ]);






    }
    ?>