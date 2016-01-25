<?php

$section = 0;
$newsection = "*";
$handle = @fopen("../Database/levelgrade.txt", "r"); //read line one by one

// $logfile = ; 
// $my_file = file_get_contents($logfile);
// echo $my_file;
include "connection.php";


while (!feof($handle)) // Loop til end of file.
{
	 $buffer = fgets($handle); // Read a line.

	 if( strcmp($buffer, $newsection) != 2 ){


	 	if($section==0){

	 		$checkOccupation = mysqli_stmt_init($link);
	mysqli_stmt_prepare($checkOccupation, "select count(*) from occupations where Occupation= ?");	//Counts how many users exist with the password and username in the cookie
	mysqli_stmt_bind_param($checkOccupation, 's',$buffer);
	mysqli_stmt_execute($checkOccupation);

	$result = mysqli_stmt_get_result($checkOccupation);
	$count = $result -> fetch_row();

	//If user exists the count will be 1
	if ($count[0] == 0) {
		$newOccupation = mysqli_stmt_init($link);
		mysqli_stmt_prepare($newOccupation, 'INSERT INTO occupations (Occupation) VALUES (?)');
		mysqli_stmt_bind_param($newOccupation, 's', $buffer);   
		mysqli_stmt_execute($newOccupation);
	}


}


if($section==1){
	list($level,$levelset)=explode("|",$buffer);
	$levelset = intval($levelset);

	$checkLevel = mysqli_stmt_init($link);
	mysqli_stmt_prepare($checkLevel, "select count(*) from levels where Level= ? and GradesetID = ?");	//Counts how many users exist with the password and username in the cookie
	mysqli_stmt_bind_param($checkLevel, 'si',$level, $levelset);
	mysqli_stmt_execute($checkLevel);

	$result = mysqli_stmt_get_result($checkLevel);
	$count = $result -> fetch_row();

	if ($count[0] == 0){

		$newLevel = mysqli_stmt_init($link);
		mysqli_stmt_prepare($newLevel, 'INSERT INTO levels (Level, GradesetID) VALUES (?, ?)');
		mysqli_stmt_bind_param($newLevel, 'si', $level, $levelset);   
		mysqli_stmt_execute($newLevel);

	}
}


if($section==2){

	list($grade,$gradeset)=explode("|",$buffer);
	$gradeset = intval($gradeset);


	$checkGrade = mysqli_stmt_init($link);
	mysqli_stmt_prepare($checkGrade, "select count(*) from grades where Grade= ? and GradeSetID = ?");	//Counts how many users exist with the password and username in the cookie
	mysqli_stmt_bind_param($checkGrade, 'si',$grade, $gradeset);
	mysqli_stmt_execute($checkGrade);

	$result = mysqli_stmt_get_result($checkGrade);
	$count = $result -> fetch_row();

	if ($count[0] == 0){

		$newGrade = mysqli_stmt_init($link);
		mysqli_stmt_prepare($newGrade, 'INSERT INTO grades (Grade, GradesetID) VALUES (?, ?)');
		mysqli_stmt_bind_param($newGrade, 'si', $grade, $gradeset);   
		mysqli_stmt_execute($newGrade);

	}

}
}
else
{
	$section = $section + 1;
}



}
?>