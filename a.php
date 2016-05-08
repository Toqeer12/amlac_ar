<?php

require('cd_db.php'); 
session_start();
$vartype;
$sql= "SELECT * From delivery WHERE `delv_id` = '".$_SESSION['id']."'";   
$result=mysql_query($sql)or  die('Invalid query: ' . mysql_error());

if($result) {
			if(mysql_num_rows($result) > 0) {
			//Login Successful
			$member = mysql_fetch_assoc($result);

					$var = $member['security_code'];
					$var2 = $member['delv_code'];
			
					}
		}
?>

<html>
<head>
   <link rel="stylesheet" href="css/magnific.css">

<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!-- Magnific Popup core JS file -->
<script src="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/jquery.magnific-popup.min.js"></script>
  <link href="login/css/style.css" rel="stylesheet" />
<script src="http://cdn.jsdelivr.net/zepto/1.1.3/zepto.min.js"></script>
</head>
<style type="text/css">

body {font:115% "Trebuchet MS", Helvetica, sans-serif;}
h1 {text-align: center;}
a:link, a:visited {
	padding: 0.25em;
	background: #fff;
	color: steelblue;
	text-decoration: none;}
a:hover, a:focus {border-bottom: 0.0625em dashed steelblue;}
label {
	display: block;
	background: lightsteelblue;
	margin: 0.125em;
	padding: 0.5em;}
button {
	display: block;
	margin: 1em auto;}
#modal {
	margin: 0 auto;
	padding: 0.5em;
	width: 300px;
	height: 300px;
	background: #000000;
	font-size: 80%;}
</style>
<body onload="load()">




	<div id="modal" class="white-popup-block mfp-hide" style="
    background-color: #ffffff;>
		<div class="login-header">
		      <div id="logo" class="center">
          <img src="login/img/happiness-logo.png" alt="logo" class="center" />
      </div>
		
			<p style="margin-top:50px"> Thank you for using Happiness delivery, We promise you to make you and your reciver happy !! Your Security Code is <?php echo $var;?> and Tracking code is <?php echo $var2?></p>
			<?php 
			echo 'hello'.$vartype;			 
			if($vartype=='admin')
			{
			?>
			<a style="margin-left: 130;" align"center"|class="popup-modal-dismiss" href="index.php?cmnd=sender&pid=">Confirm</a>
		<?php }
			else if($vartype=='weben')
			{
			?>
			<a  style="margin-left: 130; align"center"class="popup-modal-dismiss" href="index_web_enn.php?cmnd_web_en=&pid=">Confirm</a>
			<?php 
			}
			else if($vartype=='webar')
			{
			?>	
			<a style="margin-left: 130;" align"center" class="popup-modal-dismiss" href="index_web_arr.php?cmnd_web_ar=&pid=">Confirm</a>
			<?php
			}
			else if($vartype=='mobar')
			{
			?>
			<a  style="margin-left: 130;" align"center" class="popup-modal-dismiss" href="index_mob_arr.php?cmnd_mob_ar=&pid=">Confirm</a>
			<?php
			}
			else
			{
			?>
			<a style="margin-left: 130;" align"center" class="popup-modal-dismiss" href="index_mob_enn.php?cmnd_mob_en=&pid=">Confirm</a>
			<?php
			}
			?>
			</div>
	</div>
	</div>
<script type="text/javascript">
function load(){
	$(document).ready(function() {
	$.magnificPopup.open({
		type: 'inline',
		items: {src: '#modal'},
		preloader: false,
		modal: true
	});
	$(document).on('click', '.popup-modal-dismiss', function (e) {
		//e.preventDefault();
		$.magnificPopup.close();
        // $('form')[0].reset();
        header("location:login.html");
	});
});
}

</script>
</body>

</html>