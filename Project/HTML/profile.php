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
        <!--// footer -->
        <header id="header-1" class="header-1">
            <nav class="main-nav navbar-fixed-top headroom headroom--pinned bg-deco">
                <div class="container-fluid">
                    <!-- Brand and toggle -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
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
                                <a href="workingbuilderTemp.php" class="aqua-hover deepocean">Path</a>
                            </li>
                            <li class="nav-item">
                                <a href="employmenthistory.php" class="aqua-hover deepocean">Employment</a>
                            </li>
                            <li class="nav-item">
                                <a href="qualifications.php" class="aqua-hover deepocean">Qualifications</a>
                            </li>                             
                            <li class="nav-item">
                                <a href="#contact" class="deepocean aqua-hover">Contact</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle aqua-hover deepocean" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" role="button" aria-haspopup="true" aria-expanded="false" href="profile.php">Profile<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="profiledetail.php" class="aqua-hover deepocean">Edit Info</a>
                                    </li>
                                    <li>
                                        <a href="addgrades.php" class="aqua-hover deepocean">Add Grades</a>
                                    </li>                                     
                                    <li>
                                        <a href="addjob.php" class="aqua-hover deepocean">Add Employment</a>
                                    </li>                                     
                                    <li>
                                        <a href="#" class="aqua-hover deepocean">Starred Paths</a>
                                    </li>                                     
                                    <!-- still to be made -->
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="../php/Core/signout.php">Log out</a>
                                    </li>
                                </ul>                                 
                            </li>
                            <!--//dropdown-->
                        </ul>
                        <!--//nav-->
                    </div>
                    <!--// End Navigation -->
                </div>
                <!--// End Container -->
            </nav>
            <!--// End Navbar -->
        </header>
            <section id="content-3-5" class="content-block content-3-5">
                <div class="mask">
        		<img href="../Images/current.png" />
				</div>
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="underlined-title">
                        <h1 class="deepocean">Your Careers Pathfinder Profile</h1>
                        <hr class="deepocean">
                    </div>
                </div>                 
                <div class="container">
                    <div class="row">
                        <!-- Feature Box 1 -->
                        <div class="col-md-2 col-sm-4 col-xs-8">
                            <div class="feature-box bg-deco">
                                <div class="icon">
                                    <span class="fa fa-sign-in deepocean"></span>
                                </div>
                                <h5 class="deco">Joined</h5>
                                <div id="joined">01/01/01</div>
                            </div>
                        </div>
                        <!-- Feature Box 2 -->
                        <div class="col-md-2 col-sm-4 col-xs-8">
                            <div class="feature-box bg-deco">
                                <div class="icon">
                                    <span class="fa fa-pencil deepocean"></span>
                                </div>
                                <h5 class="deepocean">Name</h5>
                                <div id="name">John Smith</div>
                            </div>
                        </div>
                        <!-- Feature Box 3 -->
                        <div class="col-md-2 col-sm-4 col-xs-8">
                            <div class="feature-box bg-deco">
                                <div class="icon">
                                    <span class="fa fa-empire deepocean"></span>
                                </div>
                                <h5 class="deepocean">Occupation</h5>
                                <div id="occupation">Employed</div>
                            </div>
                        </div>
                        <!-- Feature Box 4 -->
                        <div class="col-md-2 col-sm-4 col-xs-8">
                            <div class="feature-box bg-deco">
                                <div class="icon">
                                    <span class="fa fa-calendar-o deepocean"></span>
                                </div>
                                <h5 class="deepocean">Date of Birth</h5>
                                <div id="dob">01/01/01</div>
                            </div>
                        </div>
                        <!-- Feature Box 5 -->
                        <div class="col-md-2 col-sm-4 col-xs-8">
                            <div class="feature-box bg-deco">
                                <div class="icon">
                                    <span class="fa fa-envelope-o deepocean"></span>
                                </div>
                                <h5 class="deepocean">Email</h5>
                                <div id="email">js@hw.ac.uk</div>
                            </div>
                        </div>
                        <!-- Feature Box 6 -->
                        <div class="col-md-2 col-sm-4 col-xs-8">
                            <div class="feature-box bg-deco">
                                <div class="icon">
                                    <span class="fa fa-home deepocean"></span>
                                </div>
                                <h5 class="deepocean">Address</h5>
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
            <section class="content-block-nopad footer-wrap-1-3 bg-deco">
                <div class="container footer-1-3">
                    <div class="col-md-4 pull-left">
                        <img src="../images/carell.png" class="brand-img img-responsive">
                        <ul class="social social-light">
                            <li>
                                <a href="#"><i class="fa fa-2x fa-html5 deepocean"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-2x fa-css3 deepocean"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-2x fa-git deepocean"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-2x fa-linux deepocean"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-2x fa-fonticons deepocean"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-2x fa-chrome deepocean"></i></a>
                            </li>
                        </ul>
                        <!-- /.social -->
                    </div>
                    <div class="col-md-3 pull-right">
                        <p class="address-bold-line deepocean">We <i class="fa fa-2x fa-heart pomegranate"></i> our career paths.</p>
                    </div>
                    <div class="col-xs-12 footer-text">
                        <p>&copy; 2016 <a target="_blank" href="#" title="badapplesoftware"> Bad Apple Software</a>. All Rights Reserved.</p>
                    </div>
                </div>
                <!-- /.container -->
            </section>
            <!--/#footer-->
            <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>             
            <script type="text/javascript" src="js/bootstrap.min.js"></script>             
            <script type="text/javascript" src="js/plugins.js"></script>
            <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
			<script type="text/javascript" src="js/bskit-scripts.js"></script>
	</body>
</html>