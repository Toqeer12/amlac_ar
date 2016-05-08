<!DOCTYPE html>
<!--
Template Name: Admin Lab Dashboard build with Bootstrap v2.3.1
Template Version: 1.3
Author: Mosaddek Hossain
Website: http://thevectorlab.net/
-->

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> 

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
<html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
  <meta charset="utf-8" />
  <title>Verification</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/style_responsive.css" rel="stylesheet" />
  <link href="css/style_default.css" rel="stylesheet" id="style_color" />

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body id="login-body">
  <div class="login-header">
      <!-- BEGIN LOGO -->
      <div id="logo" class="center">
          <img src="img/logo.png" alt="logo" class="center" />
      </div>
      <!-- END LOGO -->
  </div>

  <!-- BEGIN LOGIN -->
  <div id="login">
    <!-- BEGIN LOGIN FORM -->
    <form id="loginform" class="form-vertical no-padding no-margin" action="verify_validate.php" method="POST">
      <div class="lock">
          <i class="icon-lock"></i>
      </div>
	  <span class="help-inline">
	  </span>
      <div class="control-wrap">

          <h4>Verification Code
</h4>
          <div class="control-group">
              <div class="controls">
                  <div class="input-prepend">
                      <span class="add-on"><i class="icon-user"></i></span>
					  <input name="verify" id="input-username" type="text" placeholder="verify"  required/>
							
				  
				  </div>
              </div>
          </div>
 <div class="clearfix space5"></div>
          </div>
		        <input type="submit" id="login-btn" class="btn btn-block login-btn" value="Verify" />

      </div>

    </form>
  
  </div>
  <!-- END LOGIN -->
  <!-- BEGIN COPYRIGHT -->
  <div id="login-copyright">
      2016 &copy; Vitamin Admin Lab Dashboard.
  </div>
 
  <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>