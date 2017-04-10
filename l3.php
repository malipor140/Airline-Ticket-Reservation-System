<html>
<head>
</head>

<body>
<?php
	session_start();
	$u=$_REQUEST["uid"];
	$_SESSION['uid']=$u;

	$p=$_REQUEST["pwd"];
	$_SESSION['pwd']=$p;

	$con=mysqli_connect("localhost","root","","airlines");
	$res=mysqli_query($con,"select * from l1 where Email_ID='$u' and Password='$p' ");
	$value=mysqli_fetch_array($res);
	if(is_array($value))
		{
			if($u=="abc@gmail.com" & $p=="abc")
			{
				header("location:admin.php");
			}
		
	else
		{
			header("location:im.php");
		}
		}
		else
		{
			header("location:reg1.html");
			}
?>
</body>
</html>
