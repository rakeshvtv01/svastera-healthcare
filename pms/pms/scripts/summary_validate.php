<?php
/**
 * Created by PhpStorm.
 * User: Rakeshkp
 * Date: 29-01-2018
 * Time: 14:59
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



if(isset($_POST["save"])) {

 $empid=$_POST["empid"];
     $pmsid=$_POST["pmsid"];
    $perf_pay_ass=$_POST["perf_pay_ass"];
    $perf_pay_ass_c=$_POST["perf_pay_ass_c"];
    $var_pay_ass=$_POST["var_pay_ass"];
    $var_pay_ass_c=$_POST["var_pay_ass_c"];



    $earned_recurring=$_POST["earned"];
    $summary=$_POST["summary"];
    $concerns=$_POST["concerns"];
    $supportneeded=$_POST["supportneeded"];
    $feedback=$_POST["feedback"];




    $data = $database->update('pms', [
        'earned'=>$earned_recurring,
        'performance'=>$summary,
        'concerns'=>$concerns,
        'support_needed'=>$supportneeded,
        'feedback'=>$feedback,


        'performance_pay'=>$perf_pay_ass,
        'performance_pay_c'=>$perf_pay_ass_c,
        'variable_pay_asses'=>$var_pay_ass,
        'variable_pay_asses_C'=>$var_pay_ass_c





    ], [
        'id' => $pmsid
    ]);



}






    ?>