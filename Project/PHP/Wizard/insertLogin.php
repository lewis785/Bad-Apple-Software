<?php
include(dirname(__FILE__)."/../Core/connection.php");

if(!empty($_POST['username']) && !empty($_POST['pass1']) && isset($_POST['pass2']) && !empty(['email']))
{
	
	$user = $_POST['username'];
	$pass =  $_POST['pass1'];
	$pass2 =  $_POST['pass2'];
	$email =  $_POST['email'];
	$accessname = "user";


	$checkusername = mysqli_stmt_init($link);
	mysqli_stmt_prepare($checkusername, 'Select count(*) from userlogin where UserName= ? ');
	mysqli_stmt_bind_param($checkusername, 's', $user);   
	mysqli_stmt_execute($checkusername); 

	$result = mysqli_stmt_get_result($checkusername);
	$count = $result -> fetch_row();

	if ($count[0] == 0) {


		if (strcmp($pass, $pass2) == 0){
			$uppercase = preg_match('@[A-Z]@', $pass);
			$lowercase = preg_match('@[a-z]@', $pass);
			$numbercheck    = preg_match('@[0-9]@', $pass);
			if($uppercase || $lowercase || $numbercheck || strlen($password) >= 8) {

				$date = date('Y-m-d');
				$cryptpass = crypt($pass,"Ba24JDAkfjerio892pp309lE");

				$newlogin = mysqli_stmt_init($link);
				mysqli_stmt_prepare($newlogin, 'INSERT INTO userlogin (Username, Password, DateJoined, EmailAddress, AccessLevel ) VALUES (?, ?, ?, ?, ?)');
				mysqli_stmt_bind_param($newlogin, 'ssssi', $user, $cryptpass, $date, $email, $access);   
				$successful = mysqli_stmt_execute($newlogin);

				if($successful)
					header('Location: ../../HTML/login.php');
				else
					echo "Error occured while inserting";

			}
		}
	}
}

header('Location: ../../HTML/register.php');

?>