<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Page</title>
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
					<li><a href="bookings.php" class="nav1">Bookings</a></li>
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

                    <article class="col2">
						<h3 class="pad_top1">Add Flight</h3>
						<form id="ContactForm" method="post">
							<div>
								<div  class="wrapper">
									<span>Flight No:</span>
									<input type="text" class="input" name="f1" >								
								</div>
								<div  class="wrapper">
									<span>F.Name:</span>
									<input type="text" class="input" name="f2" >	</div>
                                    <div  class="wrapper">
									<span>From:</span>
									<input type="text" class="input" name="f3" >								
								</div>							
								</div>
                                <div  class="wrapper">
									<span>To:</span>
									<input type="text" class="input" name="f4" >								
								</div>
                                <div  class="wrapper">
									<span>Arrival:</span>
									<input type="text" class="input" name="f5" >								
								</div>
                                <div  class="wrapper">
									<span>Departure:</span>
									<input type="text" class="input" name="f6" >								
								</div>
                                <div  class="wrapper">
									<span>Eco Fare:</span>
									<input type="text" class="input" name="f7" >								
								</div>
                                <div  class="wrapper">
									<span>Eco Seats:</span>
									<input type="text" class="input" name="f8" >								
								</div>
                                <div  class="wrapper">
									<span>Bus Fare:</span>
									<input type="text" class="input" name="f9" >								
								</div>
                                <div  class="wrapper">
									<span>Bus Seats:</span>
									<input type="text" class="input" name="f10" >								
								</div>
								<br><button class="button1" type="submit" autofocus formaction="flight.php">Submit</button>
							</div>
						</form>
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