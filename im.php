<html>
<head>
<script>
function chckacc()
{
var y1 = document.forms["form1"]["a1"].value;
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
document.forms["form1"]["a1"].focus();  
return false; 
}
}


function chckc()
{
var y2 = document.forms["form1"]["a2"].value;
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
document.forms["form1"]["a2"].focus();  
return false; 
}

}
</script>
</head>
<body>
<form name="form1" method="post">
<center>
<table width=""><tr><th colspan="4"><h2><center>Payment Options</center></h2></th></tr>
<tr><td><input type="radio" name="q1"></td><td>Credit Card</td><td><input type="radio" name="q1" checked></td><td>Debit Card</td></tr>
<tr><td><input type="radio" name="q2"></td><td><img src="images/Visa.jpg"></td><td><input type="radio" name="q2" checked></td><td><img src="images/master.jpg"></td></tr>
<tr><th colspan="2">Account No.</th><td colspan="2"><input type="text" maxlength="16" name="a1" required="required" onchange="return chckacc()"></td></tr>
<tr><th colspan="2">Code</th><td colspan="2"><input type="password" maxlength="4" name="a2" required="required" onchange="return chckc()"></td></tr>
<?php
session_start();
$a= $_SESSION['c4'];
$val = $_SESSION['v'];
$val1 = $_SESSION['v1'];
$val2 = $_SESSION['v2'];
$val3 = $_SESSION['v3'];
$val4 = $_SESSION['v4'];
$val5 = $_SESSION['v5'];
$val6 = $_SESSION['d1'];
$val7 = $_SESSION['d2'];
$val8 = $_SESSION['d3'];


if($a=="Economy")
{
	$con=mysqli_connect("localhost","root","","airlines");
	$res=mysqli_query($con,"select Economy_Fare from aircraft where Flight_No = '$val'");
	while($value=mysqli_fetch_array($res))
	{
			$x = $_SESSION['d4'];
			$y = $_SESSION['d5'];
			$cal=$x*$value["Economy_Fare"]+$y*$value["Economy_Fare"];
			echo "<tr><th colspan='2'>Total Amount:</th>";
			echo "<td colspan='2'>".$cal."</td></tr>";
			$_SESSION['p1']=$cal;
	}
	}
else
{
	$con=mysqli_connect("localhost","root","","airlines");
	$res=mysqli_query($con,"select Business_Fare from aircraft where Flight_No = '$val'");
	while($value=mysqli_fetch_array($res))
	{
		$x = $_SESSION['d4'];
		$y = $_SESSION['d5'];
		$cal=$x*$value["Business_Fare"]+$y*$value["Business_Fare"];
		echo "<tr><th colspan='2'>Total Amount:</th>";
		echo "<td colspan='2'>".$cal."</td></tr>";
		$_SESSION['p1']=$cal;
	}
	}

?><br><br><tr><td colspan="4"><center>
<button type="submit" formaction="reciept.php">Receipt</button>
</center></form></td></tr></table></center>
</body>
</html>