<?php
header('Access-Control-Allow-Origin: *');
$con=mysqli_connect("localhost","root","","dbionic2");
$q=mysqli_query($con,"insert into tblfeedback(feedback,sid)values('".$_GET["id"]."','".$_GET["sid"]."')");