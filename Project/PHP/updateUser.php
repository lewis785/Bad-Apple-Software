<?php

include "connection.php";

if (isset($_COOKIE['confirmation'])) {
	if ( !empty($_POST['firstname']) && !empty($_POST['surname']) && !empty($_POST['DoB'])  && !empty(['email'])) {

		$temp = unserialize($_COOKIE['confirmation']);
		$getId = mysqli_stmt_init($link);
		mysqli_stmt_prepare($getId, "select ID from userlogin where UserName= ? and Password = ?");
		mysqli_stmt_bind_param($getId, 'ss', $temp['user'], $temp['pass']);
		mysqli_stmt_execute($getId);

		$result = mysqli_stmt_get_result($getId);

		while($row = mysqli_fetch_assoc($result)){
			$id = $row['ID'];
		}


		$first = mysqli_real_escape_string($link, $_POST['firstname']);
		$surname = mysqli_real_escape_string($link, $_POST['surname']);
		$dob = mysqli_real_escape_string($link, $_POST['DoB']);
		$email = mysqli_real_escape_string($link, $_POST['email']);



		$updateLogin = mysqli_stmt_init($link);
		mysqli_stmt_prepare($updateLogin, 'UPDATE userlogin SET EmailAddress = ? where ID =?');
		mysqli_stmt_bind_param($updateLogin, 'si', $email, $id);   
		mysqli_stmt_execute($updateLogin); 


		$updateDetails = mysqli_stmt_init($link);
		mysqli_stmt_prepare($updateDetails, 'UPDATE userdetails SET Firstname=?, Surname=?, DateOfBirth=? where UserID =?');
		mysqli_stmt_bind_param($updateDetails, 'sssi', $first, $surname, $dob, $id);   
		mysqli_stmt_execute($updateDetails); 


		header('Location: http://badapple/HTML/profile.html');
	}
}

?>