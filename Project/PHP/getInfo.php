<?php

include 'connection.php';


if (isset($_COOKIE['confirmation'])) {
	$temp = unserialize($_COOKIE['confirmation']);
	$verify = mysqli_stmt_init($link);
	mysqli_stmt_prepare($verify, "select count(*) from users where user_name= ? and user_pass = ?");
	mysqli_stmt_bind_param($verify, 'ss', $temp['user'], $temp['pass']);
	mysqli_stmt_execute($verify);

	$result = mysqli_stmt_get_result($verify);
	$count = $result -> fetch_row();


	if ($count[0] == 1) {

		$getUser = mysqli_stmt_init($link);
		
		mysqli_stmt_prepare($getUser, "select * FROM userinfo INNER JOIN users ON userinfo.Info_Id = users.user_id WHERE users.user_name = ?");
		mysqli_stmt_bind_param($getUser, 's', $temp['user']);   
		mysqli_stmt_execute($getUser); 

		$result = mysqli_stmt_get_result($getUser);

//INNER JOIN 'users' ON (users.user_id = userinfo.Info_Id)

		while($row = mysqli_fetch_assoc($result)){

		echo json_encode(array("user"=>$row['user_name'],"joined"=>$row['joindate'],"firstname"=>$row['Firstname'],"surname"=>$row['Surname'],"dob"=>$row['DoB'],"email"=>$row['Email']));

		}
	}

}



//header("Refresh:0");

?>