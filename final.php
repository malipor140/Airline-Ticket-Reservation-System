<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cancellation</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Cabin_400.font.js"></script>
<script type="text/javascript" src="js/tabs.js"></script> 
<script type="text/javascript" src="js/jquery.jqtransform.js" ></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>

<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">
	.main, .tabs ul.nav a, .content, .button1, .box1, .top { behavior:url(js/PIE.htc)}
</style>
<![endif]-->
<!--[if lt IE 7]>
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0"  alt="" /></a>
	</div>
<![endif]-->
</head>
<body id="page5">
<div class="main">
<!--header -->
	<header>
		<div class="wrapper">
			<h1><a href="index.html" id="logo">Air lines</a></h1>
			<span id="slogan">Fast, Frequent &amp; Safe Flights</span>
			<br><br><br><nav id="top_nav">
				<ul>
					<li><a href="index.html" class="nav1">Home</a></li>
					<li><a href="login.php" class="nav2">Login</a></li>
					<li><a href="cancel.php" class="nav3">Cancellation</a></li>
				</ul>
			</nav>
		</div>
		<nav>
        <ul id="menu">
				<li><a href="index.html"><span><span>About</span></span></a></li>
				<li><a href="Services.html"><span><span>Services</span></span></a></li>
				<li><a href="Safety.html"><span><span>Safety</span></span></a></li>
                <li><a href="Cargo1.html"><span><span>Cargo</span></span></a></li>
				<li class="end"><a href="Contacts.html"><span><span>Contact Us</span></span></a></li>
			</ul>
			
		</nav>
	</header>
<!-- / header -->
<!--content -->
	<section id="content">
		<center><div class="wrapper pad1">
			
					<article class="col4">
                    <br>
						<?php
						$u1=$_REQUEST["n1"];
						$u2=$_REQUEST["n2"];
						$u3=$_REQUEST["p1"];
						$con=mysqli_connect("localhost","root","","airlines");
						$res=mysqli_query($con,"select * from bookings where Email_ID='$u2' and B_ID='$u1' and Password='$u3' ");
						$value=mysqli_fetch_array($res);
	if(is_array($value))
		{
			if($u1==$value["B_ID"] & $u2==$value["Email_ID"] & $u3==$value["Password"])
			{
				$fn=$value["F_Name"];
				$ln=$value["L_Name"];
				$ph=$value["Ph.No."];
				$v=$value["Email_ID"];
				$f1=$value["Flight_No"];$f2=$value["Flight_Name"];
				$d1=$value["Date"];$d2=$value["Month"];$d3=$value["Year"];
				$fare=$value["Fare"];
				$ac=$value["Account_No"];
				$val12= $value["Seats"];
				mysqli_query($con,"insert into cancellations values('$u1','$fn','$ln','$v','$ph','$d1','$d2','$d3','$f1','$f2','$ac','$fare','$val12')");
				echo "<center><h2>Cancellation Complete.</h2></center>";
				mysqli_query($con,"DELETE FROM bookings where B_ID='$u1' ");
			}
		
	else
		{
			echo "<center><h2>Cancellation Incomplete! Enter correct details.</h2></center>";
		}
		}
						?>
					</article>
				</div></center>
			</section>
			<!--content end-->
			<!--footer -->
			<footer>
				<div class="wrapper">
					<ul id="icons">
						<li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Delicious"><img src="images/icon2.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Stumble Upon"><img src="images/icon3.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon4.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Linkedin"><img src="images/icon5.jpg" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Reddit"><img src="images/icon6.jpg" alt=""></a></li>
					</ul>
					<div class="links">
						<a rel="nofollow" href="index.html" target="_blank">Website</a> developed by:<br>
						Abhishek Vijhani and Vrinda Narula</div>
				</div>
			</footer>
			<!--footer end-->
		</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>