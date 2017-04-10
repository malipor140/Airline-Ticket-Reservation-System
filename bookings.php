<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bookings</title>
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

<body id="page6">
<div class="main">
<!--header -->
	<header>
		<div class="wrapper">
			<h1><a href="index.html" id="logo">Air lines</a></h1>
			<span id="slogan">Fast, Frequent &amp; Safe Flights</span><br>
			<br><br><br><nav id="top_nav">
				<ul>
					<li><a href="admin.php" class="nav1">AddFlights</a></li>
					<li><a href="login.php" class="nav2">Logout</a></li>
					<li><a href="Cancel1.php" class="nav1">Cancellations</a></li>
				</ul>
			</nav>
		</div>
		
			
				<center><h2>Admin Page</h2></center>
			
		
	</header><div class="ic"></div>
<!-- / header -->
<!--content -->
	<section id="content">
		<div class="wrapper pad1">

                    <article class="">
						<h3 class="pad_top1">Bookings done</h3>
					
							<?php
							
							$con=mysqli_connect("localhost","root","","airlines");
	$res=mysqli_query($con,"select * from bookings ");
	
	
	echo"<table width='100%' cellspacing='5' cellpadding='5' class=''>";
	echo "<tr>";
		echo "<th>";
		echo "Booking ID";
		echo "</th>";
		echo "<th>";
		echo "First Name";
		echo "</th>";
		echo "<th>";
		echo "Last Name";
		echo "</th>";
		echo "<th>";
		echo "Email ID";
		echo "</th>";
		echo "<th>";
		echo "Phone No." ;
		echo "</th>";
		echo "<th colspan='3'>";
		echo "Travelling date" ;
		echo "</th>";
		echo "<th>";
		echo "Flight No";
		echo "</th>";
		echo "<th>";
		echo "Flight Name";
		echo "</th>";
		echo "<th>";
		echo "Account No." ;
		echo "</th>";
		echo "<th>";
		echo "Code";
		echo "</th>";
		echo "<th>";
		echo "Amount" ;
		echo "</th>";
		echo "<th>";
		echo "Seats Book" ;
		echo "</th>";
		echo "</tr>";
		echo "<br>";
	while($v=mysqli_fetch_array($res))
	{
		echo "<tr>";
		echo "<td align='center'>";
		echo $v["B_ID"];
		echo "</td>";
		echo "<td>";
		echo $v["F_Name"];
		echo "</td>";
		echo "<td>";
		echo $v["L_Name"];
		echo "</td>";
		echo "<td>";
		echo $v["Email_ID"];
		echo "</td>";
		echo "<td>";
		echo $v["Ph.No."];
		echo "</td>";
		echo "<td align='center'>";
		echo $v["Date"];
		echo "</td>";
		echo "<td align='center'>";
		echo $v["Month"];
		echo "</td>";
		echo "<td align='center'>";
		echo $v["Year"];
		echo "</td>";
		echo "<td align='center'>";
		echo $v["Flight_No"] ;
		echo "</td>";
		echo "<td align='center'>";
		echo $v["Flight_Name"] ;
		echo "</td>";
		echo "<td align='center'>";
		echo $v["Account_No"] ;
		echo "</td>";
		echo "<td align='center'>";
		echo $v["Code"] ;
		echo "</td>";
		echo "<td align='center'>";
		echo $v["Fare"] ;
		echo "</td>";
		echo "<td align='center'>";
		echo $v["Seats"] ;
		echo "</td>";
		echo "</tr>";
	}
    echo"";
	echo "</table>";

	?>







					</article></div>
					<div class="wrapper pad">

                    <article class="col3">
						
						
					</article>
					
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