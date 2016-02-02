<?php

include "connection.php";
include "validCookie.php";

if($verified){

	$getUserGrades = mysqli_stmt_init($link);
	mysqli_stmt_prepare($getUserGrades, "SELECT courses.Course,levels.Level,grades.Grade FROM userqualifications 
		INNER JOIN userlogin ON userqualifications.UserID = userlogin.ID
		INNER JOIN courses ON userqualifications.CourseID = courses.CourseID
		INNER JOIN levels ON userqualifications.LevelID = levels.LevelID
		INNER JOIN grades ON userqualifications.GradeID = grades.GradeID
		where userlogin.UserName= ? and userlogin.Password = ?");
	mysqli_stmt_bind_param($getUserGrades, 'ss', $temp['user'], $temp['pass']);   
	mysqli_stmt_execute($getUserGrades); 

	$gradeslist = mysqli_stmt_get_result($getUserGrades);

	$gradearray = array();

	while($row = mysqli_fetch_assoc($gradeslist)){
		$gradearray[] = array('course' => $row["Course"], 'level'=> $row["Level"], 'Grade'=> $row["Grade"]);
	}
				echo json_encode($gradearray);

}







mysqli_close($link);
?>