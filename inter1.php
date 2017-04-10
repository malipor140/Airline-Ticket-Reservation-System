<html>
<head>
</head>
<body>
<?php
session_start();
$a= $_REQUEST["lst"];
$_SESSION['c4']=$a;
$val6 = $_REQUEST["c1"];
$val7 = $_REQUEST["c2"];
$val8 = $_REQUEST["c3"];
$x = $_REQUEST["e1"];
$y = $_REQUEST["e2"];
$_SESSION['d1']=$val6;
$_SESSION['d2']=$val7;
$_SESSION['d3']=$val8;
$_SESSION['d4']=$x;
$_SESSION['d5']=$y;
$_SESSION['s']=$x+$y;
header("location:im.php");
?>

</body>
</html>