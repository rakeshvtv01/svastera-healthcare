<?php
session_start();




include "scripts/database.php";

//include "scripts/test_medoo.php";


$date= date("Y-m-d");
$y=date("Y");
$m=date("m");







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




</head>
<body class="subpage" onload="myFunction()">

<!-- Header -->
<header id="header">
    <div class="logo"><a href="index.html">doodle <span>interiors</span></a></div>
    <a href="#menu">Menu</a>
</header>

<!-- Nav -->
<nav id="menu">
    <ul class="links">
        <li><a href="index.html">Home</a></li>

    </ul>
</nav>

<!-- One -->
<section id="One" class="wrapper style3">
    <div class="inner">
        <header class="align-center">
            <p>PMS</p>
            <h2>DASHBOARD</h2>
        </header>
    </div>
</section>

<!-- Two -->
<section id="two" class="wrapper style2">
    <div class="inner">
        <div class="box">
            <div class="content">
                <header class="align-center">
                    <p>HI  <?php  echo " $_SESSION[emp_name]";?></p>
                    <h2><?php echo "$_SESSION[company_name]"; ?></h2>
                </header>

                <table>

                    <tr style="background-color: white">

                        <td>


                            <form action="objectives.php">
                                <input type="submit" value="PMS" id="pms"><BR><br>



                            </form>


                        </td>

                        <td>


                            <form action="summary.php" method="post">
                                <input type="submit" value="Summary" name="summary_dasboard" id="summary"><BR><br>

                                <input type="hidden" name="empid" value="<?php echo "$_SESSION[empid]";?>">

                                <input type="hidden" name="emptype" id="demo"  value="<?php echo "$_SESSION[emp_type]";?>">


                            </form>

                        </td>

                        <td>
                            <form action="review.php">
                                <input type="submit" value="REVIEW" id="review"><BR><br>



                            </form>


                        </td>



                        <td>

                            <form action="scripts/iniate.php">

                                <input type="submit" value="INITIATE PMS" id="initpms">


                            </form>

                        </td>

                    </tr>

                </table>

               <div style="display: inline-block">

               </div>

<div style="display: inline-block">

</div>
                <div style="display: inline-block">

                </div>
                <div style="display: inline-block">

                </div>
                </p>
                <ul>


<?php
                $sql21=mysql_query("SELECT * FROM `employee` WHERE  stats='yes' AND manager_id='$_SESSION[empid]'");
                while($row21 =mysql_fetch_array($sql21)){
                    $empid=$row21['emp_id'];
                    $empname=$row21['emp_name'];
                         echo "<li><p>  $empname    </p></li> ";
                }
?>
                </ul>

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

        var n=document.getElementById("demo").value ;

        var init_but=document.getElementById("initpms").style;
        var summary_but=document.getElementById("summary").style;
        var review_but=document.getElementById("review").style;
        var pms_but=document.getElementById("pms").style;

        if(n=="employee")
        {
           init_but.visibility="hidden";
            review_but.visibility="hidden";


        }


        else if(n=="manager")
        {



        }
        else if(n=="hr")
        {



        }
        alert(""+n);
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