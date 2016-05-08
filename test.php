<!DOCTYPE html>

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
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Managed Tables</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/style_responsive.css" rel="stylesheet" />
	<link href="css/style_default.css" rel="stylesheet" id="style_color" />
<link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/magnific-popup.css">
	<link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
	<link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
	<!-- BEGIN HEADER -->
	<?php
    include 'header.php';
    include 'raw_detail.php';
    
    ?>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	<div id="container" class="row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div id="sidebar" class="nav-collapse collapse">
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
			<div class="sidebar-toggler hidden-phone"></div>
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

			<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
			<div class="navbar-inverse">
				<form class="navbar-search visible-phone">
					<input type="text" class="search-query" placeholder="Search" />
				</form>
			</div>
			<!-- END RESPONSIVE QUICK SEARCH FORM -->
			<!-- BEGIN SIDEBAR MENU -->
		<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div id="main-content">
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN THEME CUSTOMIZER-->
						<div id="theme-change" class="hidden-phone">
							<i class="icon-cogs"></i>
							<span class="settings">
                                <span class="text">Theme:</span>
                                <span class="colors">
                                    <span class="color-default" data-style="default"></span>
                                    <span class="color-gray" data-style="gray"></span>
                                    <span class="color-purple" data-style="purple"></span>
                                    <span class="color-navy-blue" data-style="navy-blue"></span>
                                </span>
							</span>
						</div>
						<!-- END THEME CUSTOMIZER-->
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<h3 class="page-title">
							Dashboard	
				 
						</h3>
						<ul class="breadcrumb">
							<li>
                                <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
							</li>
                       
							<li><a href="#">Dashboard</a><span class="divider-last">&nbsp;</span></li>
                            <li class="pull-right search-wrap">
                                <form class="hidden-phone" action="search_result.html">
                                    <div class="search-input-area">
                                        <input id=" " class="search-query" type="text" placeholder="Search">
                                        <i class="icon-search"></i>
                                    </div>
                                </form>
                            </li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div id="page" class="dashboard">
                    <!-- BEGIN OVERVIEW STATISTIC BLOCKS-->
                    <div class="row-fluid circle-state-overview">
                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-stat block">
                                <div class="visual">
                                    <div class="circle-state-icon">
                                        <i class="icon-user turquoise-color"></i>
                                    </div>
                                    <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="<?php subcriber() ?>" data-fgColor="#4CC5CD" data-bgColor="#ddd">
                                </div>
                                <div class="details">
                                    <div class="number"><?php subcriber()?></div>
                                    <div class="title">				
									Total Amlac Subscriber</div>
                                </div>

                            </div>
                        </div>
                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-stat block">
                                <div class="visual">
                                    <div class="circle-state-icon">
                                        <i class="icon-tags red-color"></i>
                                    </div>
                                    <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="<?php client()?>" data-fgColor="#e17f90" data-bgColor="#ddd"/>
                                </div>
                                <div class="details">
                                    <div class="number"><?php client()?></div>
                                    <div class="title">Total Client</div>
                                </div>

                            </div>
                        </div>


                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-stat block">
                                <div class="visual">
                                    <div class="circle-state-icon">
                                        <i class="icon-shopping-cart green-color"></i>
                                    </div>
                                    <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="<?php property()?>" data-fgColor="#a8c77b" data-bgColor="#ddd"/>
                                </div>
                                <div class="details">
                                    <div class="number"><?php property() ?></div>
                                    <div class="title">Total Properties</div>
                                </div>

                            </div>
                        </div>

                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-stat block">
                                <div class="visual">
                                    <div class="circle-state-icon">
                                        <i class="icon-comments-alt gray-color"></i>
                                    </div>
                                    <input class="knob"  data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="<?php unit_property()?>"  data-fgColor="#b9baba" data-bgColor="#ddd"/>
                                </div>
                                <div class="details">
                                    <div class="number"><?php unit_property()?></div>
                                    <div class="title">Total Unit</div>
                                </div>

                            </div>
                        </div>

                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">
                            <div class="circle-stat block">
                                <div class="visual">
                                    <div class="circle-state-icon">
                                        <i class="icon-eye-open purple-color"></i>
                                    </div>
                                    <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="<?php lease_property()?>" data-fgColor="#c8abdb" data-bgColor="#ddd"/>
                                </div>
                                <div class="details">
                                    <div class="number"><?php lease_property()?></div>
                                    <div class="title">Total Lease Property</div>
                                </div>

                            </div>
                        </div>


                   
                    </div>
         <div class="container-fluid">

            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN EXAMPLE TABLE widget-->
                    <div class="widget">
         
                        <div class="widget-body">
                            <table class="table table-striped table-bordered" id="sample_1">
                            <thead>
                                <tr>
                                    <th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /></th>
                                    <th>Username</th>
                                    <th class="hidden-phone">Email</th>
                                    <th class="hidden-phone">Points</th>
                                    <th class="hidden-phone">Joined</th>
                                    <th class="hidden-phone"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>Jhone doe</td>
                                    <td class="hidden-phone"><a href="mailto:jhone-doe@gmail.com">jhone-doe@gmail.com</a></td>
                                    <td class="hidden-phone">10</td>
                                    <td class="center hidden-phone">02.03.2013</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>gada</td>
                                    <td class="hidden-phone"><a href="mailto:gada-lal@gmail.com">gada-lal@gmail.com</a></td>
                                    <td class="hidden-phone">34</td>
                                    <td class="center hidden-phone">08.03.2013</td>
                                    <td class="hidden-phone"><span class="label label-warning">Suspended</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>soa bal</td>
                                    <td class="hidden-phone"><a href="mailto:soa bal@yahoo.com">soa bal@yahoo.com</a></td>
                                    <td class="hidden-phone">33</td>
                                    <td class="center hidden-phone">1.12.2013</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>ram sag</td>
                                    <td class="hidden-phone"><a href="mailto:soa bal@gmail.com">soa bal@gmail.com</a></td>
                                    <td class="hidden-phone">33</td>
                                    <td class="center hidden-phone">7.2.2013</td>
                                    <td class="hidden-phone"><span class="label label-inverse">Blocked</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>durlab</td>
                                    <td class="hidden-phone"><a href="mailto:soa bal@gmail.com">test@gmail.com</a></td>
                                    <td class="hidden-phone">33</td>
                                    <td class="center hidden-phone">03.07.2013</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>durlab</td>
                                    <td class="hidden-phone"><a href="mailto:soa bal@gmail.com">lorem-ip@gmail.com</a></td>
                                    <td class="hidden-phone">33</td>
                                    <td class="center hidden-phone">05.04.2013</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>sumon</td>
                                    <td class="hidden-phone"><a href="mailto:soa bal@gmail.com">lorem-ip@gmail.com</a></td>
                                    <td class="hidden-phone">33</td>
                                    <td class="center hidden-phone">05.04.2013</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>bombi</td>
                                    <td class="hidden-phone"><a href="mailto:soa bal@gmail.com">lorem-ip@gmail.com</a></td>
                                    <td class="hidden-phone">33</td>
                                    <td class="center hidden-phone">05.04.2013</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>ABC ho</td>
                                    <td class="hidden-phone"><a href="mailto:soa bal@gmail.com">lorem-ip@gmail.com</a></td>
                                    <td class="hidden-phone">33</td>
                                    <td class="center hidden-phone">05.04.2013</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>test</td>
                                    <td class="hidden-phone"><a href="mailto:soa bal@gmail.com">lorem-ip@gmail.com</a></td>
                                    <td class="hidden-phone">33</td>
                                    <td class="center hidden-phone">05.04.2013</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>soa bal</td>
                                    <td class="hidden-phone"><a href="mailto:soa bal@gmail.com">soa bal@gmail.com</a></td>
                                    <td class="hidden-phone">33</td>
                                    <td class="center hidden-phone">03.07.2013</td>
                                    <td class="hidden-phone"><span class="label label-inverse">Blocked</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>test</td>
                                    <td class="hidden-phone"><a href="mailto:soa bal@gmail.com">test@gmail.com</a></td>
                                    <td class="hidden-phone">33</td>
                                    <td class="center hidden-phone">03.07.2013</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>goop</td>
                                    <td class="hidden-phone"><a href="mailto:soa bal@gmail.com">lorem-ip@gmail.com</a></td>
                                    <td class="hidden-phone">33</td>
                                    <td class="center hidden-phone">05.04.2013</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>sumon</td>
                                    <td class="hidden-phone"><a href="mailto:soa bal@gmail.com">lorem-ip@gmail.com</a></td>
                                    <td class="hidden-phone">33</td>
                                    <td class="center hidden-phone">01.07.2013</td>
                                    <td class="hidden-phone"><span class="label label-inverse">Blocked</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>woeri</td>
                                    <td class="hidden-phone"><a href="mailto:soa bal@gmail.com">lorem-ip@gmail.com</a></td>
                                    <td class="hidden-phone">33</td>
                                    <td class="center hidden-phone">09.10.2013</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>soa bal</td>
                                    <td class="hidden-phone"><a href="mailto:soa bal@gmail.com">soa bal@gmail.com</a></td>
                                    <td class="hidden-phone">33</td>
                                    <td class="center hidden-phone">9.12.2013</td>
                                    <td class="hidden-phone"><span class="label label-inverse">Blocked</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>woeri</td>
                                    <td class="hidden-phone"><a href="mailto:soa bal@gmail.com">test@gmail.com</a></td>
                                    <td class="hidden-phone">33</td>
                                    <td class="center hidden-phone">14.12.2013</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>uirer</td>
                                    <td class="hidden-phone"><a href="mailto:soa bal@gmail.com">lorem-ip@gmail.com</a></td>
                                    <td class="hidden-phone">33</td>
                                    <td class="center hidden-phone">13.11.2013</td>
                                    <td class="hidden-phone"><span class="label label-warning">Suspended</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>samsu</td>
                                    <td class="hidden-phone"><a href="mailto:soa bal@gmail.com">lorem-ip@gmail.com</a></td>
                                    <td class="hidden-phone">33</td>
                                    <td class="center hidden-phone">17.11.2013</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>dipsdf</td>
                                    <td class="hidden-phone"><a href="mailto:soa bal@gmail.com">lorem-ip@gmail.com</a></td>
                                    <td class="hidden-phone">33</td>
                                    <td class="center hidden-phone">05.04.2013</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>soa bal</td>
                                    <td class="hidden-phone"><a href="mailto:soa bal@gmail.com">soa bal@gmail.com</a></td>
                                    <td class="hidden-phone">33</td>
                                    <td class="center hidden-phone">03.07.2013</td>
                                    <td class="hidden-phone"><span class="label label-inverse">Blocked</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>hilor</td>
                                    <td class="hidden-phone"><a href="mailto:soa bal@gmail.com">test@gmail.com</a></td>
                                    <td class="hidden-phone">33</td>
                                    <td class="center hidden-phone">03.07.2013</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>test</td>
                                    <td class="hidden-phone"><a href="mailto:soa bal@gmail.com">lorem-ip@gmail.com</a></td>
                                    <td class="hidden-phone">33</td>
                                    <td class="center hidden-phone">19.12.2013</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>botu</td>
                                    <td class="hidden-phone"><a href="mailto:soa bal@gmail.com">lorem-ip@gmail.com</a></td>
                                    <td class="hidden-phone">33</td>
                                    <td class="center hidden-phone">17.12.2013</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td><input type="checkbox" class="checkboxes" value="1" /></td>
                                    <td>sumon</td>
                                    <td class="hidden-phone"><a href="mailto:soa bal@gmail.com">lorem-ip@gmail.com</a></td>
                                    <td class="hidden-phone">33</td>
                                    <td class="center hidden-phone">15.11.2011</td>
                                    <td class="hidden-phone"><span class="label label-success">Approved</span></td>
                                </tr>
                                </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE widget-->
                </div>
            </div>

            <!-- END ADVANCED TABLE widget-->

            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
       2013 &copy; Admin Lab Dashboard.
      <div class="span pull-right">
         <span class="go-top"><i class="icon-arrow-up"></i></span>
      </div>
   </div>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="js/jquery-1.8.3.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>   
   <script src="js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->   
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
   <script src="js/scripts.js"></script>
 	<script src="assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
 
 
 
	<!-- ie8 fixes -->
	<!--[if lt IE 9]>
	<script src="js/excanvas.js"></script>
	<script src="js/respond.js"></script>
	<![endif]-->
	<script src="assets/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
	<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
	<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
	<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
	<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
	<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
	<script src="assets/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
	<script src="assets/jquery-knob/js/jquery.knob.js"></script>
	<script src="assets/flot/jquery.flot.js"></script>
	<script src="assets/flot/jquery.flot.resize.js"></script>
    
    <script src="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/jquery.magnific-popup.min.js"></script>

    <script src="assets/flot/jquery.flot.pie.js"></script>
    <script src="assets/flot/jquery.flot.stack.js"></script>
    <script src="assets/flot/jquery.flot.crosshair.js"></script>

	<script src="js/jquery.peity.min.js"></script>
	<script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
	<script src="js/scripts.js"></script>
	<!-- ie8 fixes -->
	<!--[if lt IE 9]>
	<script src="js/excanvas.js"></script>
	<script src="js/respond.js"></script>
	<![endif]-->
	<script src="assets/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
	<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
	<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
	<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
	<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
	<script src="assets/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
	<script src="assets/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
	<script src="assets/jquery-knob/js/jquery.knob.js"></script>
	<script src="assets/flot/jquery.flot.js"></script>
	<script src="assets/flot/jquery.flot.resize.js"></script>
    
    <script src="http://cdn.jsdelivr.net/jquery.magnific-popup/0.9.9/jquery.magnific-popup.min.js"></script>

    <script src="assets/flot/jquery.flot.pie.js"></script>
    <script src="assets/flot/jquery.flot.stack.js"></script>
    <script src="assets/flot/jquery.flot.crosshair.js"></script>

	<script src="js/jquery.peity.min.js"></script>
	<script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
	<script src="js/scripts.js"></script>
</body>
<!-- END BODY -->
</html>
