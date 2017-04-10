<html>
<head>
</head>

<body>
<?php
	$a1=$_REQUEST["f1"];
	$a2=$_REQUEST["f2"];
	$a3=$_REQUEST["f3"];
	$a4=$_REQUEST["f4"];
	$a5=$_REQUEST["f5"];
	$a6=$_REQUEST["f6"];
	$a7=$_REQUEST["f7"];
	$a8=$_REQUEST["f8"];
	$a9=$_REQUEST["f9"];
	$a10=$_REQUEST["f10"];
	$con=mysqli_connect("localhost","root","","airlines");
	mysqli_query($con,"insert into aircraft values('$a1','$a2','$a3','$a4','$a5','$a6','$a7',$a8,'$a9',$a10)");
	header("location:admin.php");
		
?>
</body>
</html>
