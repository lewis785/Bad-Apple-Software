<?php
include(dirname(__FILE__)."/../Core/connection.php");
include(dirname(__FILE__)."/../Core/validCookie.php");

if(isset($_POST['number']) && isset($_POST['street']) && isset($_POST['postcode']) && isset($_POST['city'])){

	$number = $_POST['number'];
	$street = $_POST['street'];
	$pc = $_POST['postcode'];
	$city = $_POST['city']; 

	$getAddressID = mysqli_stmt_init($link);
	mysqli_stmt_prepare($getAddresID, "SELECT userdetails.Address FROM userdetails INNER JOIN userlogin ON userlogin.User = userdetails.UserID
		WHERE userlogin.UserName = ? and userlogin.Password = ?");
	mysqli_stmt_bind_param($getAddressID, 'ss', $temp['user'], $temp['pass']);   
	mysqli_stmt_execute($getAddressID); 
	$result = mysqli_stmt_get_result($getUser);
	$num_row = mysql_num_rows($result);

	if($num_row === 1)
	{
		$row = mysqli_fetch_assoc($result)
		$addressID = $row["Address"];

		$insertAddress = mysqli_stmt_init($link);
		mysqli_stmt_prepare($insertAddress, 'INSERT INTO useraddress (AddressID, HouseNumberName, StreetName, PostCode, City) VALUES (?, ?, ?, ?, ?)');
		mysqli_stmt_bind_param($insertAddress, 'issss', $addressID, $number, $street, $pc, $city);   
		mysqli_stmt_execute($insertAddress);

		include"incrementWizard.php";
	}
}

?>