<?php
header('Access-Control-Allow-Origin: *');

$con=mysqli_connect("localhost","root","","dbionic2");
$ppass=sha1($_GET["pass"]);
$q=mysqli_query($con,"select * from tblstud where email='".$_GET["email"]."' and pass='$ppass'");
if(mysqli_num_rows($q)>0)
{

	$q1=mysqli_query($con,"select * from tblstud where email='".$_GET["email"]."'");
	if($r1=mysqli_fetch_array($q1))
	{
		echo $r1["sid"];
	}
}
else
{
	echo "0";
}
?>