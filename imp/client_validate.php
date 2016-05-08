<?php

require('connect.php');

session_start();
if($_GET['id']=='1')
{
$realname=$_POST["realname"];
$emid=$_POST['idnum'];
$email=$_POST["email"];
$contact=$_POST["mobile"];
$phone=$_POST['phone'];
$address=$_POST["address"];
$passport=$_POST["passport"];
$pbox=$_POST["pbox"];
$title=$_POST["jtitle"];
$fax=$_POST["fax"];
$id=$_SESSION['Id'];

$sql= "SELECT * From clients WHERE Email='$user'";   
$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
	if($result) {
				if(mysql_num_rows($result) > 0)
				 {
					$errflag = true;
					if($errflag) {
					$_SESSION['message'] = 'User Name or Password is invalid!';
						header("location: user_reg_form.php");
						exit();
					}
				 }
				else
				{
				$sql="INSERT INTO `clients`(`real_name`, `emi_id`, `mob_no`, `phone_no`, `email`, `passport`, `pbox`, `resi_address`, `job_title`, `fax`,`cid`,`account_no`, `bank_name`, `nation`, `c_name`, `notes`, `company_act`, `sponsor`, `vendor`)
				 VALUES ('$realname','$emid','$contact','$phone','$email','$passport','$pbox','$address','$title','$fax','$id','','','','','','','','');";
				$result=mysql_query($sql);
				 $id=mysql_insert_id();
				$data = array('id' => $id, 'text' => $realname);
				header('Content-Type: application/json');
				echo json_encode($data);
				}
				
				
	}
}
else if($_GET['id']=='11')
{
	
	
	
$realname=$_POST["realname"];
$emid=$_POST['idnum'];
$email=$_POST["email"];
$contact=$_POST["mobile"];
$phone=$_POST['phone'];
$address=$_POST["address"];
$passport=$_POST["passport"];
$pbox=$_POST["pbox"];
$title=$_POST["jtitle"];
$fax=$_POST["fax"];
$id=$_SESSION['Id'];
$account_no=$_POST['accountno'];
$bank=$_POST['bank'];
$nation=$_POST['nationality'];
$companyname=$_POST['cname'];
$notes=$_POST['notes'];
$companyact=$_POST['cactivity'];
$sponsor=$_POST['sponsor'];
$vender=$_POST['vender'];
$sql= "SELECT * From clients WHERE Email='$user'";   
$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
	if($result) {
				if(mysql_num_rows($result) > 0)
				 {
					$errflag = true;
					if($errflag) {
					$_SESSION['message'] = 'User Name or Password is invalid!';
						header("location: user_reg_form.php");
						exit();
					}
				 }
				else
				{
				$sql="INSERT INTO `clients`(`real_name`, `emi_id`, `mob_no`, `phone_no`, `email`, `passport`, `pbox`, `resi_address`, `job_title`, `fax`,`cid`,`account_no`, `bank_name`, `nation`, `c_name`, `notes`, `company_act`, `sponsor`, `vendor`)
				 VALUES ('$realname','$emid','$contact','$phone','$email','$passport','$pbox','$address','$title','$fax','$id','$account_no','$bank','$nation','$companyname','$notes','$companyact','$sponsor','$vender');";
				$result=mysql_query($sql);
				 $id=mysql_insert_id();
				$data = array('id' => $id, 'text' => $realname);
				header('Content-Type: application/json');
				echo json_encode($data);
				}
				
				
	}
	
}
else if($_GET['id']=='101')
{
	
	
$updateid=$_POST["updateid"];
$realname=$_POST["realname"];
$emid=$_POST['idnum'];
$email=$_POST["email"];
$contact=$_POST["mobile"];
$phone=$_POST['phone'];
$address=$_POST["address"];
$passport=$_POST["passport"];
$pbox=$_POST["pbox"];
$title=$_POST["jtitle"];
$fax=$_POST["fax"];
$id=$_SESSION['Id'];
$account_no=$_POST['accountno'];
$bank=$_POST['bank'];
$nation=$_POST['nationality'];
$companyname=$_POST['cname'];
$notes=$_POST['notes'];
$companyact=$_POST['cactivity'];
$sponsor=$_POST['sponsor'];
$vender=$_POST['vender'];

				$sql="UPDATE `clients` SET `real_name`='$realname',`emi_id`='$emid',`mob_no`='$contact',`phone_no`='$phone',`email`='$email',`passport`='$passport',`pbox`='$pbox',`resi_address`='$address',`job_title`='$title',
                `fax`='$fax',`cid`='$id',`account_no`='$account_no',`bank_name`='$bank',`nation`='$nation',`c_name`='$companyname',`notes`='$notes',`company_act`='$companyact',`sponsor`='$sponsor',`vendor`='$vender'
                 WHERE id = '$updateid'";
				$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
				 
				$data = array('id' => $updateid);
				header('Content-Type: application/json');
				echo json_encode($data);
				
				
	}
	

