<!DOCTYPE html>
<?php 
	include "../php/core/verify.php";
?>
<html lang="en" style="height:100%;">
	<head>
	
		<meta charset="utf-8"> 
        <title>Add Qualification</title>
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
       
        <!-- Code for loading user information -->
     	<script src="../js/loadUser.js"></script>
		<script src="../js/storeGrade.js"></script>
         
        <!-- Extra javascript to make things crispier -->
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->

	</head>
	<!--/head-->
	<body onload="loadInfo()" data-spy="scroll" data-target="nav"> 
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
							<li class="nav-item">
								<a href="home.html" class="littlestuff-hover">Home</a>
							</li>
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
								<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="true" href="profile.php">Profile<i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
								   <li>
										<a href="profiledetail.php"> Edit Info </a>
									</li>
									<li class="active">
										<a href="addgrades.php"> Add Grades </a>
									</li>                                     
									<li>
										<a href="addjob.php"> Add Employment </a>
									</li>                                     
									<li>
										<a href="#"> Starred Paths </a>
									</li>                                     
									<!-- still to be made -->
									<li role="separator" class="divider"></li>
									<li>
										<a href="../php/core/signout.php"> Log out </a>
									</li>                                     
									<!-- still to be made -->
								</ul>
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
					<h1>Add Qualifications</h1>
					<hr class="headings">
				</div>
			</div>
			<div id="page-center" class="main-section col-md-6 col-md-offset-3">
				 <div class="row contact-wrap"> 
					<div class="col-md-6 col-md-offset-3">
					
						<form id="register-form" class="grade-form" name="grade-form" method="post" action="../php/insertGrade.php">

							<div id="coursediv" class="form-group">
								<select id="courseselect" name="course" class="form-control">
									<option value="NoneSelect" selected>Select Course</option>
									<?php 
									include "../php/qualifications/getCourses.php";
									?>

								</select>
							</div>

							<div id="leveldiv" class="form-group">
								<select id="levelselect" name="level" class="form-control" onchange="javascript: gradeselected();">
									<option value="NoneSelect" selected>Select Level</option>
									<?php 
									include "../php/qualifications/getLevels.php";
									?>
								</select>
							</div>

							<div id="gradediv" class="form-group">
								<select id="gradeselect" name="grade" class="form-control">
									<option value="NoneSelect">Select Grade</option>
								</select>
							</div>
						</form>

						<button onclick="addGrade()" id="storeGrade" class="btn btn-llg bg-headings"> Add Grade </button>  <!-- still to be made -->

						<button onclick="submitForm(true)" id="submitGrades" class="btn btn-llg bg-headings"> Submit Grades </button>  <!-- still to be made -->

						<div id="qualificationslist"></div>

					</div>
				</div>
			</div><!-- End of page-center-->
		</div>
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
