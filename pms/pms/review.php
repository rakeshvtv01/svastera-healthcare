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
            <p></p>
            <h2>PERFORMANCE MANAGEMENT SYSTEM</h2>
        </header>
    </div>
</section>

<!-- Two -->
<section id="two" class="wrapper style2">
    <div class="inner">
        <div class="box">
            <div class="content">
                <header class="align-center">
                    <p></p>
                    <h2></h2>
                </header>
                <form method="post"action="review_view.php"><p>
                <select name="emp_name">
                    <option >SELECT EMPLOYEE</option>
                <?php


                $sql20=mysql_query("SELECT * FROM employee e, pms p WHERE   p.manager_id='$_SESSION[empid]' and e.stats='yes' and p.emp_id=e.emp_id");
                while($row20 =mysql_fetch_array($sql20))

                {


                    echo "<option value=' $row20[emp_id]'>$row20[emp_name]</option>";









                }


                ?>
                </select></p>
               <p>
               <label>MONTH</label>
                   <input type="text" value="<?php echo "$y"; ?>" name="month">
               </p>


                    <p>
                        <label>YEAR</label>
                        <input type="text" value="<?php echo "$m" ?>" name="year">
                    </p>

                    <p>

                        <input type="submit" value="REVIEW" name="review">
                    </p>
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

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>