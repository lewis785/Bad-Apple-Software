<?php

$verified = false;

$link = mysqli_connect('localhost', 'root', 'kandersteg'); 
if (!$link) { 
	die('Could not connect to MySQL: ' . mysqli_connect_error()); 
} 

mysqli_select_db($link,"karate");

if (isset($_COOKIE['lewis'])) {
	$temp = unserialize($_COOKIE['lewis']);
	$verify = mysqli_stmt_init($link);
	mysqli_stmt_prepare($verify, "select count(*) from users where user_name= ? and user_pass = ?");
	mysqli_stmt_bind_param($verify, 'ss', $temp['user'], $temp['pass']);
	mysqli_stmt_execute($verify);

	$result = mysqli_stmt_get_result($verify);
	$count = $result -> fetch_row();

	if ($count[0] == 1) {
		$verified = true;
	}
}

if (isset($_POST['username']) && isset($_POST['password'])) {
	$user = mysqli_real_escape_string($link, $_POST['username']);
	$pass = mysqli_real_escape_string($link, $_POST['password']);

	$encrypt_password = crypt($pass,"Ba24JDAkfjerio892pp309lE");

	$verify = mysqli_stmt_init($link);

	mysqli_stmt_prepare($verify, 'Select count(*) from users where user_name= ? and user_pass= ?');
	mysqli_stmt_bind_param($verify, 'ss', $user, $encrypt_password);   
	mysqli_stmt_execute($verify); 

	$result = mysqli_stmt_get_result($verify);
	$count = $result -> fetch_row();

	if ($count[0] == 1) {
		$temp = array("user" => $user, "pass" => $encrypt_password);
		setcookie("lewis", serialize($temp));
		$verified = true;
	}

}

if (!$verified) {
	// header("Location:http://personal/Webpages/login.html");
	header("Location:http://karate/Webpages/login.html");
	exit();
}








?>