else if($_GET['id']=='2')
{
	header("Location:user_reg_form.php");
}
	else if ($_GET['id']=='3')
	{	
		$title=$_POST['scripttitle'];
		$sql2="INSERT INTO `script`(`script_title`, `script`, `cid`) VALUES ('$title','".$_POST['script']."','".$_SESSION['Id']."');";	
			 $result=mysql_query($sql2);
			 $id=mysql_insert_id();
					$data = array('id' => $id, 'text' => $title);
					header('Content-Type: application/json');
					echo json_encode($data);
	}
	else if($_GET['id']=='5')
	{
		$var=$_POST['proptypenew'];
		$sql2="INSERT INTO `property_type`(`prop_type`) VALUES ('".$_POST['proptypenew']."');";
		$result=mysql_query($sql2);
		$id=mysql_insert_id();
		$data = array('id' => $id, 'text' => $var);
		header('Content-Type: application/json');
		echo json_encode($data);
	}
else if($_GET['id']=='7')
{
    global $ownerprop;
    $property_name = $_POST['propertyname'];
		  $sql3= "SELECT * From rent_property WHERE property_name='$property_name'";   
          $result3=mysql_query($sql3)or  die('Invalid query: ' . mysql_error());
	      if($result3)
		   {
				if(mysql_num_rows($result3) > 0)
				 {
					 
						$member3 = mysql_fetch_assoc($result3);
				 		$ownerprop=$member3['property_name'];
                         $proprenter=$member3['renter'];
				 }
	       }
	 	 $duration = $_POST['duration'];
		$startdate = $_POST['startdate'];
			$month = $_POST['month'];
	      $payment = $_POST['payment'];
  	  $endcontract = $_POST['endcontract'];
  $script_contract = $_POST['script_contract'];
   $write_contract = $_POST['write_contract'];
		   $renter = $_POST['renter'];
		   $cid	   = $_SESSION['Id'];
		   
		   $sql= "SELECT * From add_property WHERE id='$property_name'";   
		   $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
		   if($result)
		    {
				if(mysql_num_rows($result) > 0)
				 { 
					$member = mysql_fetch_assoc($result);
				 	$owner=$member['owner_id'];
				 }
			}

		   
		$sql2= "SELECT * From real_state_unit WHERE property_name='$property_name'";   
        $result2=mysql_query($sql2)or  die('Invalid query: ' . mysql_error());
	    if($result2)
		 {
				if(mysql_num_rows($result2) > 0)
				 {
					 
						$member2 = mysql_fetch_assoc($result2);
				 		$block_no=$member2['block_no'];
				 }
	     }
		 if($renter==$owner)
	 		{
		    $data = array('cid' => "0", 'ownerid' => "0", 'property' => "Owner and Renter Cannot be Same");
	   	    header('Content-Type: application/json');
			    echo json_encode($data);
		 }
         else if($property_name==$ownerprop)
         {
             	    $data = array('cid' => "40", 'ownerid' => "40", 'property' => "Property is already in lease");
	   	    header('Content-Type: application/json');
			    echo json_encode($data);
         }
		 else
		 {
		$sql2="INSERT INTO `rent_property`(`write_con_dat`, `start_date`, `ending_date`, `property_name`, `renter`, `script`, `duration`, `schudle_month`, `cid`, `owner`, `unit`, `payment`) 
			VALUES ('$write_contract','$startdate','$endcontract','$property_name','$renter','$script_contract','$duration','$month','$cid','$owner','$block_no','$payment');";
			$result2=mysql_query($sql2);
                if($result2)
                {
                    $sqlupdate="UPDATE `real_state_unit` SET `status`='Rented' WHERE `property_name`='$property_name' AND `block_no`='unit'";
                    $result3=mysql_query($sqlupdate);
                    
                    if($result3)
                    {
                          				 $data = array('cid' => "11", 'ownerid' => $owner, 'property' => $property_name);
			                             header('Content-Type: application/json');
			                             echo json_encode($data);
                    }
                    
                }

				
				
		
		 }
		
}
else if ($_GET['id']=='8')
{
$startdate = $_POST['startdate'];
$paymentmethod = $_POST['paymentmethod'];
$amount = $_POST['amount'];
$ownerid = $_POST['ownerid'];
$property = $_POST['property'];
$unit = $_POST['unit'];

 	$sql2="INSERT INTO  `paid_amount`(`paid_amount`, `paid_date`, `owner_id`, `propertyid`, `unpaid`,`unit`)
			VALUES ('$amount','$startdate','$ownerid','$property','nill','$unit');";
			$result=mysql_query($sql2);
			if($result)
			{
						   $sql= "SELECT * From finaical WHERE owner='$ownerid' AND propertyid='$property'  And datee='$startdate' And unit='$unit'";   
							$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

							if($result) {
										if(mysql_num_rows($result) > 0)
										 {
											$member  = mysql_fetch_assoc($result);
											$paid    =  $member['amount_paid'];
											$var     =  $member['Amount'];
										    $varId   =  $member['payment'];
											$final   =  $paid+$amount;
										    $Amount  =  $var-$final;
   
								
											if($Amount==0)
											{   $Amount=0;
												$sqlupdate="UPDATE `finaical` SET `status`='paid',`amount_paid`='$final',`Amount`='$Amount' WHERE owner='$ownerid' AND propertyid='$property' And datee='$startdate'";	
												$result=mysql_query($sqlupdate);
                                                if($result)
                                                {

                                                    $sqlupdate2="UPDATE `paid_amount` SET `unpaid`='$Amount' WHERE owner_id='$ownerid' AND propertyid='$property' And unit='$unit' And paid_date='$startdate' ";	
												    $result2=mysql_query($sqlupdate2);
                                                    if($result2)
                                                    {   
                                                         $data = array('cid' => "1");
			                                             header('Content-Type: application/json');
			                                             echo json_encode($data);
                                                    }

                                                         $data = array('cid' => "1");
			                                             header('Content-Type: application/json');
			                                             echo json_encode($data);
                                                }
                      
											}
											else
                                            
											{	$countsql="Select Count(*) payment from finaical WHERE owner='$ownerid' AND propertyid='$property'";
                                                $results=mysql_query($countsql);
                                                if($results)
                                                {  	if(mysql_num_rows($results) > 0)
									                        	 {
											                        $member  = mysql_fetch_assoc($results);
                                                                      $varg=$varId+1;
                                                 if($varg==$member['payment'])
                                                 {                        $data = array('cid' => "33");
                                                                          header('Content-Type: application/json');
			                                                              echo json_encode($data);
                                                 
                                                 }
                                                 else {

												$sqlupdate="UPDATE `finaical` SET `status`='paid',`amount_paid`='$final',`Amount`='0' WHERE owner='$ownerid' AND propertyid='$property' And datee='$startdate'";	
												$result=mysql_query($sqlupdate);
                                                       if($result)
                                                
                                                       {      
                                                                    $sql= "SELECT * From finaical WHERE owner='$ownerid' AND propertyid='$property'  And  unit='$unit' And payment='$varg'";   
                                                                    $results=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

                                                                    if($results) {
                                                                    if(mysql_num_rows($results) > 0)
                                                                            {
                                                                                $member  = mysql_fetch_assoc($results);
                                                                                $amount  = $member['Amount'];
                                                                                $fyamount = $Amount+$amount; 
                                                                                $sqlupdate5="UPDATE `finaical` SET `Amount`='$fyamount' WHERE owner='$ownerid' AND propertyid='$property' And payment='$varg'";	
                                                                                $resulthis=mysql_query($sqlupdate5);
                                                                                if($resulthis)
                                                                                {
                                                                                    $sqlupdate2="UPDATE `paid_amount` SET `unpaid`='$Amount' WHERE owner_id='$ownerid' AND propertyid='$property' And unit='$unit' And paid_date='$startdate' ";	
                                                                                    $result2=mysql_query($sqlupdate2);
                                                                                    if($result2)
                                                                                    {
                                                                                    $data = array('cid' => "2");
                                                                                    header('Content-Type: application/json');
                                                                                    echo json_encode($data);
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                     }
                                                   }
                                             }      
										   }                 
							             }
			                           }       
                                     }         
                                   
                                 }
else if($_GET['id']=='10')
{
	$sponsname=$_POST['sponsname'];
	$mblnum=$_POST['mobilenum'];
	$personal=$_POST['persnum'];
	 	$sql2="INSERT INTO `sponsor`(`sponsor_name`, `mbl_num`, `personal_id`,`cid`) VALUES ('$sponsname','$mblnum','$personal','".$_SESSION['Id']."');";
			$result=mysql_query($sql2);
			 $id=mysql_insert_id();

			if($result)
			{
				$data = array('id' => $id, 'text' => $sponsname);
				header('Content-Type: application/json');
				echo json_encode($data);
			}
}

else if($_GET['id']=='9')
{
		$bankname=$_POST['bankname'];
		$country=$_POST['country'];
		$city=$_POST['city'];
		$details=$_POST['detail'];
	 	$sql2="INSERT INTO `bank_detail`(`bank_name`, `country`, `city`, `detail`, `cid`) VALUES ('$bankname','$country','$city','$details','".$_SESSION['Id']."');";
			$result=mysql_query($sql2);
			 $id=mysql_insert_id();

			if($result)
			{
				$data = array('id' => $id, 'text' => $bankname);
				header('Content-Type: application/json');
				echo json_encode($data);
			}
}
else if($_GET['id']=='15')
{
	$customer=$_POST['customername'];
	$type=$_POST['type'];
	$vendor=$_POST['vendor'];
	$amount=$_POST['amount'];
	$notes=$_POST['notes'];
	$property=$_POST['property'];
	$owner=$_POST['owner'];
	$vardate=date("Y-m-d");
		 	$sql2="INSERT INTO `service_bill`(`Cname`, `type`, `vendor`, `amount`, `notes`, `property`, `owner`,`datee`) 
			VALUES ('$customer','$type','$vendor','$amount','$notes','$property','$owner','$vardate');";
			$result=mysql_query($sql2);
			 $id=mysql_insert_id();

			if($result)
			{
				$data = array('ownerid' => $owner, 'property' => $property);
				header('Content-Type: application/json');
				echo json_encode($data);
			}
}

else if($_GET['id']=='20')
{
	$owner    = $_POST['owner'];
	$propname = $_POST['propname'];
	$unitt    = $_POST['unitt'];
	$type     = $_POST['type'];
	$vendor   = $_POST['vendor'];
	$bill     = $_POST['bill'];
	$amount   = $_POST['amount'];
	$notes    = $_POST['notes'];
	$datee    = $_POST['datee'];
	$property = $_POST['property'];
	$vardate  = date("Y-m-d");
		 	$sql2="INSERT INTO `property_expense`(`owner`, `propname`, `unitt`, `type`, `vendor`, `bill`, `amount`, `notes`, `datee`, `property`, `vardate`) 
			VALUES ('$owner','$propname','$unitt','$type','$vendor','$bill','$amount','$notes','$datee','$property','$vardate');";
			$result=mysql_query($sql2);
			 $id=mysql_insert_id();

			if($result)
			{
				$data = array('text' => "success");
				header('Content-Type: application/json');
				echo json_encode($data);
			}
}
else if($_GET['id']=='109')
{
    $delId = $_POST['deleteId'];

            
           $sql= "SELECT * From rent_property WHERE renter='$delId'";   
		   $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
		   if($result)
		    {
				if(mysql_num_rows($result) > 0)
				 { 
					$member = mysql_fetch_assoc($result);
				$data = array('delid' => "0");
				header('Content-Type: application/json');
				echo json_encode($data);
				 }
                 else {
                     $sqldelete="DELETE FROM `clients` WHERE id='$delId'";
                     $result=mysql_query($sqldelete)or  die('Invalid query: ' . mysql_error());
                     if($result)
                     {
                        $data = array('delid' => "1");
                        header('Content-Type: application/json');
                        echo json_encode($data); 
                     }

                 }
			}
}
else
{
	header("Location:add_lease.php");	
}



	?>