<!DOCTYPE html>
<?php 
include "../PHP/Core/verify.php";
?>
<html lang="en">
<head> 
    <meta charset="utf-8"> 
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="keywords" content="bootstrap" />
    <meta name="description" content="BAS" />
    <link rel="shortcut icon" href="ico/favicon.png"> 
    <!-- Core CSS -->         
    <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet">
    <!-- Style Library -->         
    <link href="../css/style-library-1.css" rel="stylesheet">
    <link href="../css/plugins.css" rel="stylesheet">
    <link href="../css/blocks.css" rel="stylesheet">
    <!-- Custom Library -->         
    <link href="../css/custom.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Code for loading user information -->
    <script src="../js/loadUser.js"></script>
    <script src="../js/popup.js"></script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->         
        <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->         
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
                        <a href="profile.php" class="littlestuff-hover">Home</a>
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
                    <li class="nav-item">
                        <a href="index.html" class="littlestuff-hover">Contact</a>
                    </li>
<<<<<<< HEAD
                    <li class="active nav-item dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="true" href="#">Profile<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
=======
                    <li class="dropdown">
                        <a href="profile.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class="caret"></span></a>
                        <ul id="nav-drop" class="dropdown-menu">
>>>>>>> origin/Lewis
                            <li>
                                <a href="profiledetail.php"> Edit Info </a>
                            </li>
                            <li>
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
                                <a href="../php/Core/signout.php"> Log out </a>
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
<<<<<<< HEAD
    <div class="middle-bit">
		<section id="content-3-5" class="content-block content-3-5">
			<div class="mask">
				<img href="../images/current.png" />
			</div>
			<div class="col-sm-10 col-sm-offset-1">
				<div class="underlined-title">
					<h1>Your Careers Pathfinder Profile</h1>
					<hr class="headings">
				</div>
			</div>                 
			<div class="container">
				<div class="row">
					<!-- Feature Box 1 -->
					<div class="col-md-2 col-sm-4 col-xs-8">
						<div class="feature-box bg-headings">
							<div class="icon">
								<span class="fa fa-sign-in black"></span>
							</div>
							<h5>Joined</h5>
							<div id="joined">01/01/01</div>
						</div>
					</div>
					<!-- Feature Box 2 -->
					<div class="col-md-2 col-sm-4 col-xs-8">
						<div class="feature-box bg-headings">
							<div class="icon">
								<span class="fa fa-pencil black"></span>
							</div>
							<h5>Name</h5>
							<div id="name">John Smith</div>
						</div>
					</div>
					<!-- Feature Box 3 -->
					<div class="col-md-2 col-sm-4 col-xs-8">
						<div class="feature-box bg-headings">
							<div class="icon">
								<span class="fa fa-empire black"></span>
							</div>
							<h5>Occupation</h5>
							<div id="occupation">Employed</div>
						</div>
					</div>
					<!-- Feature Box 4 -->
					<div class="col-md-2 col-sm-4 col-xs-8">
						<div class="feature-box bg-headings">
							<div class="icon">
								<span class="fa fa-calendar-o black"></span>
							</div>
							<h5>Date of Birth</h5>
							<div id="dob">01/01/01</div>
						</div>
					</div>
					<!-- Feature Box 5 -->
					<div class="col-md-2 col-sm-4 col-xs-8">
						<div class="feature-box bg-headings">
							<div class="icon">
								<span class="fa fa-envelope-o black"></span>
							</div>
							<h5>Email</h5>
							<div id="email">js@hw.ac.uk</div>
						</div>
					</div>
					<!-- Feature Box 6 -->
					<div class="col-md-2 col-sm-4 col-xs-8">
						<div class="feature-box bg-headings">
							<div class="icon">
								<span class="fa fa-home black"></span>
							</div>
							<h5>Address</h5>
							<div id="address">01/01/01</div>
						</div>
					</div>
				</div>
				<!-- Row Ends -->
			</div>
			<!-- Container Ends -->
			<!-- </section> -->
			</section>
		</div>
            <!--// End of profile-->
=======
<section id="content-3-5" class="content-block content-3-5">
   <div class="mask">
    <img href="../images/current.png" />
</div>
<div class="col-sm-10 col-sm-offset-1">
    <div class="underlined-title">
     <h1>Your Careers Pathfinder Profile</h1>
     <hr class="headings">
 </div>
</div>                 
<div class="container">
    <div class="row">
     <!-- Feature Box 1 -->
     <div class="col-md-2 col-sm-4 col-xs-8">
      <div class="feature-box bg-headings">
       <div class="icon">
        <span class="fa fa-sign-in black"></span>
    </div>
    <h5>Joined</h5>
    <div id="joined">01/01/01</div>
</div>
</div>
<!-- Feature Box 2 -->
<div class="col-md-2 col-sm-4 col-xs-8">
  <div class="feature-box bg-headings">
   <div class="icon">
    <span class="fa fa-pencil black"></span>
</div>
<h5>Name</h5>
<div id="name">John Smith</div>
</div>
</div>
<!-- Feature Box 3 -->
<div class="col-md-2 col-sm-4 col-xs-8">
  <div class="feature-box bg-headings">
   <div class="icon">
    <span class="fa fa-empire black"></span>
</div>
<h5>Occupation</h5>
<div id="occupation">Employed</div>
</div>
</div>
<!-- Feature Box 4 -->
<div class="col-md-2 col-sm-4 col-xs-8">
  <div class="feature-box bg-headings">
   <div class="icon">
    <span class="fa fa-calendar-o black"></span>
</div>
<h5>Date of Birth</h5>
<div id="dob">01/01/01</div>
</div>
</div>
<!-- Feature Box 5 -->
<div class="col-md-2 col-sm-4 col-xs-8">
  <div class="feature-box bg-headings">
   <div class="icon">
    <span class="fa fa-envelope-o black"></span>
</div>
<h5>Email</h5>
<div id="email">js@hw.ac.uk</div>
</div>
</div>
<!-- Feature Box 6 -->
<div class="col-md-2 col-sm-4 col-xs-8">
  <div class="feature-box bg-headings">
   <div class="icon">
    <span class="fa fa-home black"></span>
</div>
<h5>Address</h5>
<div id="address">01/01/01</div>
</div>
</div>
</div>
<!-- Row Ends -->
</div>
<!-- Container Ends -->
<!-- </section> -->
</section>
<!--// End of profile-->
>>>>>>> origin/Lewis
<footer class="content-block-nopad footer-wrap-1-3 bg-navfoot">
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
</footer>
<!--/#footer-->
</body>
</html>
