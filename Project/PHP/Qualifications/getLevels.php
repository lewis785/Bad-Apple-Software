<?php

include(dirname(__FILE__) . "/../core/connection.php");

$getCourses = mysqli_stmt_init($link);

mysqli_stmt_prepare($getCourses, "SELECT Level FROM levels");  
mysqli_stmt_execute($getCourses); 


$result = mysqli_stmt_get_result($getCourses);

while($row = mysqli_fetch_assoc($result)){
	echo "<option value='".$row["Level"]."'>".$row["Level"]."</option>";

}

mysqli_close($link);
?>
