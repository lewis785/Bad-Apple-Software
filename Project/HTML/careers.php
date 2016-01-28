<!DOCTYPE html>

<?php 
include "../PHP/verify.php";
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Careers </title>
    
    <!-- core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <link href="../css/boostrap.css" rel="stylesheet">
    <link href="../css/boostrap-theme.css" rel="stylesheet">
    <link href="../css/boostrap-theme.min.css" rel="stylesheet">
        <link href="../css/home.css" rel="stylesheet">

    
    <!-- core JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/Bootstrap/npm.js"></script>
    <script src="../js/Bootstrap/bootstrap.js"></script>  
    <script src="../js/Bootstrap/jquery.js"></script>
    <script src="../js/Bootstrap/bootstrap.min.js"></script>
    <script src="../js/Bootstrap/jquery.prettyPhoto.js"></script>
    <script src="../js/Bootstrap/jquery.isotope.min.js"></script>
    <script src="../js/Bootstrap/main.js"></script>
    <script src="../js/Bootstrap/wow.min.js"></script>
    
    <!-- Code for loading user information -->
    <script src="../js/loadUser.js"></script>
    <script src="../js/popup.js"></script>


</head><!--/head-->

<!--<body onload="loadInfo()"> -->

    <header id="header">
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container-fluid">                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="profile.php" class="dropdown-toggle" data-toggle="dropdown"> Profile <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="profiledetail.php"> Edit Info </a></li>
                                <li><a href="#"> Qualifications </a></li> <!-- still to be made -->
                                <li><a href="#"> Starred Paths </a></li> <!-- still to be made -->
                                <li><a href="../php/signout.php"> Log out </a></li> <!-- still to be made -->
                            </ul>
                        </li>  
                        <li><a href="profile.php"> Home </a></li>                   
                    </ul>
                </div>

            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="contact-page">
      <div id = "column1" class="container-fluid">
          <h2> Build Your Profile </h2>

            <div class="row contact-wrap"> 
                <div class="col-md-6 col-md-offset-3">

                    <ul class="list-group">
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Joined</strong></span> <div id="joined">01/01/01</div> </li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Name</strong></span> <div id="name"> John Smith</div></li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Date of Birth</strong></span> <div id="dob">01/01/01</div> </li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Email</strong></span> <div id="email">example@examp.com</div> </li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Address</strong></span> <div id="address">123 Fake Street</div> </li>
                    </ul> 

                    <br>    
                    <a id="popin" class="btn btn-primary"> Delete my Account </a>  <!-- still to be made -->
                    <p>
                </div>
            </div>

            <div id="popup"> 
                Hello world whats up
                <a href="../php/delete.php" id="popin" class="btn btn-primary"> Confirm Delete</a>
            </div>
        </div><!--/.container-->




    </section><!--/#contact-page-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 <a target="_blank" href="#" title="badapplesoftware"> Bad Apple Software</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right"> Technologies used :
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>PHP6</li>
                        <li>GIMP</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

</body>
</html>