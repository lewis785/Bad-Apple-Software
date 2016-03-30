<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"> 
        <title>Register</title>
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
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
        <script src="../js/registervalidate.js"></script>
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->         
        <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    </head>
    <!--/head-->
    <body data-spy="scroll" data-target="nav">
        <header id="header-1" class="soft-scroll header-1">
            <nav class="main-nav navbar-fixed-top headroom headroom--pinned bg-deco">
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
                                <a href="home.html" class="aqua-hover deepocean">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="login.php" class="aqua-hover deepocean">Login</a>
                            </li>
                            <li class="active nav-item">
                                <a href="#" class="aqua-hover deepocean">Register</a>
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
        <section id="register-page" class="main-section col-md-6 col-md-offset-3">
            <div class="center"> 
                <h2> Please Register an Account below </h2>
            </div>
            <div class="container-fluid m">
                <div class="row contact-wrap"> 
                    <form id="register-form" class="contact-form" name="contact-form" method="post" action="../PHP/createUser.php"> 
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-group">
                                <label> First Name * </label>
                                <input type="text" name="firstname" class="form-control glow" placeholder="Enter Firstname">
                            </div>
                            <div class="form-group">
                                <label> Last Name * </label>
                                <input type="text" name="surname" class="form-control glow" placeholder="Enter Lastname">
                            </div>                             
                            <div class="form-group">
                                <label> Username * </label>
                                <input type="text" name="username" class="form-control glow" placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label> Occupation * </label>
                                <select id="occupationselect" name="occupation" class="form-control">
                                    <option name="NonSelect">Select Occupation</option>
                                    <?php include "../php/displayOccupations.php" ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label> House Number * </label>
                                <input type="text" name="number" class="form-control glow" placeholder="Enter House Number">
                            </div>
                            <div class="form-group">
                                <label> Street Name * </label>
                                <input type="text" name="street" class="form-control glow" placeholder="Enter Street Name">
                            </div>
                            <div class="form-group">
                                <label> Postcode * </label>
                                <input type="text" name="postcode" class="form-control glow" placeholder="Enter PostCode">
                            </div>
                            <div class="form-group">
                                <label> City * </label>
                                <input type="text" name="city" class="form-control glow" placeholder="Enter City">
                            </div>
                            <div class="form-group">
                                <label> Date Of Birth * </label>
                                <input type="Date" name="DoB" class="form-control glow" placeholder="Enter Date of Birth">
                            </div>
                            <div class="form-group">
                                <label> Email * </label>
                                <input type="Email" name="email1" class="form-control glow" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label> Confirm Email * </label>
                                <input type="Email" name="email2" class="form-control glow" placeholder="Enter Email again">
                            </div>
                            <div id="passdiv" class="form-group">
                                <label> Password * </label>
                                <input type="Password" id="pass1" name="pass1" onblur="validatePassword()" class="form-control glow" placeholder="Enter Password">
                            </div>
                            <div class="form-group">
                                <label> Confirm Password * </label>
                                <input type="Password" id="pass2" name="pass2" class="form-control glow" placeholder="Enter Password again">
                            </div>
                            <br> 
                            <div class="form-group">
                                <button type="submit" name="register" class="btn btn-primary" required="required"> Register </button>                                 
                                <!-- still to be made -->
                            </div>                             
                        </div>
                    </form>                     
                    <a href="buildprofile.php" class="btn btn-primary"> Click here too get a run though </a>
                </div>
            </div>
            <!--/.container-->
        </section>
        <!--/#Register-page-->
        <!--// footer -->
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