<?php

include "validAdmin.php";
include(dirname(__FILE__)."/../Core/connection.php");

if(isset($_POST['userID']))
{

	$userID = $_POST['userID'];

	$getAccessID = mysqli_stmt_init($link);
	mysqli_stmt_prepare($getAccessID, "SELECT AccessID FROM useraccess WHERE AccessName = 'admin'");   
	mysqli_stmt_execute($getAccessID); 
	$result = mysqli_stmt_get_result($getAccessID);
	$Access = $result -> fetch_row();

	echo $Access[0];
	$updateUserAccess = mysqli_stmt_init($link);
	mysqli_stmt_prepare($updateUserAccess, 'UPDATE userlogin SET AccessLevel = ?
		where UserID = ?');
	mysqli_stmt_bind_param($updateUserAccess, 'ii', $userID, $Access[0]);   
	mysqli_stmt_execute($updateUserAccess); 

}

?>