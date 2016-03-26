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
		$result = mysqli_stmt_get_result($getCourses);
		$currentgrade = mysqli_fetch_assoc($result);


		mysqli_stmt_prepare($getCourses, "SELECT Course FROM courses");  
		mysqli_stmt_execute($getCourses); 
		$result = mysqli_stmt_get_result($getCourses);
		
		$courseselections = "";


		while($row = mysqli_fetch_assoc($result))
		{
			$selection = "<select value='".$row["Course"]."'>".$row["Course"]."</select>";
			$courseselections = $courseselections.$selection;
		}








		echo json_encode(array('html'=>$gradeedit));

	}
}







mysqli_close($link);
?>