<?php

include "connection.php";

if (isset($_COOKIE['confirmation'])) {
	if ( !empty($_POST['oldpassword']) && !empty($_POST['newpassword']) && !empty($_POST['confpassword']) ) {


		$temp = unserialize($_COOKIE['confirmation']);

		$oldpass = mysqli_real_escape_string($link, $_POST['oldpassword']);
		$password = mysqli_real_escape_string($link, $_POST['newpassword']);
		$confpass = mysqli_real_escape_string($link, $_POST['confpassword']);

		$checkPassword = mysqli_stmt_init($link);
		mysqli_stmt_prepare($checkPassword, "select count(*) from userlogin where UserName= ? and Password = ?");
		mysqli_stmt_bind_param($checkPassword, 'ss', $temp['user'], $oldpass);
		mysqli_stmt_execute($checkPassword);

		$result = mysqli_stmt_get_result($verify);
		$count = $result -> fetch_row();

		if ($count[0] == 1){
			if (strcmp($password, $confpass) == 0){

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
				mysqli_stmt_bind_param($updatePassword, 'si', $newpassword, $id);   
				mysqli_stmt_execute($updatePassword); 
			}
		}


	}
}



?>