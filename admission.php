<?php
header('Access-Control-Allow-Origin: *');
$con=mysqli_connect("localhost","root","","dbionic2");


$q=mysqli_query($con,"insert into tbladmission(sfname,smname,slname,ffname,fmname,flname,mfname,mmname,mlname,dname,dyear,gender,pin,address,dob,lcity,lstate,lpin,laddress,city,state,smobile,pmobile,semail,fpaid,pdate,rno,ctyle,year1,type,nyear,search,nexam,sno,spattern,credits,f1,f2,userid)values('".$_GET["sfname"]."','".$_GET["smname"]."','".$_GET["slname"]."','".$_GET["ffname"]."','".$_GET["fmname"]."','".$_GET["flname"]."','".$_GET["mfname"]."','".$_GET["mmname"]."','".$_GET["mlname"]."','".$_GET["dept"]."','".$_GET["year"]."','".$_GET["rb"]."','".$_GET["pin"]."','".$_GET["address"]."','".$_GET["dob"]."','".$_GET["lcity"]."','".$_GET["lstate"]."','".$_GET["lpin"]."','".$_GET["laddress"]."','".$_GET["city"]."','".$_GET["state"]."','".$_GET["smobile"]."','".$_GET["pmobile"]."','".$_GET["semail"]."','".$_GET["fpaid"]."','".$_GET["pdate"]."','".$_GET["rno"]."','".$_GET["ctyle"]."','".$_GET["year1"]."','".$_GET["type"]."','".$_GET["nyear"]."','".$_GET["search"]."','".$_GET["nexam"]."','".$_GET["sno"]."','".$_GET["spattern"]."','".$_GET["credits"]."','".$_GET["f1"]."','".$_GET["f2"]."','".$_GET["userid"]."')");

if($q==1)
{
	echo $last_id;
}
else
{
	echo "0";
}
?>
