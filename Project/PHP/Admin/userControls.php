<?php

include "validAdmin.php";
include(dirname(__FILE__)."/../Core/connection.php");

if($verified){

	$userid = $_GET['userid'];

	$userControls = mysqli_stmt_init($link);

	mysqli_stmt_prepare($userControls, "SELECT * 
		FROM userlogin INNER JOIN userdetails ON userlogin.UserID = userdetails.User
		INNER JOIN useraddress ON userdetails.Address = useraddress.AddressID
		WHERE userlogin.UserID = ? ");
	mysqli_stmt_bind_param($userControls, 'i', $userid);   
	mysqli_stmt_execute($userControls); 

	$result = mysqli_stmt_get_result($userControls);
	

	$user = mysqli_fetch_assoc($result);
	if(!empty($user))
	{
		echo "<ul><li class='list-group-item text-right'><span class='pull-left'><strong>User ID</strong></span> <div id='userid'>".$user["UserID"]."</div></li>
		<li class='list-group-item text-right'><span class='pull-left'><strong>Username</strong></span> <div id='username'>".$user["UserName"]."</div></li>
		<li class='list-group-item text-right'><span class='pull-left'><strong>Firstname</strong></span> <div id='joined'>".$user["FirstName"]."</div></li>
		<li class='list-group-item text-right'><span class='pull-left'><strong>Surname</strong></span> <div id='joined'>".$user["Surname"]."</div></li>
		<li class='list-group-item text-right'><span class='pull-left'><strong>Email</strong></span> <div id='joined'>".$user["EmailAddress"]."</div></li>
		<li class='list-group-item text-right'><span class='pull-left'><strong>Joined</strong></span> <div id='joined'>".$user["DateJoined"]."</div></li>
		</ul>";

		echo "<div style='padding-top: 20px' class='col-sm-10'>
		<div class='col-sm-6 col-sm-offset-3'>
		<button class='btn-primary btn-lg'>Reset Password</button>
		</div>
		<div class'col-sm-6 col-sm-offset-3'> 
		<button class='btn-warning btn-lg' onclick='deleteUser()'>Delete Account</button>
		</div>
		</div>";
	}




}
mysqli_close($link);
?>