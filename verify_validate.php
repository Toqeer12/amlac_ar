<?php
session_start();
require('connect.php');
$var=$_POST['verify'];
$fname=$_SESSION["user_name"];
$contact=$_SESSION["tel_num"];
$cname=$_SESSION["comp_name"];
$user=$_SESSION["user_email"];
$country='Pakistan';
$sql= "SELECT * From verification Where verification='$var'";   
$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
if($result) {
			if(mysql_num_rows($result) > 0) {
			//Login Successful
$sql="INSERT INTO `registration`(`FullName`, `Email`, `ComName`, `Tele`, `Country`, `Password`) VALUES 
('$fname','$user','$cname','$contact','$country','$var');";
$result=mysql_query($sql);

header("Location:login.php");
unset($_SESSION["user_name"]);
unset($_SESSION["tel_num"]);
unset($_SESSION["comp_name"]);
unset($_SESSION["user_email"]);


exit();

}
else
{
echo 'fail';
exit();
}
}

?>