<html>
<head>
</head>
<body><br><br><center><div style="width:550px;"><table width="100%" border="1" >
<tr><td colspan="2"><img src="images/logo12.png"></td></tr>
<?php
session_start();
$val = $_SESSION['v'];
$val1 = $_SESSION['v1'];
$val2 = $_SESSION['v2'];
$val3 = $_SESSION['v3'];
$val4 = $_SESSION['v4'];
$val5 = $_SESSION['v5'];
$val6 = $_SESSION['d1'];
$val7 = $_SESSION['d2'];
$val8 = $_SESSION['d3'];
$val9 = $_SESSION['p1'];
$val10= $_SESSION['uid'];
$val11= $_SESSION['pwd'];
$val12= $_SESSION['s'];
echo"<tr><th>Flight No</th>";
echo "<td>".$val."</td></tr>";
echo"<tr><th>Flight Name</th>";
echo "<td>".$val1."</td></tr>";
echo"<tr><th>From</th>";
echo "<td>".$val2."</td></tr>";
echo"<tr><th>Destination</th>";
echo "<td>".$val3."</td></tr>";
echo"<tr><th>Arrival Time</th>";
echo "<td>".$val4."</td></tr>";
echo"<tr><th>Departure Time</th>";
echo "<td>".$val5."</td></tr>";
echo "<tr><th>Date</th>";
echo "<td>".$val6;
echo "/";
echo $val7;
echo "/";
echo $val8."</td></tr>";
echo"<tr><th>Total Amount</th>";
echo "<td>".$val9."</td></tr>";

$m=$_REQUEST["a1"];
$n=$_REQUEST["a2"];
$con=mysqli_connect("localhost","root","","airlines");
$res=mysqli_query($con,"select * from l1 where Email_ID='$val10' And Password='$val11' ");
while($v=mysqli_fetch_array($res))
{$fn=$v["F_Name"];
$ln=$v["L_Name"];
$ph=$v["Ph.No"];}
echo"<tr><th>Name</th>";
echo "<td>".$fn."</td></tr>";
echo"<tr><th>Phone No.</th>";
echo "<td>".$ph."</td></tr>";
mysqli_query($con,"insert into bookings values('','$fn','$ln','$val10','$val11','$ph','$val6','$val7','$val8','$val','$val1','$m','$n','$val9','$val12')");

?></table><br><br><FORM>
<button class="button1" type="submit" autofocus formaction="index.php">Go Back Home</button>
<button class="button1" type="submit" onClick="window.print()">Print</button>
</FORM></div></center>

</body>
</html>