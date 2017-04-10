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
			if($u=="admin@gmail.com" & $p=="admin")
			{
				header("location:admin.php");
			}
			else
		{
		header("location:index.php");
		}
		
		}
		else
		{
			header("location:reg.html");
			}
	
?>
</body>
</html>
