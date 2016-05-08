<?php

require('connect.php');

$jtitle=$_POST['jtitle'];
$jdesc=$_POST['jdesc'];
$note=$_POST['note'];
$cid=$_SESSION['Id'];
$sql="INSERT INTO `JobTitle`(`JobTitle`, `JobDesc`, `Jnote`, `c_id`) VALUES ('$jtitle','$jdesc','$note','$cid');";
$result=mysql_query($sql);
if($result)
{
	header("Location:job_title.php");
		
	
}
else
{
	header("Location:add_job.php");
}


?>