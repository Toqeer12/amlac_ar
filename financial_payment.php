<?php
session_start();
 
  if($_SESSION['exp']=='invalid'){

 header("location:login.php");
unset($_SESSION['user']);
unset($_SESSION['company']);
unset($_SESSION['Id']);
unset($_SESSION['fulname']);

}

?>
            
         
         
            <div class="row-fluid">
               <div class="span6">
<label class="control-label">Financial Payments</label>
                  <div class="widget">
                     <div class="widget-body">
                        <table class="table table-hover">
                           <thead>
                              <tr>
                              
                                 <th>Payment</th>
                                 <th>Amount</th>
                                 <th class="hidden-phone">Date</th>
                                 <th>Delete</th>
                                
                              </tr>
                           </thead>
                           <tbody>
<?php 
		
require('connect.php');
$vardur =$_GET['dur'];
$vardate = $_GET['startdate'];
$vartotalpayment = $_GET['totalpayment'];
$varfinalpayment = $_GET['finalpayment'];
$mon=$_GET['mon'];
$unit=$_GET['unit'];
$proptery=$_GET['propertyname'];
		   $sql= "SELECT * From add_property WHERE id='$proptery'";   
$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

	if($result) {
				if(mysql_num_rows($result) > 0)
				 {
					 
						$member = mysql_fetch_assoc($result);
				 		$owner=$member['owner_id'];
				 }

                for($i=0; $i<$vardur; $i++)
                {

                  echo "<tr>";
                  echo "<td>Payment".$i."</td>";
                  echo "<td>" .$varfinalpayment. "</td>";
                  echo "<td>" .$vardate. "</td>";
                  echo "<td>Delete</td>";  
                  
                  $newdate = strtotime ( '+'. $mon .'month' , strtotime ( $vardate ) ) ;
                  $vardate = date ( 'Y-m-j' , $newdate );

                  echo "</tr>";
                  
                    $sql2="INSERT INTO `finaical`(`payment`, `Amount`, `datee`, `owner`, `propertyid`, `status`,`amount_paid`,`unit`) VALUES ('$i','$varfinalpayment','$vardate','$owner','$proptery','unpaid','0','$unit');";
                      $result=mysql_query($sql2);
                  
                }       
   }
  

 
?>    
                                    </tbody>
 
                                   </table>


                     </div>
                  </div>
<label class="control-label">Lease Amount : <Strong><?php echo $vartotalpayment.'  '; ?>AED/-</Strong></label>
<input id="paym" nam="paym" type="hidden" value="<?php echo $vartotalpayment;?>"/>
               </div>

           
            </div>
           