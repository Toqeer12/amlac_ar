<?php

require('connect.php');
require('session.php');
session_start();
$property_name=$_POST["propteryname"];
$property_type=$_POST['ptype'];
$block_no=$_POST['blockno'];
$ins_amount=$_POST["insamount"];
$annul_lease=$_POST["anuallease"];
$comission_amount=$_POST['comision'];
$comission_type=$_POST["ctype"];
$comission=$_POST["tcom"];
$desc=$_POST["desc"];
$no_rooms=$_POST["room"];
$no_bath=$_POST["broom"];
$elect_meter=$_POST['emeter'];
$water_meter=$_POST["wmeter"];
$develop_proces=$_POST["developprocess"];
$id=$_SESSION['Id'];


$sql= "SELECT * From add_property WHERE id='$property_name'";   
$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
if($result) {
			if(mysql_num_rows($result) > 0) {
				$member3 = mysql_fetch_assoc($result);
				$owner =$member3['owner_id'];
				
			}
}	
$sql= "SELECT * From real_state_unit WHERE property_name='$property_name' And block_no='$block_no'";   
$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
if($result) {
			if(mysql_num_rows($result) > 0) {
			$errflag = true;
			if($errflag) {
			$_SESSION['message'] = 'User Name or Password is invalid!';
				header("location: add_real_stat_unit.php");
				exit();
			}
}
else
{

	
$sql="INSERT INTO `real_state_unit`(`property_name`, `property_type`, `block_no`, `ins_amount`, `annul_lease`, `comission_amount`, `comission_type`, `comission`, `desc-unity`, `no_rooms`, `no_bath`, `elect_meter`, `water_meter`, `develop_proces`, `cid`, `status`,`owner_id`)
 VALUES ('$property_name','$property_type','$block_no','$ins_amount','$annul_lease','$comission_amount','$comission_type','$comission','$desc','$no_rooms','$no_bath','$elect_meter','$water_meter','$develop_proces','$id','Unrented','$owner');";
$result=mysql_query($sql);
 
header("Location:unit_info.php?id=".$property_name."&unit=".$block_no);

}
}


	?>