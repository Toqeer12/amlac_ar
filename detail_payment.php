
            <?php 
            
            
 session_start();            
  if($_SESSION['exp']=='invalid'){

 header("location:login.php");
unset($_SESSION['user']);
unset($_SESSION['company']);
unset($_SESSION['Id']);
unset($_SESSION['fulname']);

}
              require('connect.php');
                    $var        = $_GET['unit'];
                    $ownerid    = $_GET['ownerid'];
                    $propertyid = $_GET['propertyid'];
                    $sql= "SELECT * From finaical WHERE owner='$ownerid' AND propertyid='$propertyid' And unit='$var' And status='unpaid'";   
	                $result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

		if($result) 
        {
			 if(mysql_num_rows($result) > 0)
				 {
                    $member  = mysql_fetch_assoc($result);
            ?>
            <div class="row-fluid">
               <div class="span6">
              
                                   
                                          <div class="widget-body">
                                              <div class="control-group">
                                              <label class="control-label">Due Date</label>
                                              <div class="controls">
                                              <input name="duedate"id="duedate"  type="date" value="<?php echo $member['datee'];?>"   readonly/>
                                              </div>
                                          </div>
                                          <div class="control-group">
                                              <label class="control-label">Payable Amount</label>
                                              <div class="controls">
                                              <input name="actualpayment"id="actualpayment"  type="text" value="<?php echo $member['Amount'];?>"   readonly/>
                                              </div>
                                          </div>
                                          <div class="control-group">
                                              <label class="control-label">Payment Method</label>
                                              <div class="controls">
                                             <select name="paymethod" id="paymethod">
                                              <option value="0">Cash</option>
                                              <option value="1">Cheque</option>
                                              </select>
                                     		 </div>
                                          </div>
                                          <div class="control-group">
                                              <label class="control-label">Amount</label>
                                              <div class="controls">
                                              <input name="amount"id="amount" pattern="[0-9]+" type="num" placeholder="Enter Amount to Paid"  required/>
                                              </div>
                                          </div>
                                          <div class="control-group">
                                              <label class="control-label">Statment</label>
                                              <div class="controls">
                                              <textarea rows="4" cols="50" id="statement"></textarea>
                                              </div>
                                          </div>
                                                          <input name="owner" id="owner" type="hidden" value="<?php echo $ownerid?>"  required/>                   
                                                                             <input name="property" id="property" type="hidden" value="<?php echo $propertyid?>"  required/>

                                                                             
                                                <?php
                 }
                 
                 else {
                     ?>
                          <div class="control-group">
                                              <label class="control-label" style="color:RED">Lease Payment are Clear</label>
                                            
                                          </div>
                     <?php
                 }
        }
      
                                                ?>                             
                                                                             
                                                                             
                                                         </div>
                                 

               </div>
       
         </div>