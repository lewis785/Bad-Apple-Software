<?php

include "validAdmin.php";
include(dirname(__FILE__)."/../Core/connection.php");
include(dirname(__FILE__)."/../Core/validCookie.php");

if($verified){

	$userid = $_GET['userid'];

	$getUser = mysqli_stmt_init($link);

	mysqli_stmt_prepare($getUser, "SELECT * 
		FROM userlogin INNER JOIN userdetails ON userlogin.UserID = userdetails.User
		INNER JOIN useraddress ON userdetails.Address = useraddress.AddressID
		WHERE userlogin.UserID = ? ");
	mysqli_stmt_bind_param($getUser, 's', $userid);   
	mysqli_stmt_execute($getUser); 
}
mysqli_close($link);
?>