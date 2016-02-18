<?php

include "Core/connection.php";
include 'Core/validCookie.php';

$checkAdmin = mysqli_stmt_init($link);

mysqli_stmt_prepare($checkAdmin, "SELECT useraccess.AccessLevel FROM userlogin 
	INNER JOIN useraccess ON userlogin.AccessLevel = useraccess.AccessID
	where userlogin.UserName= ? and userlogin.Password = ? ");  
mysqli_stmt_bind_param($checkAdmin, 'ss', $temp['user'], $temp['pass']);
mysqli_stmt_execute($checkAdmin); 

$result = mysqli_stmt_get_result($checkAdmin);

$access = mysqli_fetch_assoc($result);

if($access['AccessLevel'] > 0 )
	echo '<li><a href="admin.php"> Admin Section </a></li>';



mysqli_close($link);

?>