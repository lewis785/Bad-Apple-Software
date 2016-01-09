<?php

include "connection.php";

if (isset($_COOKIE['confirmation'])) {
	if ( !empty($_POST['firstname']) && !empty($_POST['surname']) && !empty($_POST['DoB'])  && !empty(['email'])) {

		$temp = unserialize($_COOKIE['confirmation']);
		$getId = mysqli_stmt_init($link);
		mysqli_stmt_prepare($getId, "select user_id from users where user_name= ? and user_pass = ?");
		mysqli_stmt_bind_param($getId, 'ss', $temp['user'], $temp['pass']);
		mysqli_stmt_execute($getId);

		$result = mysqli_stmt_get_result($getId);

		while($row = mysqli_fetch_assoc($result)){
			$id = $row['user_id'];
		}


		$first = mysqli_real_escape_string($link, $_POST['firstname']);
		$surname = mysqli_real_escape_string($link, $_POST['surname']);
		$dob = mysqli_real_escape_string($link, $_POST['DoB']);
		$email = mysqli_real_escape_string($link, $_POST['email']);


		$updateUser = mysqli_stmt_init($link);
		mysqli_stmt_prepare($updateUser, 'UPDATE userinfo SET Firstname=?, Surname=?, DoB=?, Email=? where Info_Id=?');
		mysqli_stmt_bind_param($updateUser, 'ssssi', $first, $surname, $dob, $email, $id);   
		mysqli_stmt_execute($updateUser); 


		header('Location: http://badapple/HTML/profile.html');
	}
}

?>