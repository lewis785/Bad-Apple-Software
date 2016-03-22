<?php

include "validAdmin.php";
include(dirname(__FILE__)."/../Core/connection.php");


if (isset($_POST['username']) && isset($_POST['userid']))
{

	$name = $_POST['username'];
	$id = $_POST['userid'];

	$admindelete = mysqli_stmt_init($link);
	mysqli_stmt_prepare($admindelete, "DELETE userlogin FROM userlogin WHERE UserName= ? AND UserID = ?");
	mysqli_stmt_bind_param($admindelete, 'si', $name, $id);
	mysqli_stmt_execute($admindelete);
		// echo "User Deleted";

}

mysqli_close($link);
?>
