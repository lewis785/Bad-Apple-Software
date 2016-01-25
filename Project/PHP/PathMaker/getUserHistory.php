<?php

include 'connection.php';
include 'validCookie.php';

if(!$verified){
	exit();
}

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

?>