<?php

include "connection.php";

$url = "//Project/html/tester.html";

if (!empty($_POST['username']) && !empty($_POST['pass1']) && isset($_POST['pass2']) && isset($_POST['firstname']) && !empty($_POST['surname']) && !empty($_POST['DoB']) ) {
	

	$user = mysqli_real_escape_string($link, $_POST['username']);
	$pass = mysqli_real_escape_string($link, $_POST['pass1']);
	$pass2 = mysqli_real_escape_string($link, $_POST['pass2']);
	$first = mysqli_real_escape_string($link, $_POST['firstname']);
	$surname = mysqli_real_escape_string($link, $_POST['surname']);
	$dob = mysqli_real_escape_string($link, $_POST['DoB']);

	$checkusername = mysqli_stmt_init($link);
	mysqli_stmt_prepare($checkusername, 'Select count(*) from users where user_name= ? ');
	mysqli_stmt_bind_param($checkusername, 's', $user);   
	mysqli_stmt_execute($checkusername); 

	$result = mysqli_stmt_get_result($checkusername);
	$count = $result -> fetch_row();

	if ($count[0] == 0) {

		if (strcmp($pass, $pass2) == 0){


			$cryptpass = crypt($pass,"Ba24JDAkfjerio892pp309lE");

			$newuser = mysqli_stmt_init($link);
			mysqli_stmt_prepare($newuser, 'INSERT INTO users (user_name, user_pass) VALUES (?, ?)');
			mysqli_stmt_bind_param($newuser, 'ss', $user, $cryptpass);   
			mysqli_stmt_execute($newuser);

		}

		$last_id = mysqli_insert_id($link);

		if ($last_id != 0){
			$newuserinfo = mysqli_stmt_init($link);
			mysqli_stmt_prepare($newuserinfo, 'INSERT INTO userinfo (Info_Id, Firstname, Surname, DoB) VALUES (?, ?, ?, ?)');
			mysqli_stmt_bind_param($newuserinfo, 'isss', $last_id, $first, $surname, $dob);   
			mysqli_stmt_execute($newuserinfo);
		}

	}
	else
	{
		echo "User already exists";
	}
}

header('Location: http://badapple/HTML/tester.html');
?>