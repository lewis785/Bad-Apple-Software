<?php

include 'connection.php';
include 'validCookie.php';

if ($verified)
{

	$delete = mysqli_stmt_init($link);
	mysqli_stmt_prepare($delete, "delete from userlogin where Username= ? and Password = ?");
	mysqli_stmt_bind_param($delete, 'ss', $temp['user'], $temp['pass']);
	mysqli_stmt_execute($delete);
	echo "User Deleted";
	header("Location:http://badapple/HTML/login.php");

}
else
{
	echo "No cookie present";
}

?>
