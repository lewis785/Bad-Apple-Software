<?php 

include(dirname(__FILE__)."/../Core/connection.php");
include(dirname(__FILE__)."/../Core/validCookie.php");

if ($verified){
	if (isset($_POST['level']) && isset($_POST['grade'])){

		$level =  $_POST['level'];
		$grade = $_POST['grade'];

		$checkQID = mysqli_stmt_init($link);
		mysqli_stmt_prepare($checkCourse, "SELECT count(*) FROM userqualifications 
			INNER JOIN userlogin ON userqualifications.User = userlogin.UserID
			WHERE Course = ? AND userlogin.UserName = ? AND userlogin.Password = ?");
		mysqli_stmt_bind_param($checkCourse, 'ssi',$temp['user'],$temp['pass'], $course);   
		mysqli_stmt_execute($checkCourse); 

		$result = mysqli_stmt_get_result($checkCourse);
		$validcourse = $result -> fetch_row();


		if($validcourse[0] == 1){
			$checkGradeLevel = mysqli_stmt_init($link);
			mysqli_stmt_prepare($checkGradeLevel, "SELECT count(*),levels.LevelID, grades.GradeID FROM grades INNER JOIN levels ON grades.GradeSetID = levels.GradeSet
				WHERE levels.Level = ? and grades.Grade = ?");
			mysqli_stmt_bind_param($checkGradeLevel, 'ss', $level, $grade);   
			mysqli_stmt_execute($checkGradeLevel); 

			$result = mysqli_stmt_get_result($checkGradeLevel);
			$validgrade = $result -> fetch_row();


			if ($validgrade[0] == 1) {
			}
		}
	}
}


mysqli_close($link);

?>