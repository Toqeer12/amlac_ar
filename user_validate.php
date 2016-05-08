<?php
 
if($_SESSION['exp']=='invalid'){
header("location:login.php");
unset($_SESSION['user']);
unset($_SESSION['company']);
unset($_SESSION['Id']);
unset($_SESSION['fulname']);

}

 
require('connect.php');
session_start();
$cname=$_SESSION["company"];
$cid=$_SESSION['Id'];
$fname=$_POST["user_name"];
$contact=$_POST["tel_num"];
$des=$_POST["desig"];
$user=$_POST["user_email"];
$pass=$_POST["user_password"];

$country='UAE';
$encryp=md5($pass);
// <--
  // $address = $loc;
// $prepAddr = str_replace(' ','+',$address);

// $geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');

// $output= json_decode($geocode);

// $lat = $output->results[0]->geometry->location->lat;
// $long = $output->results[0]->geometry->location->lng;-->
$sql= "SELECT * From new_user WHERE Email='$user'";   
$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
if($result) {
			if(mysql_num_rows($result) > 0) {
		$errflag = true;
			if($errflag) {
			$_SESSION['message'] = 'User Name or Password is invalid!';
				header("location: user_reg_form.php");
				exit();
			}
}
else
{
$sql="INSERT INTO `new_user`(`Name`, `Email`, `Comapny`, `Designation`, `Phone`, `Country`, `c_id`) VALUES
 ('$fname','$user','$cname','$des','$contact','$country','$cid');";
$result=mysql_query($sql);
header("Location:index.php");

}
}


	?>