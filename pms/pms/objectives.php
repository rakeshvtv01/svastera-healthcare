<?php
session_start();
include 'scripts/database.php';
$date= date("Y-m-d");
$y=date("Y");
$m=date("m");
echo "==$m";

$sql=mysql_query("SELECT * FROM pms  where emp_id='$_SESSION[empid]' and month='$m'");
$count=mysql_num_rows($sql);

if($count==0){
    echo "<script type='text/javascript'> alert('PMS HAS NOT BEEN GENERATED STILL');
window.location.href='dashboard.php';
</script>";
    exit();



}



while($row =mysql_fetch_array($sql)){
    $pms_id = $row['id'];
    $_SESSION["pms_id"] = $row['id'];
    $obj1 = $row['obj1'];
    $obj2 = $row['obj2'];
    $obj3 = $row['obj3'];
    $act1 = $row['act1'];
    $act2 = $row['act2'];
    $act3 = $row['act3'];
    $act4 = $row['act4'];
    $act5 = $row['act5'];




    $actual1 = $row['actual1'];
    $actual2 = $row['actual2'];
    $actual3 = $row['actual3'];
    $actual4 = $row['actual4'];
    $actual5 = $row['actual5'];


    $w1 = $row['w1'];
    $w2 = $row['w2'];
    $w3 = $row['w3'];
    $w4 = $row['w4'];
    $w5 = $row['w5'];


    $t1 = $row['t1'];
    $t2 = $row['t2'];
    $t3 = $row['t3'];
    $t4 = $row['t4'];
    $t5 = $row['t5'];


    $et1 = $row['et1'];
    $et2 = $row['et2'];
    $et3 = $row['et3'];
    $et4 = $row['et4'];
    $et5 = $row['et5'];

    $ppr1 = $row['ppr1'];
    $ppr2 = $row['ppr2'];
    $ppr3 = $row['ppr3'];
    $ppr4 = $row['ppr4'];
    $ppr5 = $row['ppr5'];

    $pprx1 = $row['pprx1'];
    $pprx2 = $row['pprx2'];
    $pprx3 = $row['pprx3'];
    $pprx4 = $row['pprx4'];
    $pprx5 = $row['pprx5'];


    $vpr1 = $row['vpr1'];
    $vpr2 = $row['vpr2'];
    $vpr3 = $row['vpr3'];
    $vpr4 = $row['vpr4'];
    $vpr5 = $row['vpr5'];


    $vprx1 = $row['vprx1'];
    $vprx2 = $row['vprx2'];
    $vprx3 = $row['vprx3'];
    $vprx4 = $row['vprx4'];
    $vprx5 = $row['vprx5'];



    $comments1 = $row['comments1'];
    $comments2 = $row['comments2'];
    $comments3 = $row['comments3'];
    $comments4 = $row['comments4'];
    $comments5 = $row['comments5'];




    $aproved1 = $row['aproved1'];
    $aproved2 = $row['aproved2'];
    $aproved3 = $row['aproved3'];
    $aproved4 = $row['aproved4'];
    $aproved5 = $row['aproved5'];



    $earned = $row['earned'];
    $performance = $row['performance'];
    $concerns = $row['concerns'];
    $support_needed = $row['support_needed'];
    $feedback = $row['feedback'];
    $performance_pay = $row['performance_pay'];
    $variable_pay_asses = $row['variable_pay_asses'];
    $variable_pay_asses_C = $row['variable_pay_asses_C'];

    $variable_payout = $row['variable_payout'];
    $month = $row['month'];
    $year = $row['year'];





echo "==$aproved1";


}










?>

<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
    <title>PMS</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-height, initial-scale=1" />
    <link rel="stylesheet" href="../assets/css/main.css" />


    <style>

    </style>



</head>
<body class="subpage" onload="calVal()">

<!-- Header -->
<header id="header">
    <div class="logo"><a href="index.html">doodle <span>interiors</span></a></div>
    <a href="#menu">Menu</a>
</header>

<!-- Nav -->
<nav id="menu">
    <ul class="links">
        <li><a href="index.html">Home</a></li>
        <li><a href="generic.html">Generic</a></li>
        <li><a href="elements.html">Elements</a></li>
    </ul>
</nav>

<!-- One -->
<section id="One" class="wrapper style3" style="width:1500px">
    <div class="inner">
        <header class="align-center">
            <p>PERFORMANCE MANAGEMENT SYSTEM</p>

            <h2>  <?php echo "$_SESSION[company_name]";?></h2>
        </header>
    </div>
</section>

<!-- Two -->
<section id="two" class="wrapper style2">
    <div class="inner" style="background-color: white;width: 100%">
        <form method="post" action="scripts/validate_pms.php">

<div>

