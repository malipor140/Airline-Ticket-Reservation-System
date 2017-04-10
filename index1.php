<!DOCTYPE html>
<html lang="en">
<head>
  <title>About</title>
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
<body id="page1">
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
				<li id="menu_active"><a href="index.php"><span><span>About</span></span></a></li>
				<li><a href="Offers.php"><span><span>Offers</span></span></a></li>
				
				<li><a href="Services.php"><span><span>Services</span></span></a></li>
				<li><a href="Safety.php"><span><span>Safety</span></span></a></li>
				<li class="end"><a href="Contacts.php"><span><span>Contact Us</span></span></a></li>
			</ul>
		</nav>
	</header>
<!-- / header -->
<!--content -->
	<section id="content">
		<div class="for_banners">
			<article class="col1">
						<div class="tabs">
							<ul class="nav">
								<li class="selected"><a href="#Flight">Flight</a></li>
								
								
							</ul>
							<div class="content">
								<div class="tab-content" id="Flight">
									<form id="form_1" method="post">
										<div>
 											<div class="radio">												
											</div><br>
											<div style="padding-left:25px">
                                            <table>
												<tr><td><h4>From</h4></td>
												<td><select name="s1" type="multiple" class="">
                                                <option >Chennai</option>
                                                 <option >Mumbai</option>
                                                 <option >New Delhi</option>
                                                  <option >Boston</option>
                                                   <option >London</option>
                                                    <option >Tokyo</option>
                                                </select></td></tr>
                                                   							
												<tr><td><h4>To</h4></td>
												<td><select name="s2" type="multiple" >
                                                <option>Banglore</option>
                                                 <option>Mumbai</option>
                                                 <option>New Delhi</option>
                                                  <option>Boston</option>
                                                   <option>London</option>
                                                    <option>Tokyo</option>
                                                </select></td></tr></table><br>
<button class="button1" type="submit" formaction="result1.php">Search</button>
											</div>
											<div class="wrapper">
												<div class="col1">
													
													
												</div>
												
											<div class="wrapper">
												
												
											</div>
												
											</div>
										</div>
									</form>
								</div>
								
							</div>
						</div>	
					</article>
					<div id="slider">
						<img src="images/banner1.jpg" alt="">
						<img src="images/banner2.jpg" alt="">
						<img src="images/banner3.jpg" alt="">
					</div>
				</div>
		<div class="wrapper pad1">
			<article class="col1">
				<div class="pad_bot3">
				
				<div class="box1">
							<h2 class="top">Hot Offers of the Week</h2>
							<div class="pad">
								<strong>New Delhi</strong><br>
								<ul class="pad_bot1 list1">
									<li>
										
										<a href="Book2.html">Mumbai</a>
									</li>
								</ul>
								<strong>London</strong><br>
								<ul class="pad_bot1 list1">
									<li>
									
										<a href="Book2.html">Boston</a>
									</li>
									<li>
									
										<a href="Book2.html">Venice</a>
									</li>
								</ul>
								<strong>New York</strong><br>
								<ul class="pad_bot2 list1">
									<li>
									
										<a href="Book2.html">Zurich</a>
									</li>
									
								</ul>
								<strong>Chennai</strong><br>
								<ul class="pad_bot2 list1">
									<li>
									
										<a href="Book2.html">Mumbai</a>
									</li>
								</ul>
								<strong>Tokyo</strong><br>
								<ul class="pad_bot2 list1">
									<li>
										
										<a href="Book2.html">London</a>
									</li>
								</ul>
							</div>
						</div>
					</article>
					<article class="col2">
						<h3>About Our Airlines<span>We believe in safe flying.</span></h3>
						<div class="wrapper">
							<article class="cols">
								<figure><img src="images/page1_img1.jpg" alt="" class="pad_bot2"></figure>
								<p class="pad_bot1">Air Lines will be the most preferred domestic airline in India. It will be the automatic first choice carrier for the travelling public and set standards, which other competing airlines will seek to match.
<br>
Air Lines will achieve this pre-eminent position by offering a high quality of service and reliable, comfortable and efficient operations.

</p>
							</article>
							<article class="cols pad_left1">
								<figure><img src="images/page1_img2.jpg" alt="" class="pad_bot2"></figure>
								<p class="pad_bot1">
								<p>Air Lines will be an airline which is going to upgrade the concept of domestic airline travel - be a world class domestic airline.
<br>
Air Lines will achieve these objectives whilst simultaneously ensuring consistent profitability, achieving healthy, long-term returns for the investors and providing its employees with an environment for excellence and growth.</p>
							</article>
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
	$(document).ready(function() {
		tabs.init();
	});
	jQuery(document).ready(function($) {
		$('#form_1, #form_2, #form_3').jqTransform({imgPath:'jqtransformplugin/img/'});	
	});
	$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'fade', //Specify sets like: 'fold,fade,sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft' 
		slices:15,
		animSpeed:500,
		pauseTime:6000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false, //Next & Prev
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		controlNavThumbsFromRel:false, //Use image rel for thumbs
		controlNavThumbsSearch: '.jpg', //Replace this with...
		controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
		keyboardNav:true, //Use left & right arrows
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:1, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
	});
</script>
</body>
</html>