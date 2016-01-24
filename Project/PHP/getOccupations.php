<?php

include 'connection.php';


$occupations = mysqli_stmt_init($link);
mysqli_stmt_prepare($occupations, "select Occupation from occupations");
mysqli_stmt_bind_param($occupations);
mysqli_stmt_execute($occupations);


$result = mysqli_stmt_get_result($occupations);

foreach($result as $row){
	$occupation = $row['Occupation'];
	$results[] = array("occupation" => $occupation);
}

header('Content-type:application/json');
exit(json_encode($results));

?>