<!DOCTYPE html>

<html lang="en">
<head>
  <title>Flights Available</title>
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
<body id="page4">
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
				<li id="menu_active"><a href=""><span><span>Book</span></span></a></li>
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
		<div class="wrapper pad1">
			<article>
				<div>
					<h2 class="top">Search Results</h2>
						<div class="pad">
                        <form>
							<?php
							
							$a=$_REQUEST["s1"];
							$b=$_REQUEST["s2"];
							$con=mysqli_connect("localhost","root","","airlines");
	$res=mysqli_query($con,"select * from aircraft where Place='$a' And Destination='$b' ");
	$cnt = mysqli_num_rows($res);
	if($cnt==0)
		{
			echo "No Flights";
			}
			
	else
	{
	echo"<table width='50%' class='table'>";
	echo"<tr><td style='padding-left: 20px;'><h4>Traveling From:</h4></td>";
	echo"<td><label name='b1'>$a</label></td></tr>";
	echo"<tr><td style='padding-left: 20px;'><h4>Traveling To:</h4></td>";
	echo"<td><label name='b2'>$b</label></td></tr></table>";
	

	echo "<table class='table'>";
	echo "<tr>";
		echo "<th>";
		echo "Select Flight";
		echo "</th>";
		echo "<th>";
		echo "Flight No";
		echo "</th>";
		echo "<th>";
		echo "Flight Name";
		echo "</th>";
		echo "<th>";
		echo "Place";
		echo "</th>";
		echo "<th>";
		echo "Destination";
		echo "</th>";
		echo "<th>";
		echo "Arrival Time";
		echo "</th>";
		echo "<th>";
		echo "Departure Time" ;
		echo "</th>";
		echo "<th>";
		echo "Economy Fare" ;
		echo "</th>";
		echo "<th>";
		echo "Economy Seats Left" ;
		echo "</th>";
		echo "<th>";
		echo "Business Fare";
		echo "</th>";
		echo "<th>";
		echo "Business Seats Left" ;
		echo "</th>";
		echo "</tr>";
		
		
    while($v=mysqli_fetch_array($res)) {
       	echo "<tr>";
		echo "<td align='center'><input type='radio' name='r1' value='$v[0]' CHECKED></td>";
		echo "<td align='center'>";
		echo $v["Flight_No"];
		echo "</td>";
		echo "<td>";
		echo $v["Flight Name"];
		echo "</td>";
		echo "<td align='center'>";
		echo $v["Place"];
		echo "</td>";
		echo "<td align='center'>";
		echo $v["Destination"];
		echo "</td>";
		echo "<td align='center'>";
		echo $v["Arrival Time"];
		echo "</td>";
		echo "<td align='center'>";
		echo $v["Departure Time"] ;
		echo "</td>";
		echo "<td align='center'>";
		echo $v["Economy_Fare"] ;
		echo "</td>";
		echo "<td align='center'>";
		echo $v["Economy Seats Left"] ;
		echo "</td>";
		echo "<td align='center'>";
		echo $v["Business_Fare"] ;
		echo "</td>";
		echo "<td align='center'>";
		echo $v["Business Seats Left"] ;
		echo "</td>";
		echo "</tr>";
 
    
}
	
		 
		
	
	
	echo "</table>";
echo "<button class='button1' type='submit' name='b1' autofocus formaction='book.php'>Book</button></form><br><br>";}
	
	?>
    
							</div>
						</div>
					</article>
					
				</div>
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
						Website developed by:<br>
						Abhishek Vijhani and Vrinda Narula</div>
				</div>
			</footer>
			<!--footer end-->
		</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>