<?php 

include "connection.php";
include "validCookie.php"

if ($verified){
	if (isset($_POST['course']) && isset($_POST['level']) && isset($_POST['grade'])){

		$course = mysqli_real_escape_string($link, $_POST['course']);
		$level = mysqli_real_escape_string($link, $_POST['level']);
		$grade = mysqli_real_escape_string($link, $_POST['grade']);

		$checkGradeLEvel = mysqli_real_escape_string($link, $_POST['level']);

		$checkGradeLevel = mysqli_stmt_init($link);
		mysqli_stmt_prepare($checkGradeLevel, "SELECT count(*) FROM grades INNER JOIN levels ON grades.GradeSetID = levels.GradeSetID
			WHERE levels.Level = ? and grades.Grade = ?");
		mysqli_stmt_bind_param($checkGradeLevel, 'ss', $level, $grade);   
		mysqli_stmt_execute($checkGradeLevel); 

		$result = mysqli_stmt_get_result($checkGradeLevel);
		$count = $result -> fetch_row();

		if ($count[0] == 0) {







		}
	}
}


mysqli_close($link);
?>