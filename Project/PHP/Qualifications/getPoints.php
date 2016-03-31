<?php

include(dirname(__FILE__)."/../Core/connection.php");
include(dirname(__FILE__)."/../Core/validCookie.php");

$getPoints = mysqli_stmt_init($link);
mysqli_stmt_prepare($getPoints, "SELECT UCASPoints FROM userdetails 
	INNER JOIN userlogin ON userdetails.User = userlogin.UserID
	where userlogin.UserName= ? and userlogin.Password = ?");
mysqli_stmt_bind_param($getPoints, 'ss', $temp['user'], $temp['pass']);   
mysqli_stmt_execute($getPoints); 
$result = mysqli_stmt_get_result($getPoints);
$points = $result -> fetch_row();


echo "<span id='pointwrapper' class='col-md-offset-4 col-md-6'>Total UCAS Points: <div id='points'>".$points[0]."</div></span>";


mysqli_close($link);

?>