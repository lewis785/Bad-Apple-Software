<!DOCTYPE html>
<html lang="en">

<?php include "../php/alreadyLoggedIn.php" ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Login </title>
    
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
</head><!--/head-->

<body>

    <header id="header">
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container-fluid">
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="home.php"> Home </a></li>
                        <li><a href="login.php"> Login </a></li>                      
                    </ul>
                </div>

            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="page-center" class="col-md-6 col-md-offset-3">

        <div id="center" class="main-section container-fluid">
            <h2> Please login with your Careers Pathway Username and Password </h2>    
            <div class="row contact-wrap"> 
                <form id="login-form" class="contact-form" name="loggin-form" method="post" action="profile.php">

                    <div class="col-md-6 col-md-offset-3">

                        <div class="form-group">
                          <label> Username* </label>
                            <input type="text" name="username" class="form-control glow" required="required" placeholder="Enter Username">
                        </div>

                        <div class="form-group">
                            <label> Password* </label>
                            <input type="Password" name="password" class="form-control glow" required="required" placeholder="Enter Password">
                        </div> 

                        <div class="checkbox">
                            <label><u><i>Remember me</i></u></label>
                            <input type="checkbox" value="remember-me">
                        </div> 

                        <div class="form-group">
                            <button type="submit" name="signin" class="btn btn-primary btn-llg" required="required"> Sign in </button>
                        </div>

                        <!-- still to be made -->
                        
                        <a href="register.php" class="btn btn-primary"> Register </a>  <!-- still to be made -->
                        <br>
                        <label><i><a href="#">Forgotten Password? </a></i>
                    </div>

                </form> 
            </div>
        </div><!--/.container--> 

    </section><!--/#contact-page-->
  

   <!--/#bottom-->

    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 <a target="_blank" href="#" title="badapplesoftware"> Bad Apple Software</a>. All Rights Reserved.
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