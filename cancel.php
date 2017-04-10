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
<script>
function chckacc()
{
var y1 = document.forms["Contact"]["ph"].value;
if (y1.length!=16)
	{
		alert("Account number must be of 16 digits");
		return false;
	}
var numbers = /^[0-9]+$/;  
if(y1.match(numbers))  
{  
return true;  
}  
else  
{  
alert("Inappropriate Account number");  
document.forms["Contact"]["ph"].focus();  
return false; 
}
}


function chckc()
{
var y2 = document.forms["Contact"]["e1"].value;
if (y2.length!=4)
	{
		alert("Pin must be of 4 digits");
		return false;
	}
var numbers = /^[0-9]+$/;  
if(y2.match(numbers))  
{  
return true;  
}  
else  
{  
alert("Inappropriate Pin");  
document.forms["Contact"]["e1"].focus();  
return false; 
}
}

function chckemail()
{
var x1 = document.forms["Contact"]["n2"].value;
var atpos = x1.indexOf("@");
    var dotpos = x1.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x3.length) 
	{
        alert("Not a valid e-mail address");
	document.forms["Contact"]["n2"].focus();
		return false;
	}
}

function chckps()
{
var x2 = document.forms["Contact"]["p1"].value;
var passid_len = x2.length;  
if (passid_len == 0 ||passid_len >= 12 || passid_len < 6)  
{  
alert("Password should not be empty / length should be between 6 and 12");  
document.forms["Contact"]["p1"].focus();  
return false;  
}  
else
{
return true;  
}  
}


</script>
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
				<li class="end"><a href="Contacts.php"><span><span>Contact Us</span></span></a></li>
			</ul>
		</nav>
	</header>
<!-- / header -->
<!--content -->
	<section id="content">
		<center><div class="wrapper pad1">
			
					<article class="col4">
                    <br>
						
                        <h3 class="pad_top1">Cancellation</h3>
						<center><form name="Contact" id="ContactForm">
							<div>
								<div  class="wrapper">
									<span>Booking ID:</span>
									<input type="text" class="input" name="n1" required="required" maxlength="4">
								</div>
                                <div  class="wrapper">
									<span>Email ID:</span>
									<input type="text" class="input" name="n2" required="required" onchange="return chckemail()">
								</div>
								
								<div  class="wrapper">
									<span>Password:</span>
									<input type="password" class="input" name="p1" required="required" onchange="return chckps()">								
								</div>
                                <div  class="wrapper">
									<span>A/C NO:</span>
									<input type="text" class="input" name="ph" maxlength="16" required="required" onchange="return chckacc()">								
								</div>
                                <div  class="wrapper">
									<span>Code:</span>
									<input type="password" class="input" name="e1" maxlength="4" required="required" onchange="return chckc()">								
								</div>
                                
								<br><button class="button1" type="submit" formaction="final.php">Submit</button>
								<button class="button1" type="reset" >Reset</button>
							</div>
						</form></center>
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