<?php

include "../core/connection.php";
include '../core/validCookie.php';

if ($verified)
{

	$delete = mysqli_stmt_init($link);
	mysqli_stmt_prepare($delete, "delete userlogin from userlogin where UserName= ? and Password = ?");
	mysqli_stmt_bind_param($delete, 'ss', $temp['user'], $temp['pass']);
	mysqli_stmt_execute($delete);
	echo "User Deleted";
	header("Location: ../../html/login.php");
	
}
else
{
	echo "No cookie present";
}

mysqli_close($link);
?>
