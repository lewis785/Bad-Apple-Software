<?php

include 'connection.php';
include 'validCookie.php';

if(!$verified){
	exit();
}



$getHistory = mysqli_stmt_init($link);

mysqli_stmt_prepare($getHistory, 
                    
"SELECT courses.Course AS 'Qualification.Course',
       levels.Level AS 'Qualification.Level',
       grades.Grade AS 'Qualification.Grade'
       
FROM userqualifications 
INNER JOIN userlogin ON userqualifications.User = userlogin.UserID
		INNER JOIN courses ON userqualifications.Course = courses.CourseID
		INNER JOIN levels ON userqualifications.Level = levels.LevelID
		INNER JOIN grades ON userqualifications.Grade = grades.GradeID
		where userlogin.UserName= ? and userlogin.Password = ?
FOR JSON PATH, ROOT('userqualifications')");  
mysqli_stmt_execute($getHistory); 


$result = mysqli_stmt_get_result($getHistory);

while($row = mysqli_fetch_assoc($result)){
	echo json_encode($result);

}

?>