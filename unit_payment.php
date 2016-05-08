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
<label class="control-label">Choose Units</label>
                  <div class="widget">
                     <div class="widget-body">
                        <table class="table table-hover">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>Unit Number</th>
                       
                              </tr>
                           </thead>
                           <tbody>
                                    		<?php 
		
require('connect.php');

		$sql = ("SELECT * FROM rent_property where renter='".$_GET['id']."' ")or die(mysql_error());
	    $result=mysql_query($sql); 
        if($result){
        while($row = mysql_fetch_assoc($result)) {
                                                                     $sql= "SELECT * From real_state_unit Where property_name='".$row['property_name']."'";   
                                                                     $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());
                                                                     if($result)
                                                                     {
                                                                
                                                                        if(mysql_num_rows($result) > 0) 
                                                                        {
                                                                            $member = mysql_fetch_assoc($result);
                                                                            $dataname=$member['block_no'];
        
  echo "<tr>";
  ?>
  <td>
  <input type="checkbox" id="<?php echo 'users'.$row['id'];?>" data-id="<?php echo $member['id']; ?>" data-unit="<?php echo $member['block_no'];?>" data-anual-lease="<?php echo $member['annul_lease']; ?>" name="users<" value="<?php echo $member['id']; ?>" onClick="payment(this)">
  </td>
  <?php
  
  echo "<td id='unit'>" . $member['block_no'] . "</td>";

  echo "</tr>";
                                                                        }
                                                                    }
                                                                 }
 ?>
      
                                    </tbody>
                                    </table>

<?php
}?>
                     </div>
                  </div>

               </div>

           
            </div>
           