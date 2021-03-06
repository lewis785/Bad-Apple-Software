<!DOCTYPE html>
<?php 
include "../php/core/verify.php";
?>
<html lang="en">
<head> 
    <meta charset="utf-8"> 
    <title>Qualifications</title>
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
    <script src="../js/storeGrade.js"></script>
</head>
<!--/head-->
<body data-spy="scroll" data-target="nav"> 
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
                        <li class="active nav-item">
                            <a href="employmenthistory.php" class="littlestuff-hover">Employment</a>
                        </li>
                        <li class="nav-item">
                            <a href="qualifications.php" class="littlestuff-hover">Qualifications</a>
                        </li>                             
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="true" href="profile.php">Profile<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
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
                                <!-- still to be made -->
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="../php/core/signout.php" class="littlestuff-hover">Log out</a>
                                </li>
                            </ul>                                 
                        </li>
                    </ul>
                </div>
                <!--// End collapse navbar -->
            </div>
            <!--// End fluid container  -->
        </nav>
        <!--// End nav -->
    </header>

<div class="mask">
   <img href="../images/current.png" />
</div>

<div class="row contact-wrap"> 
   <div class="col-md-8 col-md-offset-2">


    <div class="middle-bit">
       <div class="mask">
          <img href="../images/current.png" />
      </div>

      <div class="row contact-wrap"> 
          <div class="col-md-8 col-md-offset-2">
                 <div class="underlined-title">
                    <h1>Your Qualification History</h1>
                    <?php 
                    include "../php/qualifications/getPoints.php";
                    ?>
                </div>
            <div class="panel panel-default" id="qualificationPanel">
               <table class="table" id="currentQualifications">
                   <thead>
                       <tr>
                           <th>Subject</th>
                           <th>Qualification</th>
                           <th>Grade</th>
                       </tr>
                   </thead>
                   <tbody>

                      <?php include "../php/qualifications/displayGrades.php" ?>

                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
</div>
</div>

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