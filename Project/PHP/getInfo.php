<?php

include 'connection.php';


if (isset($_COOKIE['confirmation'])) {
	$temp = unserialize($_COOKIE['confirmation']);
	$verify = mysqli_stmt_init($link);
	mysqli_stmt_prepare($verify, "select count(*) from userlogin where UserName= ? and Password = ?");
	mysqli_stmt_bind_param($verify, 'ss', $temp['user'], $temp['pass']);
	mysqli_stmt_execute($verify);

	$result = mysqli_stmt_get_result($verify);
	$count = $result -> fetch_row();


	if ($count[0] == 1) {

		$getUser = mysqli_stmt_init($link);
		
		mysqli_stmt_prepare($getUser, "SELECT * FROM userlogin INNER JOIN userdetails ON userlogin.ID = userdetails.UserID
			INNER JOIN useraddress ON userdetails.Address = useraddress.AddressID
			WHERE userlogin.UserName = ? and userlogin.Password = ?");
		mysqli_stmt_bind_param($getUser, 'ss', $temp['user'], $temp['pass']);   
		mysqli_stmt_execute($getUser); 

		$result = mysqli_stmt_get_result($getUser);

		while($row = mysqli_fetch_assoc($result)){
			echo json_encode(array("user"=>$row['UserName'],"joined"=>$row['DateJoined'],"firstname"=>$row['Firstname'],
				"surname"=>$row['Surname'],"dob"=>$row['DateOfBirth'],"email"=>$row['EmailAddress'],
				"number"=>$row['HouseNumberName'], "street"=>$row['StreetName'], "postcode"=>$row['PostCode'],
				"city"=>$row['City']));
		}

	}
}


?>