</div>
<br><br>
            <div style="display: inline-block; width: 465px; " id="obj1">

                <textarea  placeholder="OBJECTIVE 1" name="obj1" style="height: 150px; width: 460px"> <?php echo  "$obj1"; ?></textarea>
            </div>
            <div style="display: inline-block; width: 465px">

                <textarea  placeholder="OBJECTIVE 2"  name="obj2"  style="height: 150px;width: 460px"><?php echo  "$obj2"; ?></textarea>
            </div>
            <div style="display: inline-block; width: 465px">

                <textarea  placeholder="OBJECTIVE 3"  name="obj3"  style="height: 150px;width: 460px"><?php echo  "$obj3"; ?></textarea>
            </div>



        <hr>


        <!-- activites!-->


        <table cellpadding="">
            <tr style="background-color: white"><td>NO</td><td>ACTIVITY DETAILS</td><td>WIGHTAGE</td><td>TARGET</td><td>EXTENDED TARGET</td><td>ACTUAL</td><td>PP RATING</td><td>REMARKS</td><td>STATUS</td><td></td><td></td></tr>
            <tr><td> <select style=" display: inline-block"><option value="1">1</option><option value="2">2</option><option value="3">3</option></select>. <select  style=" display: inline-block"><option value="1">1</option><option value="2">2</option><option value="3">3</option></select></textarea></td><td width="150px"> <textarea style="  height:100px;width: 300px"   placeholder="ACTIVITY 1" name="activity1" value=""   ><?php echo  "$act1"; ?></textarea></td><td > <textarea style="height: 50px; width: 100px"  placeholder="" name="w1" id="w1"><?php echo  "$w1"; ?></textarea></td><td> <textarea  placeholder="" name="t1"  style="height: 50px; width: 100px"><?php echo  "$t1"; ?></textarea></td><td> <textarea  placeholder="" name="et1"  style="height: 50px; width: 100px"> <?php echo  "$et1"; ?></textarea></td><td> <textarea  placeholder="" name="actual1"  style="height: 50px; width: 100px"><?php echo  "$actual1"; ?></textarea></td><td> <textarea style="height: 50px; width: 100px"  placeholder="" name="pp1" id="pp1"><?php echo  "$ppr1"; ?></textarea></td><td><textarea style="height: 100px; width: 300px"  placeholder="REMARKS" name="remarks1"><?php echo  "$comments1"; ?></textarea></td><td><input style=" width: 100px" type="text" readonly id="app1" value="<?php echo "$aproved1"; ?>"></td></tr>
            <tr style="background-color: white"><td> <select style=" display: inline-block"><option value="1">1</option><option value="2">2</option><option value="3">3</option></select>. <select  style=" display: inline-block"><option value="1">1</option><option value="2">2</option><option value="3">3</option></select></textarea></td><td> <textarea style="  height:100px;width: 300px"  placeholder="ACTIVITY 1" name="activity2"><?php echo  "$act2"; ?></textarea></td><td> <textarea  placeholder="" name="w2" id="w2"  style="height: 50px; width: 100px"><?php echo  "$w2"; ?></textarea></td><td> <textarea  placeholder="" name="t2"  style="height: 50px; width: 100px"><?php echo  "$t1"; ?></textarea></td><td> <textarea  placeholder="" name="et2"  style="height: 50px; width: 100px"><?php echo  "$et2"; ?></textarea></td><td> <textarea  placeholder="" name="actual1"  style="height: 50px; width: 100px"><?php echo  "$actual2"; ?></textarea></td><td> <textarea style="height: 50px; width: 100px"  placeholder="" name="pp2" id="pp2" ><?php echo  "$ppr2"; ?></textarea></td><td><textarea style="height: 100px; width: 300px"  placeholder="REMARKS" name="remarks2"><?php echo  "$comments2"; ?></textarea></td><td><input style=" width: 100px" type="text" readonly id="app2" value="<?php echo "$aproved2"; ?>"></td></tr>
            <tr><td> <select style=" display: inline-block"><option value="1">1</option><option value="2">2</option><option value="3">3</option></select>. <select  style=" display: inline-block"><option value="1">1</option><option value="2">2</option><option value="3">3</option></select></textarea></td><td> <textarea style="  height:100px;width: 300px"  placeholder="ACTIVITY 1" name="activity3"><?php echo  "$act3"; ?></textarea></td><td> <textarea  placeholder="" name="w3" id="w3"  style="height: 50px; width: 100px"><?php echo  "$w3"; ?></textarea></td><td> <textarea  placeholder="" name="t3"  style="height: 50px; width: 100px"><?php echo  "$t1"; ?></textarea></td><td> <textarea  placeholder="" name="et3"  style="height: 50px; width: 100px"><?php echo  "$et3"; ?></textarea></td><td> <textarea  placeholder="" name="actual1"  style="height: 50px; width: 100px"><?php echo  "$actual3"; ?></textarea></td><td> <textarea style="height: 50px; width: 100px"  placeholder="" name="pp3" id="pp3"><?php echo  "$ppr3"; ?></textarea></td><td><textarea style="height: 100px; width: 300px"  placeholder="REMARKS" name="remarks3"><?php echo  "$comments3"; ?></textarea></td><td><input style=" width: 100px" type="text" readonly id="app3" value="<?php echo "$aproved3"; ?>"></td></tr>
            <tr style="background-color: white"><td> <select style=" display: inline-block"><option value="1">1</option><option value="2">2</option><option value="3">3</option></select>. <select  style=" display: inline-block"><option value="1">1</option><option value="2">2</option><option value="3">3</option></select></textarea></td><td> <textarea style="  height:100px;width: 300px"  placeholder="ACTIVITY 1" name="activity4"><?php echo  "$act4"; ?></textarea></td><td> <textarea  placeholder="" name="w4" id="w4"  style="height: 50px; width: 100px"><?php echo  "$w4"; ?></textarea></td><td> <textarea  placeholder="" name="t4"  style="height: 50px; width: 100px"><?php echo  "$t4"; ?></textarea></td><td> <textarea  placeholder="" name="et4"  style="height: 50px; width: 100px"><?php echo  "$et4"; ?></textarea></td><td> <textarea  placeholder="" name="actual1"  style="height: 50px; width: 100px"><?php echo  "$actual4"; ?></textarea></td><td> <textarea style="height: 50px; width: 100px" placeholder="" name="pp4" id="pp4" ><?php echo  "$ppr4"; ?></textarea></td><td><textarea style="height: 100px; width: 300px"  placeholder="REMARKS" name="remarks4"><?php echo  "$comments4"; ?></textarea></td><td><input style=" width: 100px" type="text" readonly id="app4" value="<?php echo "$aproved4"; ?>"></td></tr>
            <tr><td> <select style=" display: inline-block"><option value="1">1</option><option value="2">2</option><option value="3">3</option></select>. <select  style=" display: inline-block"><option value="1">1</option><option value="2">2</option><option value="3">3</option></select></textarea></td><td> <textarea style="  height:100px;width: 300px"  placeholder="ACTIVITY 1" name="activity5"><?php echo  "$act5"; ?></textarea></td><td> <textarea  placeholder="" name="w5" id="w5"  style="height: 50px; width: 100px"><?php echo  "$w5"; ?></textarea></td><td> <textarea  placeholder="" name="t5"  style="height: 50px; width: 100px"><?php echo  "$t5"; ?></textarea></td><td> <textarea  placeholder="" name="et5"  style="height: 50px; width: 100px"><?php echo  "$et5"; ?></textarea></td><td> <textarea  placeholder="" name="actual1"  style="height: 50px; width: 100px"><?php echo  "$actual5"; ?></textarea></td><td> <textarea style="height: 50px; width: 100px" placeholder="" name="pp5" id="pp5" ><?php echo  "$ppr5"; ?></textarea></td><td><textarea style="height: 100px; width: 300px"  placeholder="REMARKS" name="remarks5"><?php echo  "$comments5"; ?></textarea></td><td><input style=" width: 100px" type="text" readonly id="app2" value="<?php echo "$aproved5"; ?>"></td></tr>





        </table>
            <center>      <p>

           <input align="center" type="submit" value="SAVE" name="save" onclick="myFunction()">
       </p>
            </center>

        </form>


        <div class="box" >

            <div class="content">
                <header class="align-center">

                </header>
                 </div>
        </div>
    </div>
