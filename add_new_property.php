
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
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

                  <form method="post" action="property_validate.php?id=1" >
                  
                     <div class="control-group">
                      <label class="control-label">Add New Property Type</label>
                      <div class="controls">
                       <input name="ptype"id="ptype" type="text" placeholder="Propery Name"   required/>
                      </div>
                  </div>
                  
                  </form>
</body>
</html>