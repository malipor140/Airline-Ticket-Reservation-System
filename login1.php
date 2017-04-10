<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
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
function chckfname()
{
var x1 = document.forms["Contact"]["n1"].value;
var letters = /^[A-Za-z]+$/;  
if(x1.match(letters))  
{  
return true;  
}  
else  
{  
alert("Username must have alphabet characters only");  
document.forms["Contact"]["n1"].focus();  
return false;  
} 
} 

function chcklname()
{
var x1 = document.forms["Contact"]["n1"].value;
var x2 = document.forms["Contact"]["n2"].value;
var letters = /^[A-Za-z]+$/;  
if(x2.match(letters))  
{  
return true;  
}  
else  
{  
alert("Username must have alphabet characters only");  
document.forms["Contact"]["n2"].focus();  
return false;  
} 
if(x2.match(x1))
{
alert ("First name and last name cannot be same");
document.forms["Contact"]["n2"].focus();
return false;
}
else
{
return true;
}
} 

function chckemail()
{
var x3 = document.forms["Contact"]["e1"].value;
var atpos = x3.indexOf("@");
    var dotpos = x3.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x3.length) 
	{
        alert("Not a valid e-mail address");
	document.forms["Contact"]["e1"].focus();
		return false;
	}
}

function chckps()
{
var x4 = document.forms["Contact"]["p1"].value;
var passid_len = x4.length;  
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

function chckphno()
{
var x5 = document.forms["Contact"]["ph"].value;
var p = /^\(?([7-9]{1})\)?[-. ]?([0-9]{9})$/;
if(x5.match(p))
			{}
			else
			{
				alert ("Wrong number, Please enter valid number") ;
				document.forms["Contact"]["ph"].focus();
				return false;
			}
			if(x5.length != 10)
			{
					alert ("Number must be of 10 digits!") ;
					document.forms["Contact"]["ph"].focus();
					return false;
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

<body id="page6">
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
                    <article class="col2"><marquee><p style="font-size:18px; color:#F00">**Please Login before booking</p></marquee>
						<h3 class="pad_top1">Login</h3>
						<form id="ContactForm" method="post">
							<div>
								<div  class="wrapper">
									<span>Email:</span>
									<input type="text" class="input" name="uid" >								
								</div>
								<div  class="wrapper">
									<span>Password:</span>
									<input type="password" class="input" name="pwd" >								
								</div>
								<br><button class="button1" type="submit" autofocus formaction="l3.php">Submit</button>
							</div>
						</form>
					</article>
					<article class="col3">
						<h3 class="pad_top1">Register Yourself</h3>
						<form name="Contact" id="ContactForm" >
							<div>
								<div  class="wrapper">
									<span>First Name:</span>
									<input type="text" class="input" name="n1" required="required" onchange="return chckfname()">
								</div>
                                <div  class="wrapper">
									<span>Last Name:</span>
									<input type="text" class="input" name="n2" required="required" onchange="return chcklname()">
								</div>
								<div  class="wrapper">
									<span>Email ID:</span>
									<input type="text" class="input" name="e1" required="required" onchange="return chckemail()">								
								</div>
								<div  class="wrapper">
									<span>Password:</span>
									<input type="password" class="input" name="p1" required="required" onchange="return chckps()">								
								</div>
                                <div  class="wrapper">
									<span>Phone No:</span>
									<input type="text" class="input" name="ph" maxlength="10" required="required" onchange="return chckphno()">								
								</div>
                                <div  class="wrapper">
									<span>Date of Birth:</span>
									<input type="date" class="input" name="dob" max="1996-01-01" required="required">								
								</div>
								<br><button class="button1" type="submit" formaction="l4.php">Submit</button>
								<button class="button1" type="reset" >Reset</button>
							</div>
						</form>
					</article>
                    </div>
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