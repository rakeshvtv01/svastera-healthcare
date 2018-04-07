<?php
/**
 * Created by PhpStorm.
 * User: Rakeshkp
 * Date: 28-01-2018
 * Time: 12:55
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

/*
$data = $database->update('employee', [
    'emp_name'=>'rakesh r',

], [
    'emp_id' => 2000
]);

echo json_encode($data);
*/
?>