<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title> Build Profile </title>
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
        <!-- core JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="../js/bootstrap/npm.js"></script>
        <script src="../js/bootstrap/bootstrap.js"></script>         
        <script src="../js/bootstrap/jquery.js"></script>
        <script src="../js/bootstrap/bootstrap.min.js"></script>
        <script src="../js/bootstrap/jquery.prettyPhoto.js"></script>
        <script src="../js/bootstrap/jquery.isotope.min.js"></script>
        <script src="../js/bootstrap/main.js"></script>
        <script src="../js/bootstrap/wow.min.js"></script>
    </head>
    <!--/head-->
    <body>
        <header id="header">
            <nav class="navbar navbar-inverse" role="banner">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="home.php">
                            <img src="../images/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#profile" class="dropdown-toggle" data-toggle="dropdown"> Profile <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="disabled">
                                        <a href="#"> Details </a>
                                    </li>
                                    <li class="disabled">
                                        <a href="#"> Qualifications </a>
                                    </li>                                     
                                    <!-- still to be made -->
                                    <li class="disabled">
                                        <a href="#"> Starred Paths </a>
                                    </li>                                     
                                    <!-- still to be made -->
                                    <li class="disabled">
                                        <a href="#"> Log out </a>
                                    </li>                                     
                                    <!-- still to be made -->
                                </ul>
                            </li>
                            <li class="active">
                                <a href="#buildprofile"> Build Profile </a>
                            </li>
                            <li class="disabled">
                                <a href="#choosecareer"> Choose Career </a>
                            </li>
                            <li class="disabled">
                                <a href="#careerpathways"> Career Pathways </a>
                            </li>                             
                        </ul>
                    </div>
                </div>
                <!--/.container-->
            </nav>
            <!--/nav-->
        </header>
        <!--/header-->
        <section id="contact-page">
            <div class="center"> 
                <h2> Please continue by entering your Qualifications </h2>
                <p class="lead"><u><a href="#"> Can't Remember qualifications ? SQA online results </a></u></p>
            </div>
            <div class="container-fluid"> 
                <div class="row contact-wrap"> 
                    <div class="col-md-6 col-md-offset-3">
                        <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="#"> 
                            <!-- still to be made -->
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#standardgrade"> Standard Grades </a></h4>
                                    </div>
                                    <div id="standardgrade" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="input-group">
                                                <div class="form-group">
                                                    <label> Subject * </label>
                                                    <input type="text" name="subject" class="form-control" required="required" placeholder="Enter Subject">
                                                </div>
                                                <div class="form-group">
                                                    <label> Grade * </label>
                                                    <input type="text" name="grade" class="form-control" required="required" placeholder="Enter Grade">
                                                </div>
                                                <button type="submit" action="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add  
                                                    <!-- still to be made -->
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#intermediate"> Intermediates </a></h4>
                                    </div>
                                    <div id="intermediate" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="input-group"> 
                                                <div class="form-group">
                                                    <label> Subject * </label>
                                                    <input type="text" name="subject" class="form-control" required="required" placeholder="Enter Subject">
                                                </div>
                                                <div class="form-group">
                                                    <label> Grade * </label>
                                                    <input type="text" name="grade" class="form-control" required="required" placeholder="Enter Grade">
                                                </div>
                                                <button type="submit" action="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add  
                                                    <!-- still to be made -->
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                 
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#higher"> Highers </a></h4>
                                    </div>
                                    <div id="higher" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="input-group"> 
                                                <div class="form-group">
                                                    <label> Subject * </label>
                                                    <input type="text" name="subject" class="form-control" required="required" placeholder="Enter Subject">
                                                </div>
                                                <div class="form-group">
                                                    <label> Grade * </label>
                                                    <input type="text" name="grade" class="form-control" required="required" placeholder="Enter Grade">
                                                </div>
                                                <button type="submit" action="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add  
                                                    <!-- still to be made -->
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#advhigher"> Advanced Highers </a></h4>
                                    </div>
                                    <div id="advhigher" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="input-group"> 
                                                <div class="form-group">
                                                    <label> Subject * </label>
                                                    <input type="text" name="subject" class="form-control" required="required" placeholder="Enter Subject">
                                                </div>
                                                <div class="form-group">
                                                    <label> Grade * </label>
                                                    <input type="text" name="grade" class="form-control" required="required" placeholder="Enter Grade">
                                                </div>
                                                <button type="submit" action="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add  
                                                    <!-- still to be made -->
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#degree"> Degrees </a></h4>
                                    </div>
                                    <div id="degree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="input-group"> 
                                                <div class="form-group">
                                                    <label> Subject * </label>
                                                    <input type="text" name="subject" class="form-control" required="required" placeholder="Enter Subject">
                                                </div>
                                                <div class="form-group">
                                                    <label> Grade * </label>
                                                    <input type="text" name="grade" class="form-control" required="required" placeholder="Enter Grade">
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control" id="sel1">
                                                        <option>Please select your type of degree</option>
                                                        <option>Associate's Degree</option>
                                                        <option>Bachelor’s Degree</option>
                                                        <option>Master’s Degree</option>
                                                        <option>Doctorate Degree</option>
                                                    </select>
                                                </div>
                                                <button type="submit" action="#" class="btn btn-default">
                                                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add  
                                                    <!-- still to be made -->
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <u><i> Added all of your qualifications ? Click next ! </i></u>
                                    </label>                                     
                                    <br>
                                    <a href="choosecareer.php" class="btn btn-primary"> Next Step </a> 
                                    <!-- still to be made -->
                                </div>
                            </div>                             
                        </form>
                    </div>
                </div>
            </div>             
        </section>         
        <section id="bottom">
            <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="row">
                    <div class="col-md-8 col-sm-6">
                        <div class="widget">
                            <h3>Career Pathways </h3>
                            <p> Made by a group of highly talented individuals. Known as &copy; Bad Apple Software </p>
                        </div>                         
                    </div>
                    <!--/.col-md -->
                </div>
            </div>
        </section>
        <!--/#bottom-->
        <footer id="footer" class="midnight-blue">
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
