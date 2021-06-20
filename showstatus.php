<?php
header('Access-Control-Allow-Origin: *');

$con=mysqli_connect("localhost","root","","dbionic2");
$q=mysqli_query($con,"select * from tbladmission where userid=".$_GET["id"]);
$r=mysqli_fetch_array($q);
echo $r["status"];



?>