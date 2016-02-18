<?php

include(dirname(__FILE__)."/../Core/connection.php");
include(dirname(__FILE__)."/../Core/validCookie.php");

if($verified){

	if(isset($_POST['QID'])){

		$QID = mysqli_real_escape_string($link, $_POST['QID']);
		
		$deleteQualification = mysqli_stmt_init($link);
		mysqli_stmt_prepare($deleteQualification, "DELETE userqualifications FROM userqualifications 
			INNER JOIN userlogin ON userqualifications.User = userlogin.UserID
			where userqualifications.UserQID= ? and userlogin.UserName= ? and userlogin.Password= ?");
		mysqli_stmt_bind_param($deleteQualification, 'iss', $QID, $temp['user'], $temp['pass']);
		mysqli_stmt_execute($deleteQualification);

		echo json_encode(array("completed"=>true));
	}

}


?>