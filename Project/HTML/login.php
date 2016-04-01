<!DOCTYPE html>
<?php 
include "../php/Core/alreadyLoggedIn.php"; 
?>
<html lang="en"  style="height:100%;">
<<<<<<< HEAD
    <head> 
       
        <meta charset="utf-8"> 
        <title>Login</title>
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
        <script src="../js/registervalidate.js"></script>
        
        <!-- Extra javascript to make things crispier -->
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
   
    </head>     
    <!--/head-->
    <body onload="checkKey()" data-spy="scroll" data-target="nav">
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
                            <li class="active nav-item">

                                <a href="login.php" class="littlestuff-hover">Login</a>
                            </li>
                            <li class="nav-item">
                                <a href="register.php" class="littlestuff-hover">Register</a>
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

        <div class="middle-bit">
        	<div class="mask">
            	<img href="../images/current.png" />
        	</div>
			<div class="col-sm-10 col-sm-offset-1">
				<div class="underlined-title">
					<h1>Careers Pathfinder Login</h1>
					<hr class="headings">
					<h2>If you don't have an account please Register<i href="register.php">Here</i></h2>
				</div>
			</div>
			<form role="form" id="login-form" class="login-form text-center lead" name="login" method="post" action="profile.php">
				<div id="userdiv" class="form-group">
					<input type="text" id="userinput" name="username" class="form-control" required="required" placeholder="Enter Username">
				</div>
				<div id="passdiv" class="form-group">
					<input type="Password" id="passinput" name="password" class="form-control" required="required" placeholder="Enter Password">
				</div>                 
				<div class="form-group">
					<label>
						<u class="littlestuff"><i class="fa-bolt fa">Remember me</i></u>
					</label>
					<input type="checkbox" value="remember-me">
				</div>                 
				<div class="form-group">
					<button onclick="Login()" class="btn btn-llg bg-headings">Sign in</button>
					<a href="register.php" class="btn btn-llg bg-headings">Register</a> 
					<br>
					<label>
						<i><a href="#" class="littlestuff">Forgotten Password?</a></i>
					</label>
				</div>                 
			</form>
        </div>
        <!--// End of Login-->         
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
        <script type="text/javascript" src="js/bootstrap.min.js"></script>   
        <script type="text/javascript" src="js/plugins.js"></script>
		<script type="text/javascript" src="js/bskit-scripts.js"></script>
	</body>
</html>
=======
<head> 
 
    <meta charset="utf-8"> 
    <title>Login</title>
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
    <script src="../js/registervalidate.js"></script>
    
    <!-- Extra javascript to make things crispier -->
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    
</head>     
<!--/head-->
<body onload="checkKey()" data-spy="scroll" data-target="nav">
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
                        <li class="active nav-item">

                            <a href="login.php" class="littlestuff-hover">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="register.php" class="littlestuff-hover">Register</a>
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

    <div class="middle-bit">
       <div class="mask">
           <img href="../images/current.png" />
       </div>
       <div class="col-sm-10 col-sm-offset-1">
        <div class="underlined-title">
           <h1>Careers Pathfinder Login</h1>
           <hr class="headings">
           <h2>If you don't have an account please Register<i class="fa fa-heart littlestuff" href="register.php">Here</i></h2>
       </div>
   </div>
   <form role="form" id="login-form" class="login-form text-center lead" name="login" method="post" action="profile.php">
    <div id="userdiv" class="form-group">
       <input type="text" id="userinput" name="username" class="form-control" required="required" placeholder="Enter Username">
   </div>
   <div id="passdiv" class="form-group">
       <input type="Password" id="passinput" name="password" class="form-control" required="required" placeholder="Enter Password">
   </div>                 
   <div class="form-group">
       <label>
          <u class="littlestuff"><i class="fa-bolt fa">Remember me</i></u>
      </label>
      <input type="checkbox" value="remember-me">
  </div>                 
  <div class="form-group">
   <button onclick="Login()" class="btn btn-llg bg-headings">Sign in</button>
   <a href="register.php" class="btn btn-llg bg-headings">Register</a> 
   <br>
   <label>
      <i><a href="#" class="littlestuff">Forgotten Password?</a></i>
  </label>
</div>                 
</form>
</div>
<!--// End of Login-->         
<!--// footer -->
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
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>         
<script type="text/javascript" src="js/bootstrap.min.js"></script>         
<script type="text/javascript" src="js/plugins.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="js/bskit-scripts.js"></script>
</body>
</html>
>>>>>>> origin/Lewis
