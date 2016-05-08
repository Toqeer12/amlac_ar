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
            
            
              <?php $var=$_GET['id'];?>
               <div class="control-group">
                      <label class="control-label">Create Payments</label>
                      </div>
              <div class="control-group">
              
                      <label class="control-label">Schedule payments every</label>
                      <div class="controls"> 
                        <input name="month"id="month" pattern="[0-9]+"   type="num" placeholder="Enter Number of Month" required/>
                        <input name="un"id="un" type="hidden" value="<?php echo $_GET['unitid'] ?>" />
                        <input name="desig" type="image" src="img/month.jpg" placeholder="Owner" required/>
                         <input name="insert" type="button"  data-unit="<?php echo $_GET['unitid']; ?>"data-id="<?php echo $var;?>"class="btn btn-primary" value="Submit" onClick="paymentmethod(this)"/>
                      </div>
                  </div>                                              