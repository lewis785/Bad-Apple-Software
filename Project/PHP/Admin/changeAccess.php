<?php

include "validAdmin.php";
include(dirname(__FILE__)."/../Core/connection.php");

if(isset($_POST['userID']) && isset($_POST['newAccess']))
{
	$newAccess = $_POST['newAccess'];
	$userID = $_POST['userID'];

	$currentUserAccess = mysqli_stmt_init($link);
	mysqli_stmt_prepare($currentUserAccess, "SELECT  useraccess.AccessLevel FROM userlogin
		INNER JOIN useraccess ON userlogin.AccessLevel = useraccess.AccessID
		WHERE UserID = ?");  
	mysqli_stmt_bind_param($currentUserAccess, 'i', $userID);   
	mysqli_stmt_execute($currentUserAccess); 
	$result = mysqli_stmt_get_result($currentUserAccess);
	$user = $result -> fetch_row();


	$currentAdminAccess = mysqli_stmt_init($link);
	mysqli_stmt_prepare($currentAdminAccess, "SELECT  useraccess.AccessLevel FROM userlogin
		INNER JOIN useraccess ON userlogin.AccessLevel = useraccess.AccessID
		WHERE UserName = ? AND Password = ?");  
	mysqli_stmt_bind_param($currentAdminAccess, 'ss', $temp['user'], $temp['pass']);   
	mysqli_stmt_execute($currentAdminAccess); 
	$result = mysqli_stmt_get_result($currentAdminAccess);
	$admin = $result -> fetch_row();


	if ($admin[0] > $user[0])
	{
		$getAccessID = mysqli_stmt_init($link);
		mysqli_stmt_prepare($getAccessID, "SELECT AccessID, AccessLevel FROM useraccess WHERE AccessName = ?");  
		mysqli_stmt_bind_param($getAccessID, 's', $newAccess);   
		mysqli_stmt_execute($getAccessID); 
		$result = mysqli_stmt_get_result($getAccessID);
		$Access = $result -> fetch_row();

		echo $Access[0];
		$updateUserAccess = mysqli_stmt_init($link);
		mysqli_stmt_prepare($updateUserAccess, 'UPDATE userlogin SET AccessLevel = ?
			where UserID = ?');
		mysqli_stmt_bind_param($updateUserAccess, 'ii', $Access[0], $userID );   
		mysqli_stmt_execute($updateUserAccess); 
	}

}

?>