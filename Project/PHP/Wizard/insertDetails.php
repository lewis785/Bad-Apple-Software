<?php

include(dirname(__FILE__)."/../Core/connection.php");
include(dirname(__FILE__)."/../Core/validCookie.php");


if(isset($_POST['first']) && isset($_POST['surname']) && isset($_POST['dob']) && isset($_POST['occupation'])){

	$firstname =$_POST['first'];
	$surname = $_POST['surname'];
	$dob = $_POST['dob'];
	$occupation = $_POST['occupation']; 

	$insertDetails = mysqli_stmt_init($link);
	mysqli_stmt_prepare($insertDetails, 'INSERT INTO userdetails (User, FirstName, Surname, DateOfBirth, Occupation) VALUES (?, ?, ?, ?, ?)');
	mysqli_stmt_bind_param($insertDetails, 'issss', $user[1], $firstname, $surname, $dob, $occupation);   
	mysqli_stmt_execute($insertDetails);

}

?>