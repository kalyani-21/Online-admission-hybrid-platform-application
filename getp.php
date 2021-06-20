<?php
header('Access-Control-Allow-Origin: *');
$con=mysqli_connect("localhost","root","","dbionic2");
$q=mysqli_query($con,"select * from tbladmission where status=1 and userid=".$_GET["sid"]);
$r=mysqli_fetch_array($q);
echo $r["fees"];
?>