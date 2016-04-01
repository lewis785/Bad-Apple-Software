<!DOCTYPE html>
<?php 
include "../PHP/Core/verify.php";
include"../php/wizard/validWizard.php";
?>
<html lang="en">
<head>
    <meta charset="utf-8"> 
    <title>Make Account</title>
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
    <!-- Code for loading user information -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/accountwizard.js"></script>
    <script src="../js/storeGrade.js"></script>
    <script src="../js/career.js"></script>

    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
</head><!--/head-->
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
                        <li class="nav-item disable">
                            <a href="login.php" class="littlestuff-hover">Login</a>
                        </li>
                        <li class="active nav-item disable">
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

    <div class="middle-bit">
        <div class="mask">
        	<img href="../images/current.png" />
        </div>
        <div class="col-sm-10 col-sm-offset-1">
           <div class="underlined-title">
                <h1>Please Provide Further Details</h1>
                <hr class="headings">
                <h2>Accurate Data gives Reliable Results</h2>
            </div>
        </div>    
        <section id="page-center" class=" col-md-6 col-md-offset-3">
            <div id="center" class="main-section container-fluid">  

                <ul id="progress-bar" class="col-md-12">
                    <li class="col-md-3 "><div id="detailcircle"class="current">Detail</div></li>
                    <li class="col-md-3"><div id="addresscircle" class="incomplete">Address</div></li>
                    <li class="col-md-3"><div id="qualificationcircle" class="incomplete">Qualifications</div></li>
                    <li class="col-md-3"><div id="employmentcircle" class="incomplete">Employment</div></li>
                </ul>

                <div id="formarea" class="col-md-12">

                    <div class="form-group">
                        <div id="firstname">
                            <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter Firstname">
                        </div>
                    </div>
                    <div class="form-group">
                        <div id="surname">
                            <input type="text" name="surname" class="form-control" id="surname" placeholder="Enter Lastname">
                        </div>
                    </div>    

                    <div class="form-group">
                        <div id="occupation">
                            <select id="occupationselect" name="occupation" class="form-control">
                                <option value="NonSelect">Select Occupation</option>
                                <?php include "../php/displayOccupations.php" ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div id="DOB">
                            <input type="Date" name="DoB" class="form-control" id="DOB" placeholder="Enter Date of Birth">
                        </div>
                    </div>
                </div>

                <button class="btn btn-llg bg-headings" id="nextbtn" onclick="nextform()"> Next </button>

            </div><!--/.container-->
        </section><!--/#contact-page-->
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
<?php include"../php/wizard/correctPage.php"; ?>
</body>
</html>