</section>



<script>
    function myFunction() {

        var n1=parseInt(document.getElementById("w1").value);
        var n2=parseInt(document.getElementById("w2").value);
        var n3=parseInt(document.getElementById("w3").value);
        var n4=parseInt(document.getElementById("w4").value);
        var n5=parseInt(document.getElementById("w5").value);



        var m1=parseInt(document.getElementById("pp1").value);
        var m2=parseInt(document.getElementById("pp2").value);
        var m3=parseInt(document.getElementById("pp3").value);
        var m4=parseInt(document.getElementById("pp4").value);
        var m5=parseInt(document.getElementById("pp5").value);


        if(n1 >3 || n2 >3 || n3>3 || n4>3 || n5>3) {

            alert("Weightage cannot be more than 3");
            event.preventDefault();

        }

        var res= n1+n2+n3+n4+n5;


        if(res>10)
        {
            alert("Total Weightage cannot be more 10");
            event.preventDefault();
        }


        if(m1 >5 || m2 >5 || m3>5 || m4>5 || m5>5) {

            alert("PP rating cannot be more than 5");
            event.preventDefault();

        }

    }
</script>
<!-- Footer -->
<footer id="footer" style="width:1500px">
    <div class="container">
        <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
        </ul>
    </div>
    <div class="copyright">
        &copy; Untitled. All rights reserved.
    </div>
</footer>




<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>