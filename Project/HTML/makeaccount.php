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
    <script src="../js/popup.js"></script>


</head><!--/head-->

<body onload="loadInfo()">

    <div id="navbar">
        <nav id="main-nav" class="navbar navbar-default">

        </nav>
    </div><!-- End of NavBar-->


    <section id="page-center" class=" col-md-6 col-md-offset-3">
       <div id="center" class="main-section container-fluid">
           <h2> Account Creation Wizard </h2>    


           <ul id="progress-bar" class="col-md-12">
            <li class="col-md-3 "><div class="current">Detail</div></li>
            <li class="col-md-3"><div class="completed">Address</div></li>
            <li class="col-md-3"><div class="incomplete">Employment</div></li>
            <li class="col-md-3"><div>Qualifications</div></li>
        </ul>

        <div id="formarea">

            <div class="form-group">
                <label> First Name * </label>
                <input type="text" name="firstname" class="form-control glow" placeholder="Enter Firstname">
            </div>
            <div class="form-group">
                <label> Last Name * </label>
                <input type="text" name="surname" class="form-control glow" placeholder="Enter Lastname">
            </div>    

            <div class="form-group">
                <label> Occupation * </label>
                <select id="occupationselect" name="occupation" class="form-control">
                    <option name="NonSelect">Select Occupation</option>
                    <?php include "../php/displayOccupations.php" ?>
                </select>
            </div>

            <div class="form-group">
                <label> Date Of Birth * </label>
                <input type="Date" name="DoB" class="form-control glow" placeholder="Enter Date of Birth">
            </div>

        </div>


        <button class="btn btn-primary" id="nextbtn"> Next </button>





        fslfkjsdflkdsfkjl

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