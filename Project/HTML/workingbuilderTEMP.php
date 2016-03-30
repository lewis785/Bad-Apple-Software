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
  <script src="//d3js.org/d3.v3.min.js"></script>

    
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//d3js.org/d3.v3.min.js"></script>
<script src="../js/Pathmaker/converter.js"></script>
<script src="../js/Pathmaker/pathway.js"></script>



</head><!--/head-->
<style>
body {
 background-image: none; 
 background-color: lightcyan !important;

}
</style>
<body onload="drawpath(); pathway()">
    
   

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
                <li><a href="workingbuilderTemp.php"> Path </a></li>
                <li><a href="qualifications.php"> Qualifications </a></li> <!-- still to be made -->
                <li class="dropdown">
                  <a href="profile.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class="caret"></span></a>
                  <ul id="nav-drop" class="dropdown-menu">
                    <li><a href="profiledetail.php"> Edit Info </a></li>
                    <li><a href="addgrades.php"> Add Grades </a></li> 
                    <li><a href="addjob.php"> Add Employment </a></li> 
                    <li><a href="#"> Starred Paths </a></li> <!-- still to be made -->
                    <li role="separator" class="divider"></li>
                    <li><a href="../php/Core/signout.php"> Log out </a></li> <!-- still to be made -->
                      

                </ul>
            </li> 
            <li><a href="profile.php"> Home </a></li>  

        </ul>
    </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
</div><!-- End of NavBar-->


  <style>

.node rect {
  cursor: pointer;
  fill: red;
  fill-opacity: 1;
  stroke: #3182bd;
  stroke-width: 2px;
  
  
}

.node text {
  font: 15px sans-serif;
  pointer-events: none;
    
    font-weight: bold;
}

path.link {
  fill: none;
  stroke: red;
  stroke-width: 2px;
}

  </style>

<section id="page-center" class=" col-md-6 col-md-offset-3">


</section>



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