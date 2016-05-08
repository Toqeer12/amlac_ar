<?php 
require('cd_db.php'); 
mysql_query("SET NAMES utf8");

$var= $_SESSION['type'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Account Details</title>

  <link href="css2/style.css" rel="stylesheet" />

   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../dist/css/bootstrap-rtl.min.css" rel="stylesheet">
     <link href="../../dist/css/fontgoogle.css" rel="stylesheet">
     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    
</head>

<body>

    <div class="container">
   <?php 
    if($var=='admin')

{
 include("head_menu.php");
}
else
{
   include("head_finance.php");
}


  ?>
      <div class="jumbotron">
                       <div class="row-fluid">
                   <div class="span12">
                       <!-- BEGIN CUSTOM BUTTONS WITH ICONS PORTLET-->
                       <h4>Accounts Info</h4>
                       <div class="row-fluid">
                           <a href="finance.php?fin=1" class="icon-btn span2">
                               <i class="icon-group"></i>
                               <div>Daily Delivery</div>
                           </a>
                           <a href="finance.php?fin=6" class="icon-btn span2">
                               <i class="icon-barcode"></i>
                               <div>Daily Driver Operation</div>
                           </a>
                           <a href="finance.php?fin=3" class="icon-btn span2">
                               <i class="icon-bar-chart"></i>
                               <div>Suppliers Payment</div>
                           </a>
                                 <a href="finance.php?fin=4" class="icon-btn span2">
                               <i class="icon-bar-chart"></i>
                               <div>Payments</div>
                           </a>
                                         <a href="finance.php?fin=5" class="icon-btn span2">
                               <i class="icon-bar-chart"></i>
                               <div>Profit</div>
                           </a>
                           </div>
                           
</div>
</div>
<?php

if($_GET['fin']=='6')
{
?>
     <table class="table table-condensed table-striped table-hover no-margin">
                                    <thead>
                                    <tr>

                                        <td>
                                            Driver Name
                                        </td>
                                        <td >
                                            No Of Delivery
                                        </td>
                                        <td >
                                            Gas
                                        </td>
                                        <td>
                                            Supplier Fee
                             </td>
                                          <td>
                                           Profit
                             </td>
                                          <td>
                                            Total
                             </td>
                                          <td>
                                            Cash
                             </td>
                                    <td>
                                            Bank
                             </td>
                                    </tr>
                                    </thead>
                                    <tbody>
      
      
                                    </tbody>
                               
<tbody>
                                                <?php 
    

    $sql = "SELECT * FROM `driver_account`";
  $result=mysql_query($sql); 
while($row = mysql_fetch_assoc($result)) {
  echo "<tr>";
  ?>
  <?php
  echo "<td>" . $row['Driver_Name'] . "</td>";
echo "<td>-</td>";
echo "<td>" . $row['gas'] . "</td>";



$sql6 = "SELECT * FROM `delivery` Where  devr_man_id='".$row['dri_id']."'";
 $result6=mysql_query($sql6); 
if($result6)
{

if(mysql_num_rows($result6) > 0)
{
$member = mysql_fetch_assoc($result6);
$var=$member['trader_fee'];
$var5=$member['total_cost'];
 echo "<td>" .$var. "</td>";
$var3=$member['delv_id'];
       $sql3 = "SELECT * FROM `accountant` Where  devl_id='$var3'";
       $result3=mysql_query($sql3); 
if($result3)
{

if(mysql_num_rows($result3) > 0)
{
$member = mysql_fetch_assoc($result3);


 $var2=$member['our_cost'];
  echo "<td>" . $var2. "</td>";
   
  echo "<td>" . $var5. "</td>";
echo "<td>" . $row['cash'] . "</td>";
echo "<td>" . $row['bank'] . "</td>";

}
}
 
}
}
   }

   
  echo "</tr>";


 ?>
      
                                    </tbody>
                              
     </table>
<?php
}

if($_GET['fin']=='1')
{
?>
	   <table class="table table-condensed table-striped table-hover no-margin">
                                    <thead>
                                    <tr>
                                       <td>
                                            Delivery Code
                                        </td>
                                        <td>
                                            Supplier Name
                                        </td>
                                        <td >
                                            From
                                        </td>
                                        <td>
                                            To
                                        </td>
                                              <td>
                                            Area
                                        </td>
                                        <td >
                                            Contact
                                    </td>
                                     <td >
                                            Supplier Fee
                                    </td>
                                         <td >
                                            Delivery Fee
                                    </td>
                                     <td >
                                            Total
                                    </td>
                                         <td >
                                            Driver
                                    </td>
                                    </tr>
                                    </thead>
                                    <tbody>
                   		<?php 
		

		$sql = "SELECT * FROM `delivery`";
	$result=mysql_query($sql); 
while($row = mysql_fetch_assoc($result)) {
  echo "<tr>";
  ?>
  <?php
  echo "<td>" . $row['delv_code'] . "</td>";
   echo "<td>" .$row['trader_name']. "</td>";


      $sql3 = "SELECT * FROM `emirate` Where  id='".$row['emirate']."'";
       $result3=mysql_query($sql3); 
if($result3)
{

if(mysql_num_rows($result3) > 0)
{
$member = mysql_fetch_assoc($result3);

$var=$member['emirates'];
 echo "<td>" . $var. "</td>";
}
}
      $sql3 = "SELECT * FROM `emirate` Where  id='".$row['rcv_emirate']."'";
       $result3=mysql_query($sql3); 
if($result3)
{

if(mysql_num_rows($result3) > 0)
{
$member = mysql_fetch_assoc($result3);

$var2=$member['emirates'];
 echo "<td>" . $var2. "</td>";
}
}
        $sql4 = "SELECT * FROM `areas` Where  id='".$row['rcv_area']."'";
       $result4=mysql_query($sql4); 
if($result4)
{

if(mysql_num_rows($result4) > 0)
{
$member = mysql_fetch_assoc($result4);

$var3=$member['area'];
 echo "<td>" . $var3. "</td>";
}
}
echo "<td>". $row['rcv_mobile'] . "</td>";
echo "<td>" .$row['trader_fee']. "</td>";

// $sql6 = "SELECT * FROM `serivce_classes` Where  id='".$row['serivce_classes_id']."'";
//  $result6=mysql_query($sql6); 
// if($result6)
// {

// if(mysql_num_rows($result6) > 0)
// {
// $member = mysql_fetch_assoc($result6);

// $var3=$member['price'];
//  echo "<td>" . $var3. "</td>";
// }
// }



$sql4 = "SELECT * FROM `accountant` Where devl_id='".$row['delv_id']."'";
       $result4=mysql_query($sql4); 
if($result4)
{

if(mysql_num_rows($result4) > 0)
{
$member = mysql_fetch_assoc($result4);

$var3=$member['our_cost'];
 echo "<td>" . $var3. "</td>";
}
}

echo "<td>". $row['total_cost'] . "</td>";
        $sql5 = "SELECT * FROM `staff` Where  id='".$row['devr_man_id']."'";
       $result5=mysql_query($sql5); 
if($result5)
{

if(mysql_num_rows($result5) > 0)
{
$member = mysql_fetch_assoc($result5);

$var33=$member['name'];
echo "<td>".  $var33 . "</td>";

}
}



		

   }

   
  echo "</tr>";


 ?>
			
                                    </tbody>
                                    </table>

<?php
}
else if($_GET['fin']=='2')
{
	
?>
   <table class="table table-condensed table-striped table-hover no-margin">
                                    <thead>
                                    <tr>

                                        <th style="width:17%">
                                            Sent by
                                        </th>
                                        <th class="hidden-phone" style="width:55%">
                                            Subject
                                        </th>
                                        <th class="right-align-text hidden-phone" style="width:12%">
                                            Labels
                                        </th>
                                        <th class="right-align-text hidden-phone" style="width:12%">
                                            Date
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
              
                                        <td>
                                            Dulal khan
                                        </td>
                                        <td class="hidden-phone">
                                            <strong>
                                                Senior Creative Designer
                                            </strong>
                                            <small class="info-fade">
                                                Vector Lab
                                            </small>
                                        </td>
                                        <td class="right-align-text hidden-phone">
                                                  <span class="label label label-info">
                                                    Read
                                                  </span>
                                        </td>
                                        <td class="right-align-text hidden-phone">
                                            Yesterday
                                        </td>
                                    </tr>
                                    </tbody>
                                    </table>
<?php
}else if($_GET['fin']=='3')
{
	
?>
   <table class="table table-condensed table-striped table-hover no-margin">
                                    <thead>
                                    <tr>

                                        <th>
                                            Supplier Name
                                        </th>
                                        <th >
                                            Code
                                        </th>
                                        <th>
                                            Product Detail
                                        </th>
                                          <th>
                                            Area
                                        </th>
                                        <th>
                                            No of Deliveries
                                        </th>
                                        <th>
                                            Client Sale
                                        </th>
                                        <th>
                                            Profit
                                        </th>
                                        <th>
                                            Mobile
                                        </th>
                                         <th>
                                            Driver Name
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                            <?php 
    

    $sql = "SELECT * FROM `delivery`";
  $result=mysql_query($sql); 
while($row = mysql_fetch_assoc($result)) {
  echo "<tr>";
  ?>
  <?php
  echo "<td>" . $row['trader_name'] . "</td>";

   echo "<td>" . $row['delv_code'] . "</td>";
   echo "<td>" . $row['delv_details'] . "</td>";


         $sql3 = "SELECT * FROM `emirate` Where  id='".$row['emirate']."'";
       $result3=mysql_query($sql3); 
if($result3)
{

if(mysql_num_rows($result3) > 0)
{
$member = mysql_fetch_assoc($result3);

$var2=$member['emirates'];
 echo "<td>" . $var2. "</td>";
}
}
        $sql3 = "SELECT count(*) As count FROM `delivery` Where  trader_email='".$row['trader_email']."'";
       $result3=mysql_query($sql3); 
if($result3)
{

if(mysql_num_rows($result3) > 0)
{
$member = mysql_fetch_assoc($result3);

$var2=$member['count'];
 echo "<td>" . $var2. "</td>";
}
}
echo "<td>" . $row['trader_fee'] . "</td>";
         $sql3 = "SELECT * FROM `accountant` Where devl_id='".$row['delv_id']."'";
       $result3=mysql_query($sql3); 
if($result3)
{

if(mysql_num_rows($result3) > 0)
{
$member = mysql_fetch_assoc($result3);

$var2=$member['our_cost'];
// $var4=$member['total_cost'];
$var3=$var2;
 echo "<td>" . $var3. "</td>";

 

}
}

   echo "<td>" . $row['mobile'] . "</td>";
  $sql5 = "SELECT * FROM `staff` Where  id='".$row['devr_man_id']."'";
       $result5=mysql_query($sql5); 
if($result5)
{

if(mysql_num_rows($result5) > 0)
{
$member = mysql_fetch_assoc($result5);

$var33=$member['name'];
echo "<td>".$var33."</td>";

}
}



   }

   
  echo "</tr>";


 ?>
                                    </tbody>
                                    </table>
<?php
}else if($_GET['fin']=='4')
{
	
?>
   <table class="table table-condensed table-striped table-hover no-margin">
                                    <thead>
                              <tr>

                                        <th style="width:5%">
                                            Area Price
                                        </th>
                                        <th class="hidden-phone" style="width:5%">
                                            Our Cost
                                        </th>
                                         <th class="right-align-text hidden-phone" style="width:5%">
                                            Box Price
                                        </th>
                                        <th class="right-align-text hidden-phone" style="width:5%">
                                            Price Catergry
                                        </th>
                                        <th class="right-align-text hidden-phone" style="width:5%">
                                            Total Cost
                                        </th>
										                  <th class="right-align-text hidden-phone" style="width:5%">
                                            Payment
                                        </th>
												         
                                    </tr>
                                    </thead>
                                    <tbody>
                                    		<?php 
		

		$sql = "SELECT * FROM `accountant`";
	$result=mysql_query($sql); 
while($row = mysql_fetch_assoc($result)) {
  echo "<tr>";
  ?>
  <?php
  echo "<td>" . $row['area_price'] . "</td>";
  echo "<td>" . $row['our_cost'] . "</td>";
  echo "<td>" . $row['box'] . "</td>";
    echo "<td>" . $row['price_cat'] . "</td>";
   echo "<td>" . $row['total_cost'] . "</td>";
	$var=$row['total_cost'] - $row['our_cost']; 
  echo "<td>" . $var . "</td>";
			//Login Successful

			

   }

   
  echo "</tr>";


 ?>
      
                                    </tbody>
                                    </table>
<?php
}else if($_GET['fin']=='5')
{
	
?>
   <table class="table table-condensed table-striped table-hover no-margin">
                                    <thead>
                                    <tr>

                                        <th style="width:5%">
                                            Area Price
                                        </th>
                                        <th class="hidden-phone" style="width:5%">
                                            Our Cost
                                        </th>
                                            <th class="hidden-phone" style="width:5%">
                                            Box Price
                                        </th>
                                        <th class="right-align-text hidden-phone" style="width:5%">
                                            Price Catergry
                                        </th>
                                         <th class="right-align-text hidden-phone" style="width:5%">
                                            Gas Expense
                                        </th>
                                        <th class="right-align-text hidden-phone" style="width:5%">
                                            Total Cost
                                        </th>
										             <th class="right-align-text hidden-phone" style="width:5%">
                                            Payment Method
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                             		<?php 
		

		$sql = "SELECT * FROM `accountant`";
	$result=mysql_query($sql); 
while($row = mysql_fetch_assoc($result)) {
  echo "<tr>";
  ?>
  <?php
  echo "<td>" . $row['area_price'] . "</td>";
  echo "<td>" . $row['our_cost'] . "</td>";
  echo "<td>" . $row['box'] . "</td>";
    echo "<td>" . $row['price_cat'] . "</td>";
    echo "<td>" . $row['Gas_Amount'] . "</td>";
   echo "<td>" . $row['total_cost'] . "</td>";
  // echo "<td>" . $row['payment_method'] . "</td>";

			//Login Successful

			

   }

   
  echo "</tr>";
  
  		$sql2 = "SELECT SUM(our_cost) AS value_sum FROM `accountant`";
	$result=mysql_query($sql2); 
	$row = mysql_fetch_assoc($result); 
$sum = $row['value_sum'];
  echo "<tr>";
  echo "<td>" . ' '. "</td>";
  echo "<td>" .'Total Profit:         '. $sum. "</td>";
    echo "<td>" . ''. "</td>";
   echo "<td>" . '' . "</td>";

  echo "</tr>";

 ?>
                                    </tbody>
                                    </table>
<?php
}?>
</div>
</body>
</html>