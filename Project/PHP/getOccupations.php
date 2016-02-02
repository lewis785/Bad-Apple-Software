<?php

include 'connection.php';


$occupations = mysqli_stmt_init($link);
mysqli_stmt_prepare($occupations, "select Occupation from occupations");
mysqli_stmt_bind_param($occupations);
mysqli_stmt_execute($occupations);


$result = mysqli_stmt_get_result($occupations);
$occupationarray = array();


foreach($result as $row){
	echo "<option name='".$row["Occupation"]."'>".$row["Occupation"]."</option>";
}




mysqli_close($link);
?>