<?php
/**
 * Created by PhpStorm.
 * User: Rakeshkp
 * Date: 27-01-2018
 * Time: 13:37
 */

session_start();
include "scripts/database.php";


$date= date("Y-m-d");
$y=date("Y");
$m=date("m");



if(isset($_POST["review"])) {

    $empid=$_POST["emp_name"];
    $y=$_POST["month"];
    $m=$_POST["year"];

    $sql = mysql_query("SELECT * FROM pms  where emp_id='$empid' and month='$m' AND  year='$y'");
    $row = mysql_fetch_array($sql);
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

        $actual1 = $row['actual1'];
        $actual2 = $row['actual2'];
        $actual3 = $row['actual3'];
        $actual4 = $row['actual4'];
        $actual5 = $row['actual5'];


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

    echo "$pprx1==";
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
    <title>Hielo by TEMPLATED</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../assets/css/main.css" />


    <style>
        input[type="text"]{
            width: 100px;
        }

        textarea{
            width: 200px;
        }
    </style>
</head>
<body class="subpage">

<!-- Header -->
<header id="header">
    <div class="logo"><a href="index.html">Hielo <span>by TEMPLATED</span></a></div>
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
<section id="One" class="wrapper style3">
    <div class="inner">
        <header class="align-center">
            <p>PERFORMANCE MANAGEMENT SYSTEM</p>

            <h2>  <?php echo "$_SESSION[company_name]";?></h2>
        </header>
    </div>
</section>
<form action="scripts/review_validate.php" method="post">
<!-- Two -->
<section id="two" class="wrapper style2" >
    <div class="inner" style="width: 100%">
        <div class="box">
            <div class="content" >
                <header class="align-center">
                    <p></p>
                    <h2></h2>
                </header>

                  <table>
                      <tr><td><label>ACTIVITES</label></td><td><label>Weightage</label></td><td><label>TARGET</label></td><td><label>EXTENDED TARGET</label></td><td><label>ACTUAL</label></td><td><label>PP RATING</label></td><td><label>PPRX WEIGHTAGR</label></td><td><label>VP RATING</label></td><td><label>VPRX RATING</label></td><td><label>APPROVED/</label></td><td><label>REMARKS</label></td></tr>

                      <tr><td><label><?php echo "$act1" ;?></label></td><td><label id="w1"><?php echo "$w1" ;?></label></td><td><label ><?php echo "$t1" ;?></label></td><td><label><?php echo "$et1" ;?></label></td><td><label><?php echo "$actual1" ;?></label></td><td><label id="ppr1"><?php echo "$ppr1" ;?></label></td><td><input value="<?php echo "$pprx1"; ?>" type="text" name="pprx_w1" id="pprx_w1"></td><td><input type="text" name="vp1" id="vp1" value="<?php echo "$vpr1"; ?>"></td><td><input type="text" name="vpr1" id="vpr1" value="<?php echo "$vprx1"; ?>"></td><td> <input type="checkbox" id="aproved1" name="aproved1">
                              <label for="aproved1">Aproved</label>	<td><textarea name="remarks1"><?php echo "$comments1"; ?></textarea></td></tr>

                      <tr><td><label><?php echo "$act2" ;?></label></td><td><label id="w2"><?php echo  "$w2";?></label></td><td><label ><?php echo "$t2" ;?></label></td><td><label><?php echo "$et2" ;?></label></td><td><label><?php echo "$actual2" ;?></label></td><td><label id="ppr2"><?php echo "$ppr2" ;?></label></td><td><input value="<?php echo "$pprx2"; ?>" type="text" name="pprx_w2" id="pprx_w2"></td><td><input type="text" name="vp2" id="vp2" value="<?php echo "$vpr2"; ?>"></td><td><input type="text" name="vpr2" id="vpr2" value="<?php echo "$vprx1"; ?>"></td><td>	<input type="checkbox" id="aproved2" name="aproved2">
                              <label for="aproved2">Aproved</label>		</td><td><textarea name="remarks2"><?php echo "$comments2"; ?></textarea></td></tr>

                      <tr><td><label><?php echo "$act3" ;?></label></td><td><label id="w3"><?php echo "$w3" ;?></label></td><td><label><?php echo "$t3" ;?></label></td><td><label><?php echo  "$et3" ;?></label></td><td><label><?php echo "$actual3" ;?></label></td><td><label id="ppr3"><?php echo "$ppr3" ;?></label></td><td><input value="<?php echo "$pprx3"; ?>" type="text" name="pprx_w3" id="pprx_w3"></td><td><input type="text" name="vp3" id="vp3" value="<?php echo "$vpr3"; ?>"></td><td><input type="text" name="vpr3" id="vpr3" value="<?php echo "$vprx2"; ?>"></td><td>		<input type="checkbox" id="aproved3" name="aproved3">
                              <label for="aproved3">Aproved</label>	</td><td><textarea name="remarks3"><?php echo "$comments3"; ?></textarea></td></tr>

                      <tr><td><label><?php echo "$act4" ;?></label></td><td><label id="w4"><?php echo "$w4" ;?></label></td><td><label><?php echo "$t4" ;?></label></td><td><label><?php echo "$et4" ;?></label></td><td><label><?php echo "$actual4" ;?></label></td><td><label id="ppr4"><?php echo "$ppr4" ;?></label></td><td><input value="<?php echo "$pprx4"; ?>" type="text" name="pprx_w4" id="pprx_w4"></td><td><input type="text" name="vp4" id="vp4" value="<?php echo "$vpr4"; ?>"></td><td><input type="text" name="vpr4" id="vpr4" value="<?php echo "$vprx3"; ?>"></td><td> <input type="checkbox" id="aproved4" name="aproved4">
                              <label for="aproved4">Aproved</label>	</td><td><textarea name="remarks4"><?php echo "$comments4"; ?></textarea></td></tr>

                      <tr><td><label><?php echo "$act5" ;?></label></td><td><label id="w5"><?php echo "$w5" ;?></label></td><td><label><?php echo "$t5" ;?></label></td><td><label><?php echo "$et5" ;?></label></td><td><label><?php echo "$actual5" ;?></label></td><td><label id="ppr5"><?php echo "$ppr5" ;?></label></td><td><input value="<?php echo "$pprx5"; ?>" type="text" name="pprx_w5" id="pprx_w5"></td><td><input type="text" name="vp5" id="vp5" value="<?php echo "$vpr5"; ?>"></td><td><input type="text" name="vpr5" id="vpr5" value="<?php echo "$vprx5"; ?>"></td><td><input type="checkbox" id="aproved5" name="aproved5">
                              <label for="aproved5">Aproved</label>	</td><td><textarea name="remarks5"><?php echo "$comments5"; ?></textarea></td></tr>



                  </table>
                <center>
                    <p>

                        <input type="submit" value="FINISH" name="review" onclick="myFunction()">

                    </p>

                </center>

                <input type="text" name="empid" value="<?php echo "$empid";?>">
                <input type="text" name="pmsid" value="<?php echo "$pms_id";?>">

</form>

<form action="summary.php" method="post">
    <input type="submit" value="Summary" name="summary"><BR><br>

    <input type="text" name="empid" value="<?php echo "$empid";?>">
    <input type="text" name="pmsid" value="<?php echo "$pms_id";?>">

</form>



            </div>
        </div>
    </div>
</section>



<p id="demo">Click the button to change the text in this paragraph.</p>

<button onclick="myFunction()">Try it</button>

<script>
    function myFunction() {
       var n1= document.getElementById("w1").innerHTML;
        var n2= document.getElementById("w2").innerHTML;
        var n3= document.getElementById("w3").innerHTML;
        var n4= document.getElementById("w4").innerHTML;
        var n5= document.getElementById("w5").innerHTML;


        var m1= document.getElementById("ppr1").innerHTML;
        var m2= document.getElementById("ppr2").innerHTML;
        var m3= document.getElementById("ppr3").innerHTML;
        var m4= document.getElementById("ppr4").innerHTML;
        var m5= document.getElementById("ppr5").innerHTML;

        alert(""+m1+m2+m3+m4+m5)


        document.getElementById("pprx_w1").value=n1*m1;
        document.getElementById("pprx_w2").value=n2*m2;
        document.getElementById("pprx_w3").value=n3*m3;
        document.getElementById("pprx_w4").value=n4*m4;
        document.getElementById("pprx_w5").value=n5*m5;


        var vp1= parseInt(document.getElementById("vp1").value);
        var vp2= parseInt(document.getElementById("vp2").value);
        var vp3= parseInt(document.getElementById("vp3").value);
        var vp4= parseInt(document.getElementById("vp4").value);
        var vp5= parseInt(document.getElementById("vp5").value);



        if(vp1 > 5 ||vp2 > 5 ||vp3 > 5 ||vp4 > 5 ||vp5 > 5 ){




            alert("VP Rating cannot be more than 5");
            event.preventDefault();
        }



        document.getElementById("vpr1").value=vp1* n1;
        document.getElementById("vpr2").value=vp2* n2;
        document.getElementById("vpr3").value=vp3* n3;
        document.getElementById("vpr4").value=vp4* n4;
        document.getElementById("vpr5").value=vp5* n5;



    }
</script>

<!-- Footer -->
<footer id="footer">
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