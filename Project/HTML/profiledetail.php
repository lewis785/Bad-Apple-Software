<!DOCTYPE html>
<?php
include "../PHP/Core/verify.php";
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title> Profile </title>
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
    </head>
    <!--/head-->
    <body onload="loadEditInfo()">
        <div id="navbar">
            <nav id="main-nav" class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <?php include "../PHP/admin/adminButton.php" ?>
                            <li>
                                <a href="workingbuilderTemp.php"> Path </a>
                            </li>
                            <li>
                                <a href="qualifications.php"> Qualifications </a>
                            </li>                             

                            <!-- still to be made -->
                            <li class="dropdown">
                                <a href="profile.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class="caret"></span></a>
                                <ul id="nav-drop" class="dropdown-menu">
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
                            <li>
                                <a href="profile.php"> Home </a>
                            </li>                             
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
        <!-- End of NavBar-->
        <section id="profile-page" class=" col-md-6 col-md-offset-3">
            <div id="center" class="main-section container-fluid">
                <h2> Edit your Details</h2>
                <div class="row contact-wrap"> 
                    <div class="col-md-6 col-md-offset-3">
                        <form id="register-form" class="contact-form" name="contact-form" method="post" action="../PHP/updateUser.php"> 
                            <div>
                                <div class="form-group">
                                    <label> First Name * </label>
                                    <input id="firstn" type="text" name="firstname" class="form-control" required="required" placeholder="Enter Firstname">
                                </div>
                                <div class="form-group">
                                    <label> Last Name * </label>
                                    <input id="lastn" type="text" name="surname" class="form-control" required="required" placeholder="Enter Lastname">
                                </div>                                 
                                <div class="form-group">
                                    <label> Date Of Birth * </label>
                                    <input id="dob" type="Date" name="DoB" class="form-control" required="required" placeholder="Enter Date of Birth">
                                </div>
                                <div class="form-group">
                                    <label> Email * </label>
                                    <input id="email" type="Email" name="email" class="form-control" required="required" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label> House Number * </label>
                                    <input id="number" type="text" name="number" class="form-control" required="required" placeholder="Enter House Number">
                                </div>
                                <div class="form-group">
                                    <label> Street Name * </label>
                                    <input id="street" type="text" name="street" class="form-control" required="required" placeholder="Enter Stret Name">
                                </div>
                                <div class="form-group">
                                    <label> City * </label>
                                    <input id="city" type="text" name="city" class="form-control" required="required" placeholder="Enter City">
                                </div>
                                <div class="form-group">
                                    <label> PostCode * </label>
                                    <input id="postcode" type="text" name="postcode" class="form-control" required="required" placeholder="Enter Postcode">
                                </div>
                                <br> 
                                <div class="form-group">
                                    <button type="submit" name="register" class="btn btn-primary" required="required"> Update </button>                                     
                                    <!-- still to be made -->
                                </div>                                 
                            </div>
                        </form>                         
                        <br> 
                        <label>
                            <u><i> When choosing a password make sure it's easy to remember! </i></u>
                        </label>
                        <br>
                        <a href="updatepassword.php" class="btn btn-primary"> Change Password </a> 
                    </div>
                </div>
            </div>
            <!--/.container-->             
        </section>
        <!--/#contact-page-->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        &copy; 2015 
                        <a target="_blank" href="#" title="badapplesoftware"> Bad Apple Software</a>. All Rights Reserved.
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
        </footer>
        <!--/#footer-->
    </body>
</html>