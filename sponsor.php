     
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
                        <div class="widget-body">
   
              <div class="span4">
                 <strong>Add New Sponsor</strong><br />

                  <div class="control-group">
                      <label class="control-label" style="float: left; width: 200px;">Sponsor Name</label>
                      <div class="controls">
                        <input name="realname"id="realname" pattern="[a-zA-Z\s]+" type="text" placeholder="example@gmail.com" required/>
                      </div>
                  </div>
                    <div class="control-group">
                      <label class="control-label" style="float: left; width: 200px;">Mobile Number</label>
                      <div class="controls">
                        <input name="realname"id="realname" type="tel" pattern="^\d{3}\d{6}\d{3}$" placeholder="971xxx" required/>
                      </div>
                  </div>

              </div>
 
              <div class="span6">
                  <div class="control-group" style="
    margin-top: 10px;
">
                      <label class="control-label" style="float: left;width: 200px;">Personal Id Number</label>
                      <div class="controls">
                         <input name="idnum"id="idnum" type="num" pattern="[0-9]+" placeholder="452xxxxx" required/>
                      </div>
                  </div>

     		 </div>
              </div> 
              