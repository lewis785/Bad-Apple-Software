<?php

$CourseLevel = "Standard Grade";




$getGrades = mysqli_stmt_init($link);
mysqli_stmt_prepare($getGrades, "SELECT Grade FROM grades INNER JOIN levels ON grades.GradeSetID = levels.GradeSetID
	WHERE levels.Level = ?");
mysqli_stmt_bind_param($getGrades, 's', $CourseLevel);   
mysqli_stmt_execute($getGrades); 

$result = mysqli_stmt_get_result($getGrades);

if($row = mysqli_fetch_assoc($result)){
	echo json_encode(array("grade"=>$row['Grade']));
}


// while($row = mysqli_fetch_assoc($result)){
// 	// echo $row["Grade"];
// 	echo json_encode(array("grade"=>$row['Grade']));
// }

?>