<?php

include "Core/connection.php";

$url = "//Project/html/tester.php";

if (!empty($_POST['username']) && !empty($_POST['pass1']) && isset($_POST['pass2']) && isset($_POST['firstname']) && !empty($_POST['surname']) && !empty($_POST['DoB'])  && !empty(['email1']) && !empty(['email2']) ) {
	

	$user = mysqli_real_escape_string($link, $_POST['username']);
	$pass = mysqli_real_escape_string($link, $_POST['pass1']);
	$pass2 = mysqli_real_escape_string($link, $_POST['pass2']);
	$first = mysqli_real_escape_string($link, $_POST['firstname']);
	$surname = mysqli_real_escape_string($link, $_POST['surname']);
	$occupation = mysqli_real_escape_string($link, $_POST['occupation']);
	$dob = mysqli_real_escape_string($link, $_POST['DoB']);
	$email = mysqli_real_escape_string($link, $_POST['email1']);
	$confemail = mysqli_real_escape_string($link, $_POST['email2']);
	$number = mysqli_real_escape_string($link, $_POST['number']);
	$street = mysqli_real_escape_string($link, $_POST['street']);
	$postcode = mysqli_real_escape_string($link, $_POST['postcode']);
	$city = mysqli_real_escape_string($link, $_POST['city']);
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

				if(strcmp($email, $confemail) == 0){




					$getOccupationId = mysqli_stmt_init($link);
					mysqli_stmt_prepare($getOccupationId, 'Select OccupationID from occupations where OccupationName= ? ');
					mysqli_stmt_bind_param($getOccupationId, 's', $occupation);   
					mysqli_stmt_execute($getOccupationId); 
					$result = mysqli_stmt_get_result($getOccupationId);
					$occupationresult = $result -> fetch_row();

					echo $occupationresult[0];

					$getAccessID = mysqli_stmt_init($link);
					mysqli_stmt_prepare($getAccessID, 'Select AccessID from useraccess where AccessName= ? ');
					mysqli_stmt_bind_param($getAccessID, 's', $accessname);   
					mysqli_stmt_execute($getAccessID); 
					$result = mysqli_stmt_get_result($getAccessID);
					$accessresult = $result -> fetch_row();
					$access = $accessresult[0];

					$date = date('Y-m-d');
					$cryptpass = crypt($pass,"Ba24JDAkfjerio892pp309lE");

					$newlogin = mysqli_stmt_init($link);
					mysqli_stmt_prepare($newlogin, 'INSERT INTO userlogin (Username, Password, DateJoined, EmailAddress, AccessLevel ) VALUES (?, ?, ?, ?, ?)');
					mysqli_stmt_bind_param($newlogin, 'ssssi', $user, $cryptpass, $date, $email, $access);   
					mysqli_stmt_execute($newlogin);

					$last_id = mysqli_insert_id($link);

					if ($last_id != 0){
						$newuserinfo = mysqli_stmt_init($link);
						mysqli_stmt_prepare($newuserinfo, 'INSERT INTO userdetails (User, FirstName, Surname, DateOfBirth, Occupation) VALUES (?, ?, ?, ?, ?)');
						mysqli_stmt_bind_param($newuserinfo, 'isssi', $last_id, $first, $surname, $dob, $occupation);   
						mysqli_stmt_execute($newuserinfo);

						$last_id = mysqli_insert_id($link);

						$newaddress = mysqli_stmt_init($link);
						mysqli_stmt_prepare($newaddress, 'INSERT INTO useraddress (AddressID, HouseNumberName, StreetName, PostCode , City) VALUES (?, ?, ?, ?, ?)');
						mysqli_stmt_bind_param($newaddress, 'issss', $last_id, $number, $street, $postcode, $city);   
						mysqli_stmt_execute($newaddress);
						
					}
					header('Location: http://badapple/HTML/login.php');

				}
				else
				{
					header('Location: http://badapple/HTML/register.php');
				}
			}
			else
			{
				header('Location: http://badapple/HTML/register.php');
			}
		}


	}
	else
	{
		echo "User already exists";
	}
}
else
{
	header('Location: http://badapple/HTML/register.php');
}

mysqli_close($link);
?>