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







if(isset($_POST["summary"])) {

    $empid=$_POST["empid"];
    $pmsid=$_POST["pmsid"];

   $route="manager_direct";





    $sql = mysql_query("SELECT * FROM pms  where emp_id='$empid' and id='$pmsid'");
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
    $performance_pay_C = $row['performance_pay_c'];
    $variable_pay_asses_C = $row['variable_pay_asses_C'];

    $variable_payout = $row['variable_payout'];
    $month = $row['month'];
    $year = $row['year'];


}




if(isset($_POST["summary_dasboard"])) {

    $empid=$_POST["empid"];


    $route="direct";





    $sql=mysql_query("SELECT * FROM pms  where emp_id='$_SESSION[empid]' and month='$m' and year='$y'");
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
    $performance_pay_C = $row['performance_pay_c'];
    $variable_pay_asses = $row['variable_pay_asses'];
    $variable_pay_asses_C = $row['variable_pay_asses_C'];

    $variable_payout = $row['variable_payout'];
    $month = $row['month'];
    $year = $row['year'];


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
            width: 270px;
            height: 400px;
        }
    </style>
</head>
<body class="subpage" onload="myFunction()">

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
<form action="scripts/summary_validate.php" method="post">
    <!-- Two -->
    <section id="two" class="wrapper style2" >
        <div class="inner" style="width: 100%">
            <div class="box">
                <div class="content" >
                    <header class="align-center">
                        <p></p>
                        <h2></h2>
                    </header>
                    <div>
                        <table>
                            <tr><th>PERFORMANCE PAY ASSESSMENT</th><td><input value="<?php echo "$performance_pay";?>" name="perf_pay_ass" id="perf_pay_ass"></td><td><input name="perf_pay_ass_c" id="perf_pay_ass_c" placeholder="OFFICE USE % PAY OUT" value="<?php echo "$performance_pay_C"; ?>"></td></tr>
                            <tr><th>VARIABLE  PAY ASSESSMENT</th><td><input name="var_pay_ass" id="var_pay_ass" value="<?php echo "$variable_pay_asses"; ?>"></td><td><input name="var_pay_ass_c" id="var_pay_ass_c" placeholder="OFFICE USE % PAY OUT" value="<?php echo "$variable_pay_asses_C"; ?>"></td></tr>
                        </table>


                    </div>
<br><br>
                    <table>
                      <tr><th><label>MONEY EARNED NE TIME/RECURRING <br>TIME SAVED ONE TIME /RECURRING</label></th><th><label>PERFORMANCE SUMMARY</label></th><th><label>CONCERNS</label></th><th><label>SUPPORT NEEDED</label></th><th><label>FEEDBACK(MANAGER+EMPLOYEE)</label></th></tr>
                      <tr><td><textarea name="earned" id="earned"><?php echo "$earned";?></textarea></td><td><textarea name="summary" id="summary"><?php echo "$performance";?></textarea></td><td><textarea name="concerns" id="concerns"><?php echo "$concerns";?></textarea></td><td><textarea name="supportneeded" id="supportneeded"><?php echo "$support_needed";?></textarea></td><td><textarea name="feedback" id="feedback"><?php echo "$feedback";?></textarea></td></tr>

                    </table>
                    <center>
                        <p>

                            <input type="submit" value="SAVE" name="save">

                            <input type="submit" value="FINISH" name="FINISH">


                        </p>

                    </center>

                    <input type="text" name="empid" value="<?php echo "$empid";?>">
                    <input type="text" name="pmsid" value="<?php echo "$pms_id";?>">

                    <input type="text" name="route" id="route" value="<?php echo "$route";?>">

                    <input type="text" name="emptype" id="emptype" value="<?php echo "$_SESSION[emp_type]";?>">

</form>




</div>
</div>
</div>
</section>


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



<script>
    function myFunction() {




      var n=document.getElementById("emptype").value;
        var n1=document.getElementById("route").value;

        alert(""+n1);

        if(n=="employee" )
        {
            alert("");
           // var earned_but=document.getElementById("earned").disabled=true;
            var summary_but=document.getElementById("summary").disabled=true;
            //var concerns_but=document.getElementById("concerns").disabled=true;
            var supportneeded_but=document.getElementById("supportneeded").disabled=true;
            //var feedback_but=document.getElementById("feedback").disabled=true;
            document.getElementById("perf_pay_ass").disabled=true;
            document.getElementById("perf_pay_ass_c").disabled=true;


            document.getElementById("var_pay_ass").disabled=true;
            document.getElementById("var_pay_ass_c").disabled=true;




        }


        else if(n=="manager" && n1=="manager_direct")
        {

            var earned_but=document.getElementById("earned").disabled=true;
            //var summary_but=document.getElementById("summary").disabled=true;
            var concerns_but=document.getElementById("concerns").disabled=true;
            //var supportneeded_but=document.getElementById("supportneeded").disabled=true;
            //var feedback_but=document.getElementById("feedback").disabled=true;

        }
        else if(n=="manager" &&  n1=="direct" )
        {



        }

    }



</script>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>