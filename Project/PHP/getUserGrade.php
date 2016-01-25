<?php

include "connection.php";
include "validCookie.php";

if($verified){

echo $temp['user'].$temp['pass'];

	$getUserGrades = mysqli_stmt_init($link);
	mysqli_stmt_prepare($getUserGrades, "SELECT courses.Course,levels.Level,grades.Grade FROM userqualifications 
		INNER JOIN userlogin ON userqualifications.UserID = userlogin.ID
		INNER JOIN courses ON userqualifications.CourseID = courses.CourseID
		INNER JOIN levels ON userqualifications.LevelID = levels.LevelID
		INNER JOIN grades ON userqualifications.GradeID = grades.GradeID
		where userlogin.UserName= ? and userlogin.Password = ?");
	mysqli_stmt_bind_param($getUserGrades, 'ss', $temp['user'], $temp['pass']);   
	mysqli_stmt_execute($getUserGrades); 

$result = mysqli_stmt_get_result($getUserGrades);


	while($row = mysqli_fetch_assoc($result)){
	echo "<br>".$row["Course"]." ".$row["Level"]." ".$row["Grade"];
}

}







mysqli_close($link);
?>