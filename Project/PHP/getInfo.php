<?php

include 'connection.php';


if (isset($_POST['username'])){

	$user = mysqli_real_escape_string($link, $_POST['username']);

	$getUser = mysqli_stmt_init($link);
	mysqli_stmt_prepare($getUser, "select * FROM userinfo INNER JOIN users ON userinfo.Info_Id = users.user_id WHERE users.user_name = ? ");
	mysqli_stmt_bind_param($getUser, 's', $user);   
	mysqli_stmt_execute($getUser); 

	$result = mysqli_stmt_get_result($getUser);

//INNER JOIN 'users' ON (users.user_id = userinfo.Info_Id)

	while($userinfo = mysqli_fetch_assoc($result)){

		echo "Firstname: ".$userinfo['Firstname']."<br>";
		echo "Surname: ".$userinfo['Surname']."<br>";
		echo "DoB: ".$userinfo['DoB']."<br>";


	}


}



//header("Refresh:0");

?>