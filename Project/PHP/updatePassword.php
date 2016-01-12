<?php

include "connection.php";

if (isset($_COOKIE['confirmation'])) {
	if ( !empty($_POST['password']) && !empty($_POST['confpassword']) ) {

		$password = mysqli_real_escape_string($link, $_POST['password']);
		$confpass = mysqli_real_escape_string($link, $_POST['confpassword']);

		if (strcmp($password, $confpass) == 0){

			$temp = unserialize($_COOKIE['confirmation']);
			$getId = mysqli_stmt_init($link);
			mysqli_stmt_prepare($getId, "select ID from userlogin where UserName= ? and Password = ?");
			mysqli_stmt_bind_param($getId, 'ss', $temp['user'], $temp['pass']);
			mysqli_stmt_execute($getId);

			$result = mysqli_stmt_get_result($getId);

			while($row = mysqli_fetch_assoc($result)){
				$id = $row['ID'];
			}

			$updatePassword = mysqli_stmt_init($link);
			mysqli_stmt_prepare($updatePassword, 'UPDATE userlogin SET Password = ? where ID =?');
			mysqli_stmt_bind_param($updatePassword, 'si', $password, $id);   
			mysqli_stmt_execute($updatePassword); 
		}
	}
}



?>