<!DOCTYPE html>

<?php 
include "../../PHP/Admin/validAdmin.php";
?>

<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<title>Admin Page</title>

<!-- Bootstrap core CSS -->
<link href="../../admincss/bootstrap.css" rel="stylesheet">

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link href="../../admincss/ie10-viewport-bug-workaround.css" rel="stylesheet">

<link href="../../css/admin.css" rel="stylesheet">


<!-- Custom styles for this template -->
<link href="../../admincss/dashboard.css" rel="stylesheet">
<script src="admincss/ie-emulation-modes-warning.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../../js/admins.js"></script>

</head>

<body onload="checkKey()">

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Dashboard</a></li>
          <li><a href="settings.php">Settings</a></li>
          <li><a href="../profile.php">Profile</a></li>
          <li><a href="#">Help</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
          <li><a href="admin.php">Overview</a></li>
          <li class="active"><a href="manageusers.php">Manage Users<span class="sr-only">(current)</span></a></li>
          <li><a href="managewebpage.php">Manage Webpages</a></li>
          <li><a href="settings.php">Manage Admin Settings</a></li>
        </ul>
      </div>

      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <h1 class="page-header">Administrator Dashboard</h1>
        
        <div class="col-lg-12">
          <div class="col-lg-6">
            <div class="input-group">
              <input id="usersearch" type="text" class="form-control" placeholder="Search users...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
              <div id="numuser"><span>Number of users <div id="num"></div></span></div>
            </div><!-- /input-group -->
          </div><!-- /.col-lg-6 -->
        </div>

        <div class="table-responsive col-lg-12">
          <table id="usertable" class="table table-striped">
            <thead>
              <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Join On</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                  <?php include "../../php/admin/retrieveUsers.php"; ?>
              </tr>
            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="Dashboard%20Template%20for%20Bootstrap_files/jquery.js"></script>

    <script src="Dashboard%20Template%20for%20Bootstrap_files/bootstrap.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="Dashboard%20Template%20for%20Bootstrap_files/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Dashboard%20Template%20for%20Bootstrap_files/ie10-viewport-bug-workaround.js"></script>


  </body></html>