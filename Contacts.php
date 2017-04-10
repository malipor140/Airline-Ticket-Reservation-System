<!DOCTYPE html>
<html lang="en">
<head>
  <title>Services</title>
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
			<?php
		session_start();
		$a=$_SESSION['uid'];
		$b=$_SESSION['pwd'];
		$con=mysqli_connect("localhost","root","","airlines");
	$res=mysqli_query($con,"select F_Name from l1 where Email_ID='$a' and Password='$b' ");
	$value=mysqli_fetch_array($res);
	
			echo"<h1><a href='index.php' id='logo'>Air lines</a></h1>";
			echo"<span id='slogan'>Fast, Frequent &amp; Safe Flights</span>";echo "<br><div style='float:right'><table><tr><th><h4>Hello ".$value['F_Name']."!</h4></th></tr>";
			echo"<tr><td><nav id='top_nav'>";
				echo"<ul><li><a href='index.php' class='nav1'>Home</a></li>";
					echo"<li><a href='login.php' class='nav2'>Logout</a></li>";
					echo"<li><a href='cancel.php' class='nav3'>Cancellation</a></li>";
						echo"</ul>
			</nav></td></tr></table></div>
		</div>";
				
				?>
		<nav>
			<ul id="menu">
				<li><a href="index.html"><span><span>About</span></span></a></li>
				<li><a href="Services.html"><span><span>Services</span></span></a></li>
				<li><a href="Safety.html"><span><span>Safety</span></span></a></li>
                <li><a href="Cargo1.html"><span><span>Cargo</span></span></a></li>
				<li class="end" id="menu_active"><a href="Contacts.html"><span><span>Contact Us</span></span></a></li>
			</ul>
		</nav>
	</header><div class="ic">More Website Templates at TemplateMonster.com!</div>
<!-- / header -->
<!--content -->
	<section id="content">
		<div class="wrapper pad1">
			<article class="col1">
				<div class="pad_bot3">
				
				<div class="box1">
							<h2 class="top">Contact Us</h2>
							<div class="pad">
								
								<ul class="pad_bot1 list1">
									<li>
										
										<a href="customermain.php">Customer Support</a>
									</li>
								</ul>
								
								<ul class="pad_bot1 list1">
									<li>
									
										<a href="cus2.php">Contact Details</a>
									</li>
								
								</ul>
								
								
								
								<ul class="pad_bot2 list1">
									<li>
									
										<a href="coon.php">Fedback</a>
									</li>
								</ul>
							
							</div>
						</div>
					</article>
					<article class="col2">
						<br>
                        <br>
                        <h2>Online Bookings Helpdesk <br />(Monday to Saturday , 0930 hrs. - 1730 hrs. IST)</h2>
                        <ul>
                        <li><p>Landline number :011-xxxxxxxx<br />Landline number :011-xxxxxxxx<br />E mail ID :abhishekvijhani123@gmail.com</p></li>
                        <h2>India</h2>
                        <li><p>Toll Free Number : 1800 180 1407 </br>(from all MTNL/BSNL lines) and Mobile / landline Numbers of most Private Telecom Operators</p></li>
                        <h2>Call Centre Email IDs</h2>
                        <li><p>E mail ID :call.del@skyhigh.in<br/>E mail ID :call.bom@skyhigh.in<br/>E mail ID :traveldocs@airindia.in (For forwarding scanned copies of travel documents for re-issuance of Tickets / Updating FFP mileage).</p></li>
                        <h2>Frequent Flyer</h2>
                        <li><p>Toll Free Number : 1800 180 1407 </br>(from all MTNL/BSNL lines) and Mobile / landline Numbers of most Private Telecom Operators</p></li>
                        <h2>Email Addresses for FFP Members</h2>
                        <li><p>General Queries :flying-returns.ai@iclployalty.com<br />Missing miles / Retro credit :retros.ai@iclployalty.com<br />Redemption related Queries :redemptions.ai@iclployalty.com<br />Silver Edge Members :silveredge.ai@iclployalty.com</p></li>
                        <h2>USA/Canada</h2>
                        <li><p>USA Toll Free Number :1800 223 7776 <br/>Canada Toll Free Number :1800 625 6424</p></li>
                        <h2>UK</h2>
                        <li><p>UK Toll Free Number :1800 223 7776 </p></li>
                        <h2>France</h2>
                        <li><p>France Toll Free Number :1800 223 7776 </p></li>
                        <h2>Germany</h2>
                        <li><p>Germany Toll Free Number :1800 223 7776 </p></li>
                        <h2>Australia</h2>
                        <li><p>Australia Toll Free Number :1800 223 7776 </p></li>
                        <h2>Singapore</h2>
                        <li><p>Singapore Toll Free Number :1800 223 7776 </p></li>
                        </ul>
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
						<a rel="nofollow" href="index.html" target="_blank">Website</a> developed by:<br>
						Abhishek Vijhani and Vrinda Narula</div>
				</div>
			</footer>
			<!--footer end-->
		</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>