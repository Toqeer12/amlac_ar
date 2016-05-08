<?php
include 'connect.php';
$rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {
	$sql = "DELETE FROM `jobtitle` where Id='" . $_POST["users"][$i] . "'";
	$result=mysql_query($sql); 
}
	if($result)
	{
		header("Location:job_title.php");
	}
?>