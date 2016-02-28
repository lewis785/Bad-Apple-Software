<?php

include "../php/Core/connection.php";

$handle = @fopen("../Database/nameslist.txt", "r");

$numtogenerate = 1000;

$file = fopen("C:\Users\Lewis\Documents\GitHub\Bad-Apple-Software\Project\Database\users.txt","w");


$names[]=[];


while (!feof($handle))
{
	$buffer = fgets($handle);
	array_push($names, $buffer );
}

$length = sizeof($names);

function generateRandomString($length) {
	$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}

function generateRandomMixed($length) {
	$valid = false;

	while(!$valid){
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}


		$uppercase = preg_match('@[A-Z]@', $randomString);
		$lowercase = preg_match('@[a-z]@', $randomString);
		$numbercheck    = preg_match('@[0-9]@', $randomString);
		
		if($uppercase || $lowercase || $numbercheck || strlen($randomString) >= 8) {
			$valid = true;
		}
	}
	return $randomString;
}

function generateRandomInt($length) {
	$characters = '0123456789';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}


for($x=0; $x < $numtogenerate; $x++){

	$ran = rand(0,$length-1);
	if ($ran == 0)
		$ran++;
	$first = trim($names[$ran]);

	$ran = rand(0,$length-1);
	if ($ran == 0)
		$ran++;

	$surname = trim($names[$ran]);
	$user = $first.generateRandomInt(4);
	$password = generateRandomMixed(10);
	$cryptpass = crypt($password,"Ba24JDAkfjerio892pp309lE");
	$occupation = rand(1,7);
	$dob = rand(1970,2005)."/".rand(1,12)."/".rand(1,28);
	$email = trim($user)."@".strtolower(generateRandomString(6)).".co.uk";
	$number = rand(1,100);
	$postcode = strtoupper(generateRandomString(2)).rand(1,9);

	$ran = rand(0,$length-1);
	if ($ran == 0)
		$ran++;
	$street = $names[$ran]."Street";

	$ran = rand(0,$length-1);
	if ($ran == 0)
		$ran++;
	$city = $names[$ran];

	$date = date('Y-m-d');
	$access = 1;
	

	// echo "{".$first." ".$surname." ".$user." ".$cryptpass." ".$occupation." ".$dob." ".$email." ".$number." ".$street." ".$city." ".$postcode."} <br>";

	
	$checkusername = mysqli_stmt_init($link);
	mysqli_stmt_prepare($checkusername, 'Select count(*) from userlogin where UserName= ? ');
	mysqli_stmt_bind_param($checkusername, 's', $user);   
	mysqli_stmt_execute($checkusername); 

	$result = mysqli_stmt_get_result($checkusername);
	$count = $result -> fetch_row();

	// echo $count[0];

	if ($count[0] == 0) {

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


			fwrite($file,"( ".$first." ".$surname.") {".$user." ".$password."}\n");

		}


	}

}



fclose($file);

?>