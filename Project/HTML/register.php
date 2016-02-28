<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Register </title>
    
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

    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    <script src="../js/registervalidate.js"></script>

    <script src="../js/loadUser.js"></script>


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
                            <input type="Password" id="pass1" name="pass1"  onblur="validatePassword()" class="form-control glow" placeholder="Enter Password">
                        </div>

                        <div  class="form-group">
                            <label> Confirm Password * </label>
                            <input type="Password" id="pass2" name="pass2" class="form-control glow" placeholder="Enter Password again">
                        </div>

                        <br> 

                        <div class="form-group">
                            <button type="submit" name="register" class="btn btn-primary" required="required"> Register </button>  <!-- still to be made -->
                        </div> 

                    </div>
                </form> 

                <a href="buildprofile.php" class="btn btn-primary"> Click here too get a run though </a>
            </div>
        </div><!--/.container-->

    </section><!--/#Register-page-->
    
    <!--/#bottom-->


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