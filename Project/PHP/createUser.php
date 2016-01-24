<?php

include "connection.php";

$url = "//Project/html/tester.html";

if (!empty($_POST['username']) && !empty($_POST['pass1']) && isset($_POST['pass2']) && isset($_POST['firstname']) && !empty($_POST['surname']) && !empty($_POST['DoB'])  && !empty(['email1']) && !empty(['email2']) ) {
	

	$user = mysqli_real_escape_string($link, $_POST['username']);
	$pass = mysqli_real_escape_string($link, $_POST['pass1']);
	$pass2 = mysqli_real_escape_string($link, $_POST['pass2']);
	$first = mysqli_real_escape_string($link, $_POST['firstname']);
	$surname = mysqli_real_escape_string($link, $_POST['surname']);
	$dob = mysqli_real_escape_string($link, $_POST['DoB']);
	$email = mysqli_real_escape_string($link, $_POST['email1']);
	$confemail = mysqli_real_escape_string($link, $_POST['email2']);
	$number = mysqli_real_escape_string($link, $_POST['number']);
	$street = mysqli_real_escape_string($link, $_POST['street']);
	$postcode = mysqli_real_escape_string($link, $_POST['postcode']);
	$city = mysqli_real_escape_string($link, $_POST['city']);


	$checkusername = mysqli_stmt_init($link);
	mysqli_stmt_prepare($checkusername, 'Select count(*) from userlogin where UserName= ? ');
	mysqli_stmt_bind_param($checkusername, 's', $user);   
	mysqli_stmt_execute($checkusername); 

	$result = mysqli_stmt_get_result($checkusername);
	$count = $result -> fetch_row();

	if ($count[0] == 0) {

		if (strcmp($pass, $pass2) == 0){
			if(strcmp($email, $confemail) == 0){

				$date = date('Y-m-d');
				$cryptpass = crypt($pass,"Ba24JDAkfjerio892pp309lE");

				$newlogin = mysqli_stmt_init($link);
				mysqli_stmt_prepare($newlogin, 'INSERT INTO userlogin (Username, Password, DateJoined, EmailAddress ) VALUES (?, ?, ?, ?)');
				mysqli_stmt_bind_param($newlogin, 'ssss', $user, $cryptpass, $date, $email);   
				mysqli_stmt_execute($newlogin);

				$last_id = mysqli_insert_id($link);

				if ($last_id != 0){
					$newaddress = mysqli_stmt_init($link);
					mysqli_stmt_prepare($newaddress, 'INSERT INTO useraddress (AddressID, HouseNumberName, StreetName, PostCode , City) VALUES (?, ?, ?, ?, ?)');
					mysqli_stmt_bind_param($newaddress, 'issss', $last_id, $number, $street, $postcode, $city);   
					mysqli_stmt_execute($newaddress);

					$newuserinfo = mysqli_stmt_init($link);
					mysqli_stmt_prepare($newuserinfo, 'INSERT INTO userdetails (UserID, FirstName, Surname, DateOfBirth, OccupationID, AddressID) VALUES (?, ?, ?, ?, ?, ?)');
					mysqli_stmt_bind_param($newuserinfo, 'isssii', $last_id, $first, $surname, $dob, $last_id, $last_id);   
					mysqli_stmt_execute($newuserinfo);
				}

			}
		}

		header('Location: http://badapple/HTML/login.html');
	}
	else
	{
		echo "User already exists";
	}
}
else
{
	header('Location: http://badapple/HTML/register.html');
}


?>