<?php

include(dirname(__FILE__)."/../Core/connection.php");
include(dirname(__FILE__)."/../Core/validCookie.php");

if(isset($_POST["QID"])){
	if($verified){

		$QID = $_POST["QID"];

		mysqli_stmt_prepare($getQualifications, "SELECT userqualifications.UserQID, courses.Course,levels.Level FROM userqualifications 
			INNER JOIN userlogin ON userqualifications.User = userlogin.UserID
			INNER JOIN courses ON userqualifications.Course = courses.CourseID
			INNER JOIN levels ON userqualifications.Level = levels.LevelID
			where userlogin.UserName= ? and userlogin.Password = ? and userqualifications.UserQID = ?");
		mysqli_stmt_bind_param($getQualifications, 'ssi', $temp['user'], $temp['pass'], $QID);   
		mysqli_stmt_execute($getQualifications); 

		$gradearray = array();

		while($row = mysqli_fetch_assoc($gradeslist)){
			$gradearray[] = 
		}
		echo json_encode(array('html'=>));

	}
}







mysqli_close($link);
?>