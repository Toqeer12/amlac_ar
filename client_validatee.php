<?php
require('connect.php');
session_start();

 if($_GET['id']=='778')
{
 
	$varstatus     = $_POST['rowstat'];
	$varId 		   = $_POST['rowId'];
	$sqlupdate="UPDATE `notify_user` SET  `status`='$varstatus' WHERE `id`='$varId'";
    $result3=mysql_query($sqlupdate);
	if($result3)
	{
	$data = array('id' => "0");
	header('Content-Type: application/json');
	echo json_encode($data);
	}
}


?>