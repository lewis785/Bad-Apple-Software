<!DOCTYPE html>
<html lang="en" style="height:100%;">
	<head>
       
        <meta charset="utf-8"> 
        <title>Register</title>
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
        <script src="../js/popup.js"></script>
        
        <!-- Extra javascript to make things crispier -->
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
        <script src="../js/registervalidate.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->   
		      
	</head>
  	<!--/head-->
	<body data-spy="scroll" data-target="nav">
		<header id="header-1" class="soft-scroll header-1">
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
								<a href="index.html" class="littlestuff-hover">Home</a>
							</li>
							<li class="nav-item">
								<a href="login.php" class="littlestuff-hover">Login</a>
							</li>
							<li class="active nav-item">
								<a href="#" class="littlestuff-hover">Register</a>
							</li>                             
						</ul>
						<!--//nav-->
					</div>
					<!--// End Navigation -->
				</div>
				<!--// End Container -->
			</nav>
			<!--// End Navbar -->
		</header>
		<!--// End header -->
		<div class="middle-bit">
			<div class="mask">
				<img href="../images/current.png" />
			</div>
			<div class="col-sm-10 col-sm-offset-1">
				<div class="underlined-title">
					<h1>Please Register an Account Below</h1>
					<hr class="headings">
				</div>
			</div>
			<!-- Register Form start -->
			<form role="form" id="register-form" class="register-form text-center lead" name="login" method="post" action="../php/createUser.php">
				<div class="form-group">
					<input type="text" name="username" class="form-control" required="required" placeholder="Enter Username">
				</div>

				<div class="form-group">
					<input type="Email" name="email1" class="form-control" required="required" placeholder="Enter Email">
				</div>

				<div id="passdiv" class="form-group">
					<input type="Password" id="pass1" name="pass1" onblur="validatePassword()" class="form-control" required="required" placeholder="Enter Password">
				</div>

				 <div class="form-group">
					<input type="Password" id="pass2" name="pass2" class="form-control" required="required" placeholder="Enter Password again">
				</div>            
				<div class="form-group">
					<button type="submit" name="register" class="btn btn-llg bg-headings" required="required"> Register </button>
				</div>  
			</form>
		</div>
		<!-- register end -->
		<!--// footer -->
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
		<script type="text/javascript" src="js/bootstrap.min.js"></script>    <script type="text/javascript" src="js/plugins.js"></script>
		<script type="text/javascript" src="js/bskit-scripts.js"></script>
	</body>
</html>
