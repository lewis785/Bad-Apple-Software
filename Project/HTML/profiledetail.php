<!DOCTYPE html>
<?php 
include "../PHP/Core/verify.php";
?>
<html lang="en" style="height:100%;">
<head>
	
	<meta charset="utf-8"> 
	<title>Edit Information</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="keywords" content="pinegrow, html, bootstrap" />
	<meta name="description" content="BAS" />
	<link rel="shortcut icon" href="ico/favicon.png">
	
	<!-- Core CSS -->      
	<link href="../css/responsive.css" rel="stylesheet">   
	<link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet">
	
	<!-- Style Library -->         
	<link href="../css/style-library-1.css" rel="stylesheet">
	<link href="../css/plugins.css" rel="stylesheet">
	<link href="../css/blocks.css" rel="stylesheet">
	<link href="../css/custom.css" rel="stylesheet">  
	<link href="../css/responsive.css" rel="stylesheet">     
	
	<!-- Code for loading user information -->
	<script src="../js/loadUser.js"></script>
	<script src="../js/popup.js"></script>
	<script src="../js/registervalidate.js"></script>
	
	<!-- Extra javascript to make things crispier -->
	<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
	<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->   
	
</head>     
<!--/head-->
<body onload="loadEditInfo()" data-spy="scroll" data-target="nav"> 
	<header id="header-1" class="header-1">
		<nav class="main-nav navbar-fixed-top headroom headroom--pinned bg-navfoot">
			<div class="container-fluid">
				<!-- Brand and toggle -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#">
						<img src="../images/carel.png" class="brand-img img-responsive">
					</a>
				</div>
				<!-- Navigation -->
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">

						<?php 
						include "../php/admin/adminButton.php";
						?>
						<li class="nav-item">
							<a href="workingbuilderTemp.php" class="littlestuff-hover">Path</a>
						</li>
						<li class="nav-item">
							<a href="employmenthistory.php" class="littlestuff-hover">Employment</a>
						</li>
						<li class="nav-item">
							<a href="qualifications.php" class="littlestuff-hover">Qualifications</a>
						</li>                             
						<li class="nav-item dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="profile.php">Profile<i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu">
								<li class="active">
									<a href="profiledetail.php" class="littlestuff-hover">Edit Info</a>
								</li>
								<li>
									<a href="addgrades.php" class="littlestuff-hover">Add Grades</a>
								</li>                                     
								<li>
									<a href="addjob.php" class="littlestuff-hover">Add Employment</a>
								</li>                                     
								<li>
									<a href="#" class="littlestuff-hover">Starred Paths</a>
								</li>                                     
								
								<li role="separator" class="divider"></li>
								<li>
									<a href="../php/Core/signout.php" class="littlestuff-hover">Log out</a>
								</li>
							</ul>                                 
						</li>
						<li class="nav-item">
							<a href="home.html" class="littlestuff-hover">Home</a>
						</li>
						<!--//dropdown-->
					</ul>
					<!--//nav-->
				</div>
			</div>
			<!--// End Container -->
		</nav>
		<!--// End Navbar -->
	</header>
	<div class="middle-bit">
		<div class="mask">
			<img href="../images/current.png" />
		</div>
		<div class="col-sm-10 col-sm-offset-1">
			<div class="underlined-title">
				<h1>Edit your Details</h1>
				<hr class="headings">
			</div>
		</div>
		<form id="register-form" class="contact-form" name="contact-form" method="post" action="../php/updateUser.php"> 
			<div>
				<div class="form-group">
					<input id="firstn" type="text" name="firstname" class="form-control" required="required" placeholder="Enter Firstname">
				</div>
				<div class="form-group">
					<input id="lastn" type="text" name="surname" class="form-control" required="required" placeholder="Enter Lastname">
				</div>                                 
				<div class="form-group">
					<input id="dob" type="Date" name="DoB" class="form-control" required="required" placeholder="Enter Date of Birth">
				</div>
				<div class="form-group">
					<input id="email" type="Email" name="email" class="form-control" required="required" placeholder="Enter Email">
				</div>
				<div class="form-group">
					<input id="number" type="text" name="number" class="form-control" required="required" placeholder="Enter House Number">
				</div>
				<div class="form-group">
					<input id="street" type="text" name="street" class="form-control" required="required" placeholder="Enter Stret Name">
				</div>
				<div class="form-group">
					<input id="city" type="text" name="city" class="form-control" required="required" placeholder="Enter City">
				</div>
				<div class="form-group">
					<input id="postcode" type="text" name="postcode" class="form-control" required="required" placeholder="Enter Postcode">
				</div>
				<br> 
				<div class="form-group">
					<button type="submit" name="register" class="form-control btn btn-llg bg-headings" required="required"> Update </button>
				</div>                                 
			</div>
		</form>                         
		<br> 
		<label>
			<u><i> When choosing a password make sure it's easy to remember! </i></u>
		</label>
		<br>
		<a href="updatepassword.php" class="form-control btn btn-llg bg-headings"> Change Password </a> 
	</div>
	<!--/middle bit ie. spacer to keep footer on bottom-->            
	<section class="content-block-nopad footer-wrap-1-3 bg-navfoot">
		<div class="container footer-1-3">
			<div class="col-md-4 pull-left">
				<img src="../images/carell.png" class="brand-img img-responsive">
				<ul class="social social-dark">
					<li>
						<a href="#"><i class="fa fa-2x fa-html5 white"></i></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-2x fa-css3 white"></i></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-2x fa-git white"></i></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-2x fa-linux white"></i></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-2x fa-fonticons white"></i></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-2x fa-chrome white"></i></a>
					</li>
				</ul>
				<!-- /.social -->
			</div>
			<div class="col-md-3 pull-right">
				<p class="address-bold-line">We <i class="fa fa-2x fa-heart littlestuff"></i> our career paths.</p>
			</div>
			<div class="col-xs-12 footer-text">
				<p>&copy; 2016 <a target="_blank" href="#" title="badapplesoftware"> Bad Apple Software</a>. All Rights Reserved.</p>
			</div>
		</div>
		<!-- /.container -->
	</section>
	<!--/#footer-->            
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/bskit-scripts.js"></script>
</body>
</html>
