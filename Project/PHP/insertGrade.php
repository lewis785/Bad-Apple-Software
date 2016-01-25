<?php 

include "connection.php";
include "validCookie.php";

if ($verified){
	if (isset($_POST['course']) && isset($_POST['level']) && isset($_POST['grade'])){

		$course = mysqli_real_escape_string($link, $_POST['course']);
		$level = mysqli_real_escape_string($link, $_POST['level']);
		$grade = mysqli_real_escape_string($link, $_POST['grade']);

		$checkGradeLevel = mysqli_real_escape_string($link, $_POST['level']);
		$checkGradeLevel = mysqli_stmt_init($link);
		mysqli_stmt_prepare($checkGradeLevel, "SELECT count(*), CourseID FROM courses WHERE Course = ?");
		mysqli_stmt_bind_param($checkGradeLevel, 's', $course);   
		mysqli_stmt_execute($checkGradeLevel); 

		$result = mysqli_stmt_get_result($checkGradeLevel);
		$validcourse = $result -> fetch_row();


		if($validcourse[0] == 1){

			$checkGradeLevel = mysqli_stmt_init($link);
			mysqli_stmt_prepare($checkGradeLevel, "SELECT count(*),grades.GradeID,levels.LevelID FROM grades INNER JOIN levels ON grades.GradeSetID = levels.GradeSetID
				WHERE levels.Level = ? and grades.Grade = ?");
			mysqli_stmt_bind_param($checkGradeLevel, 'ss', $level, $grade);   
			mysqli_stmt_execute($checkGradeLevel); 

			$result = mysqli_stmt_get_result($checkGradeLevel);
			$validgrade = $result -> fetch_row();


			if ($validgrade[0] == 1) {

				echo $user[1].$validcourse[1].$validgrade[2].$validgrade[1];


				$insertUserGrade = mysqli_stmt_init($link);
				mysqli_stmt_prepare($insertUserGrade, 'INSERT INTO userqualifications (UserID, CourseID, LevelID, GradeID ) VALUES (?, ?, ?, ?)');
				mysqli_stmt_bind_param($insertUserGrade, 'ssss', $user[1], $validcourse[1], $validgrade[2], $validgrade[1]);   
				mysqli_stmt_execute($insertUserGrade);



			}
		}




	}
}


mysqli_close($link);
?>