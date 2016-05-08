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
            <div class="span4">
                  <div class="control-group">
                      <label class="control-label">Unit Description</label>
                      <div class="controls">
                              <select id="desc" name="desc">
                            <option value="Singal">Singal</option>
                            <option value="Residental Families">Residental Families</option>
                            <option value="Commercial">Commercial</option>
                            </select>
                      </div>
                  </div>
              <div class="control-group">
                      <label class="control-label">No of Bathrooms</label>
                      <div class="controls">
                      <input name="broom"id="broom" type="num"  placeholder="0" Value="" required/>
                      </div>
                  </div>
               <div class="control-group">
                      <label class="control-label">Water Meter Number</label>
                      <div class="controls">
                      <input name="wmeter"id="wmeter" type="num"  placeholder="0" Value="" required/>
                      </div>
                  </div>
              </div>
              <div class="span4">

              <div class="control-group">
                      <label class="control-label">No of Rooms</label>
                      <div class="controls">
                      <input name="room"id="room" type="num"  placeholder="0" Value="" required/>
                      </div>
                  </div>
                           <div class="control-group">
                      <label class="control-label">Electricity Meter Number</label>
                      <div class="controls">
                      <input name="emeter"id="emeter" type="num"  placeholder="0" Value="" required/>
                      </div>
                  </div>

                                    <div class="control-group">
                      <label class="control-label">Finishing Status</label>
                      <div class="controls">
                              <select id="developprocess" name="developprocess">
                            <option value="Standard">Standard</option>
                            <option value="Conditioned">Conditioned</option>
                            <option value="Conditioned and furnished">Conditioned and furnished</option>
                            </select>
                      </div>
                  </div>
               
                </div>
                
                   
             </div>    
                 <strong><a onClick="return  empty()">Basic Details</a></strong><br />