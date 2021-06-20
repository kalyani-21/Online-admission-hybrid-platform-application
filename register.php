<?php
header('Access-Control-Allow-Origin: *');
$con=mysqli_connect("localhost","root","","dbionic2");
$pattern = "/^[a-z]*[0-9]*@[a-z]*[0-9]*\.[a-z]{2,3}$/";
$pattern2 = "/^[0-9]{10}$/";
if($_GET["name"]==""||$_GET["email"]==""||$_GET["pass"]==""||$_GET["aadhar"]=="")
{
	echo "0";
}
else if(!preg_match($pattern, $_GET["email"]))
{
echo "0";
}
else if(!preg_match($pattern2, $_GET["m1"]))
{
echo "0";
}
else
{
	$ppass=sha1($_GET["pass"]);
$q=mysqli_query($con,"insert into tblstud(name,email,pass,m1,rno,aadhar)values('".$_GET["name"]."','".$_GET["email"]."','$ppass','".$_GET["m1"]."','".$_GET["rno"]."','".$_GET["aadhar"]."')");
if($q==1)
{
	echo "1";
}
else
{
	echo "0";
}
}

?>