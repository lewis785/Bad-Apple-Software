<?php

$verified = false;

if (isset($_COOKIE['confirmation'])) {

	$temp = unserialize($_COOKIE['confirmation']);
	$verify = mysqli_stmt_init($link);
	mysqli_stmt_prepare($verify, "select count(*) from userlogin where UserName= ? and Password = ?");
	mysqli_stmt_bind_param($verify, 'ss', $temp['user'], $temp['pass']);
	mysqli_stmt_execute($verify);

	$result = mysqli_stmt_get_result($verify);
	$count = $result -> fetch_row();


	if ($count[0] == 1) {
		$verified = true;
	}

}

?>