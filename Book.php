<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
  <title>Book</title>
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
<body id="page3">
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
					<div class="tabs2">
							<ul class="nav">
								<li class="selected"><a href="#Flight">Flight</a></li>
								
								
							</ul>
							<div class="content">
								<div class="tab-content" id="Flight">
									<form id="form_5" class="form_5" method="post">
										<div>
											
												<div class="wrapper">
													 <br>
                                                     <br>
											</div>
											<div class="pad">
												<div class="wrapper under">
													<div class="col1"><table width="100%">
                                                    <?php
														
														//session_start();
														$_SESSION["v"]="";
														if(isset($_REQUEST["b1"]))
														{
															$a=$_REQUEST["r1"];
															
															$con=mysqli_connect("localhost","root","","airlines");
														$res=mysqli_query($con,"select * from aircraft where Flight_No='$a'");
											$v=mysqli_fetch_array($res);
			
	
		echo"<tr><th>Flight No</th>";
		echo "<td>".$v['Flight_No']."</td></tr>";
		$_SESSION["v"]=$v['Flight_No'];
		echo"<tr><th>Flight Name</th>";
		echo "<td>".$v["Flight Name"]."</td></tr>";
		$_SESSION["v1"]=$v['Flight Name'];
		echo"<tr><th>From</th>";
		echo "<td>".$v['Place']."</td></tr>";
		$_SESSION["v2"]=$v['Place'];
		echo"<tr><th>To</th>";
		echo "<td>".$v['Destination']."</td></tr>";
		$_SESSION["v3"]=$v['Destination'];
		echo"<tr><th>Arrival Time</th>";
		echo "<td>".$v['Arrival Time']."</td></tr>";
		$_SESSION["v4"]=$v['Arrival Time'];
		echo"<tr><th>Departure Time</th>";
		echo "<td>".$v['Departure Time']."</td></tr>";
		$_SESSION["v5"]=$v['Departure Time'];
		echo"<tr><th>Economy Class Fare</th>";
		echo "<td>".$v['Economy_Fare']."</td></tr>";
		echo"<tr><th>Business Class Fare</th>";
		echo "<td>".$v['Business_Fare']."</td></tr>";
		
		
		
		
	
    echo"";
														}

														

														
														
														?></table>
                                                       
                                                        <br>
													</div>
													
												</div>
												<div class="wrapper under"><br>
													<span class="left">Flights</span>
													<div class="cols marg_right1">
														<h6>Outbound flight</h6>
														
														<div class="marg_top1">
															<table>
<td><select name="c1" id="c1"><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option></select></td>
<td> <select name="c2" id="c2"><option>January</option><option>February</option><option>March</option><option>April</option><option>May</option><option>June</option><option>July</option><option>August</option><option>September</option><option>October</option><option>November</option><option>December</option></select></td>
<td><select name="c3" id="c3"><option>2015</option><option>2016</option><option>2017</option></select></td></tr>
<script type="text/javascript">
  $(document).ready(function(){
    var CurrentDate=new Date();
	$("#c1").val(CurrentDate.getDate());
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    var cda=new Date(month);
$("#c2").val(cda.getMonth());
});
</script>

<script type="text/javascript">
  $(document).ready(function(){
var cdas=new Date(year);
    $("#c3").val(cdas.getFullYear());
    
    
  });
</script>


</table>
															<br>
                                                            <br>
                                                            <br>
															
														</div>
														
													</div>
													
												</div>
												<div class="wrapper pad_bot1"><br>
													<span class="left">Passengers</span>
													<div class="cols marg_right1">
														<div class="row">
															<input type="text" name="e1" class="input2" value="1">
															<span class="left">Adults</span>
															
														</div><br>
														<div class="row">
															<input type="text" name="e2" class="input2" value="0">
															<span class="left">Children</span>
																						</div>
													</div>
													<div class="cols">
														<div class="select1"><span class="left">Class</span><select name="lst"><option>Economy</option><option>Business</option></select>
															
														</div>
														
													</div><br><br><br><br><br><br>
													<button name="pay" class="button1" type="submit" formaction="inter.php">Proceed To PAY</button>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="tab-content" id="Hotel">
									
								</div>
								
									
								</div>
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
						<a rel="nofollow" href="index.html" target="_blank">Website</a> developed by:<br>
						Abhishek Vijhani and Vrinda Narula</div>
				</div>
			</footer>
			<!--footer end-->
		</div>
<script type="text/javascript"> Cufon.now(); </script>
<script>
	jQuery(document).ready(function($) {
		$('.form_5').jqTransform({imgPath:'jqtransformplugin/img/'});	
	});
	$(document).ready(function() {
		tabs2.init();
	});
</script>
</body>
</html>