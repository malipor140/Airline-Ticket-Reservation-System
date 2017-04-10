<html>
<head>
</head>

<body>
<?php
	$m=$_REQUEST["n1"];
	$n=$_REQUEST["n2"];
	$o=$_REQUEST["e1"];
	$p=$_REQUEST["p1"];
	$q=$_REQUEST["ph"];
	$r=$_REQUEST["dob"];
	$con=mysqli_connect("localhost","root","","airlines");
	$res=mysqli_query($con,"select * from l1 where Email_ID='$o' and Password='$p' ");
	$value=mysqli_fetch_array($res);
	if(is_array($value))
		{
		echo "<script language='javascript'> alert('You are already registered.Please Login')</script>";
		include("login.php");
		}
	else
		{
		mysqli_query($con,"insert into l1 values('$m','$n','$o','$p','$q','$r')");
		header("location:login.php");
		}
			
		
?>
</body>
</html>
