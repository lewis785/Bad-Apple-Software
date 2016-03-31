<!DOCTYPE html>
<?php 
include "../PHP/Core/verify.php";
?>
<html lang="en">
<head> 
    <meta charset="utf-8"> 
    <title>Employment</title>
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
        <![endif]-->         
    </head>
    <!--/head-->
    <body data-spy="scroll" data-target="nav"> 
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
                            <a href="profile.php" class="aqua-hover deepocean">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="workingbuilderTemp.php" class="aqua-hover deepocean">Path</a>
                        </li>
                        <li class="active nav-item">
                            <a href="#" class="aqua-hover deepocean">Employment</a>
                        </li>
                        <li class="nav-item">
                            <a href="qualifications.php" class="aqua-hover deepocean">Qualifications</a>
                        </li>                             
                        <li class="nav-item">
                            <a href="index.html" class="deepocean aqua-hover">Contact</a>
                        </li>
                        <li class=" active nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Profile<i class="fa fa-angle-down"></i></a>
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
        <img href="../images/current.png" />
    </div>
    <div class="col-sm-10 col-sm-offset-1">
        <div class="underlined-title">
           <h1 class="deepocean">Your Careers Employment History</h1>
           <hr class="deco">
       </div>
   </div>
   <div class="container">
    <div class="row">
         <!-- Feature Box 1 -->

         <?php include "../php/displayJobs.php" ?>

     </div>
 </div>
 <!--/.container-->
</section>
<!--/#contact-page-->
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
</body>
</html>