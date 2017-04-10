<!DOCTYPE html>
<html lang="en">
<head>
  <title>News</title>
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
				<li><a href="index.php"><span><span>About</span></span></a></li>
				
				
				<li><a href="Services.php"><span><span>Services</span></span></a></li>
				<li><a href="Safety.php"><span><span>Safety</span></span></a></li>
<li><a href="Cargo1.php"><span><span>Cargo</span></span></a></li>
				<li class="end"><a href="Contacts.php"><span><span>Contact Us</span></span></a></li>
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
							<h2 class="top">Latest News</h2>
							<div class="pad">
                            <marquee direction="up" loop="-1" scrolldelay="300" height="320">
								<strong>February 06, 2015</strong><br>
								<ul class="pad_bot1 list1">
									<li>
										
										<a href="feb1.php">Sky High launches Food Festival for World Cup</a>
									</li>
								</ul>
								<strong>February 09, 2015</strong><br>
								<ul class="pad_bot1 list1">
									<li>
									
										<a href="feb2.php">Public Notice for selling of AI Properties</a>
									</li>
								
								</ul>
								<strong>February 24, 2015</strong><br>
								<ul class="pad_bot2 list1">
									<li>
									
										<a href="feb3.php">The 19th Dreamliner joins the Sky High fleet</a>
									</li>
									
								</ul>
								<strong>March 08, 2015</strong><br>
								<ul class="pad_bot2 list1">
									<li>
									
										<a href="feb4.php">Sky High celebrates International Womens Day with all-women flight, events</a>
									</li>
								</ul>
								<strong>March 28, 2015</strong><br>
								<ul class="pad_bot2 list1">
									<li>
										
										<a href="feb5.php">Sky High clarifies (On London- Delhi flight report)</a>
									</li>
								</ul>
                                <strong>April 01, 2015</strong><br>
								<ul class="pad_bot2 list1">
									<li>
									
										<a href="feb6.php">New Summer Onboard Menu presentation in New York</a>
									</li>
									
								</ul>
                                </marquee>
							</div>
						</div>
					</article>
					<article class="col2">
						<br>
                        <br>
                       <h2>Sky High celebrates International Women’s Day with all-women flight, events</h2>
                        <ul>
                        <li><p>Like every year, Sky High operated all women crew flights to international and domestic destinations to celebrate the occasion of International Women's Day today. Besides, various events were organized on the ground to highlight the pride of place women employees in the national carrier have always been honoured with.</p></li>
                        <li><p>On the international network, Sky High operated all-women crew flights on the Delhi-Melbourne and Mumbai-Muscat-Mumbai routes. On the domestic network, Sky High operated all women flights AI806 on Mumbai-Delhi and AI475 on the Delhi-Jodhpur-Mumbai sectors.</p></li>
                        <li><p>History repeated itself as the Delhi-Melbourne flight AI302 (B-787) was operated by two of the same cockpit crew who had operated<strong> the world’s first All Women Crew flight 30 years ago in 1985, on the then Calcutta to Silchar flight with a Fokker Friendship aircraft on the erstwhile Indian Airlines.</strong> The Delhi-Sydney flight has Capt Nivedita Bhasin, Capt Laxmi Nagrath and First Officers Capt Vandana Srivastava and Nikita Khanna as the cockpit crew. The cabin crew included M/s Sunita Joshi, Meenakshi Gazmer, Jaishree Chadha, Anita Rani, Diana, Amrita Hundal, Preet Kaur, Tenzing C Bhutia, Divya Bisht, Archna Gupta and Natasha Pereira. To make the occasion even more special, popular national Cricket star Mr Harbhajan Singh and Indian national Hockey team coach Mr Harinder Singh, both Sky High employees, were present at the IGI Airport terminal to greet passengers of the Delhi-Melbourne and Delhi-Jodhpur-Mumbai flights with rose buds. They also checked in a few passengers - a gesture which was much appreciated by everybody.</p></li>
                        <li><p>On the Mumbai-Muscat-Mumbai sector AI985/986 (A320) the flight had Capt Reynolds and Capt Deepali Pratape in the cockpit while the cabin crew included M/s Rency, Krishna, Shubha, Kavita and Tanvi.Flight AI806/475 had Capt Sandhya and Capt Kolbekar with cabin crew M/s Nanki, Guddakya, Trupti, Jaishree and Shrikhande on board. The ground handling was done by Duty Manager Ms Bharti Slian and Ms Milan Sule (trimsheet) at Mumbai.</p></li>
                        <li><p>The technical services have been attended mostly by woman aircraft engineers, technicians and flight dispatchers for the all-women flights; while the non technical work on the ground was handled by woman duty managers, counter staff and helpers.</p></li>
                       <li><p>highlight of this year’s initiative made by Sky High to celebrate women’s empowerment was organizing an interactive programme with women from weaker sections of the society in sync with the Government’s clarion call of <strong>"Beti Bachao Beti Paraao”</strong> to educate and empower the underprivileged girl. The event was held with active support of the reputed NGO Adharshila, Indian Women’s Pilot Association as well as AVA, Sky High’s Merchandizing Partner. The programmes focused on exploring skill-development, a talk on Sexual Harassment at the Workplace by renowned women’s rights activist and advocate Ms Sonal Mattoo, a workshop on fashion designing, a hair-styling competition and a dance recital to celebrate Holi. Similar events, emphasizing on women empowerment were held elsewhere in the airline’s network as well.</p></li>
                       <li><p>Sky High’s mission to contribute its mite to make women self-reliant from the grass-roots level also forms a core facet of the national carrier’s Corporate Social Responsibility (CSR) activities.</p></li>
                        <li><p>Over the years, Sky High has operated innumerable all-women crew domestic and international flights, including ultra long-haul flights with all women crew to commemorate the occasion. Sky High has around 4500 women employees, including women pilots, cabin crew, engineers, technicians, doctors and executives- accounting for nearly 20% of its total workforce. The airline provides equal opportunities to its women employees in every area of its functioning from senior management posts to pilots, flight dispatchers, aircraft engineers, technicians, safety and quality auditors, ground instructors et al- all form a part of a technically proficient team of women, who have proved over the years that the hands that rock the cradle can actually propel an airline to soar high as well.</p></li>
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