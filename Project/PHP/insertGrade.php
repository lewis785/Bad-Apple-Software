<?php 

include "Core/connection.php";
include "Core/validCookie.php";

if ($verified){
	if (isset($_POST['course']) && isset($_POST['level']) && isset($_POST['grade'])){

		$course = mysqli_real_escape_string($link, $_POST['course']);
		$level = mysqli_real_escape_string($link, $_POST['level']);
		$grade = mysqli_real_escape_string($link, $_POST['grade']);

		$checkCourse = mysqli_stmt_init($link);
		mysqli_stmt_prepare($checkCourse, "SELECT count(*), CourseID FROM courses WHERE Course = ?");
		mysqli_stmt_bind_param($checkCourse, 's', $course);   
		mysqli_stmt_execute($checkCourse); 

		$result = mysqli_stmt_get_result($checkCourse);
		$validcourse = $result -> fetch_row();


		if($validcourse[0] == 1){
			echo"valid course <br>";
			$checkGradeLevel = mysqli_stmt_init($link);
			mysqli_stmt_prepare($checkGradeLevel, "SELECT count(*),levels.LevelID, grades.GradeID FROM grades INNER JOIN levels ON grades.GradeSetID = levels.GradeSetID
				WHERE levels.Level = ? and grades.Grade = ?");
			mysqli_stmt_bind_param($checkGradeLevel, 'ss', $level, $grade);   
			mysqli_stmt_execute($checkGradeLevel); 

			$result = mysqli_stmt_get_result($checkGradeLevel);
			$validgrade = $result -> fetch_row();


			if ($validgrade[0] == 1) {
				echo "valid level and grade <br>";

				echo "User ".$user[1]." Course ".$validcourse[1]." Level ".$validgrade[1]." Grade ".$validgrade[2];


				$insertUserGrade = mysqli_stmt_init($link);
				mysqli_stmt_prepare($insertUserGrade, 'INSERT INTO userqualifications (UserID, CourseID, LevelID, GradeID ) VALUES (?, ?, ?, ?)');
				mysqli_stmt_bind_param($insertUserGrade, 'iiii', $user[1], $validcourse[1], $validgrade[1], $validgrade[2]);   
				mysqli_stmt_execute($insertUserGrade);



			}
		}




	}
}



if ( !empty($_POST['qualificationlevel']) && !empty($_POST['course']) && !empty($_POST['coursegrade']) ) {


}
else
{
	if (!empty($_POST['qualificationlevel']) && !empty($_POST['course'])){
		
	}
	else
	{
		if (!empty($_POST['qualificationlevel'])){


		}
	}
}




mysqli_close($link);
?>