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

    <title> Display Qualifications </title>
    
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
    <link href="../css/footer.css" rel="styleshet">
    
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

    <script src="../js/storeGrade.js"></script>
    
    <!-- Code for loading user information -->

</head><!--/head-->

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

                <li><a href="workingbuilderTemp.php"> Path </a></li>
                <li><a href="qualifications.php"> Qualifications </a></li> <!-- still to be made -->
                <li class="dropdown">
                  <a href="profile.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profile <span class="caret"></span></a>
                  <ul id="nav-drop" class="dropdown-menu">
                    <li><a href="profiledetail.php"> Edit Info </a></li>
                    <li><a href="addgrades.php"> Add Grades </a></li> 
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


<section id="page-center" class=" col-md-6 col-md-offset-3">
 <div id="center" class="main-section container-fluid">
     <h2> Current Qualifications</h2>    

     <div class="row contact-wrap"> 
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <table id="currentQualifications"class="table">
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Qualification</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php include "../php/Qualifications/displayGrades.php" ?>

                    </tbody>
                </table>
            </div>

            <table>
                <tr>
                    <td >
                        <div id="deletediv" class="form-group col-md-10 col-md-offset-2">
                            <label> Delete Grade </label>
                            <select id="gradedelete" name="grade" class="form-control col-md-6">
                                <option value="NoneSelect">Select Grade</option>
                                <?php include"../php/Qualifications/displayGradeLevel.php"; ?>
                            </select>

                        </div>
                    </td>
                    <td>
                        <button onclick="deleteGrade()" id="storeGrade" class="btn btn-primary"> Delete Grade </button>
                    </td>
                </tr>
            </table>

        </div>
    </div>
</div><!--/.container-->
</section><!--/#contact-page-->





</body>
</html>