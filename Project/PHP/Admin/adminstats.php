<?php

include "validAdmin.php";
include(dirname(__FILE__)."/../Core/connection.php");

$numusers = mysqli_stmt_init($link);
mysqli_stmt_prepare($numusers, "select count(*) from userlogin");
mysqli_stmt_execute($numusers);
$result = mysqli_stmt_get_result($numusers);
$count = $result -> fetch_row();

$numofusers = $count[0];


$numqualifications = mysqli_stmt_init($link);
mysqli_stmt_prepare($numqualifications, "select count(*) from userqualifications");
mysqli_stmt_execute($numqualifications);
$result = mysqli_stmt_get_result($numqualifications);
$count = $result -> fetch_row();

$numofqualifications = $count[0];


echo "<div class='col-md-12'> The number of users currently in the Database are: ".
		$numofusers.
	 "</div>".
	 "<div class='col-md-12'>".
		"The number of qualifications currently in the Database are: ".$numofqualifications.
	 "</div>";



?>