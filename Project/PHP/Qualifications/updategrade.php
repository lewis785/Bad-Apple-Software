<?php 

include(dirname(__FILE__)."/../Core/connection.php");
include(dirname(__FILE__)."/../Core/validCookie.php");

if ($verified){

	if (isset($_POST['QID']) && isset($_POST['level']) && isset($_POST['grade'])){

		$QID = $_POST['QID'];
		$level =  $_POST['level'];
		$grade = $_POST['grade'];

		$checkQID = mysqli_stmt_init($link);
		mysqli_stmt_prepare($checkQID, "SELECT count(*) FROM userqualifications 
			INNER JOIN userlogin ON userqualifications.User = userlogin.UserID
			WHERE userlogin.UserName = ? AND userlogin.Password = ? AND userqualifications.UserQID = ?");
		mysqli_stmt_bind_param($checkQID, 'ssi',$temp['user'],$temp['pass'], $QID);   
		mysqli_stmt_execute($checkQID); 

		$result = mysqli_stmt_get_result($checkQID);

		$validcourse = $result -> fetch_row();

		if($validcourse[0] == 1){
			$checkGradeLevel = mysqli_stmt_init($link);
			mysqli_stmt_prepare($checkGradeLevel, "SELECT count(*),levels.LevelID, grades.GradeID FROM grades INNER JOIN levels ON grades.GradeSetID = levels.GradeSet
				WHERE levels.Level = ? and grades.Grade = ?");
			mysqli_stmt_bind_param($checkGradeLevel, 'ss', $level, $grade);   
			mysqli_stmt_execute($checkGradeLevel); 

			$result = mysqli_stmt_get_result($checkGradeLevel);
			$validgrade = $result -> fetch_row();

			echo $validgrade[1].$validgrade[2];

			if ($validgrade[0] == 1) {

				$updateGrade = mysqli_stmt_init($link);
				mysqli_stmt_prepare($updateGrade, 'UPDATE userqualifications SET Level = ?, Grade = ? where UserQID =?');
				mysqli_stmt_bind_param($updateGrade, 'iii', $validgrade[1],$validgrade[2], $QID);   
				mysqli_stmt_execute($updateGrade); 
			}
			// else
				// echo "Not Valid Update";
		}
		// else
			// echo "Not your QID";
	}
}


mysqli_close($link);

?>