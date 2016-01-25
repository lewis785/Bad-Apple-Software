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
		echo $count[0]."  hello".$buffer."<br>";
	}





}




if($section==1){
	list($level,$levelset)=explode("|",$buffer);
	echo "Left: ".$level." Right: ".$levelset."<br>";
}




if($section==2){
	list($grade,$gradeset)=explode("|",$buffer);
	echo "Left: ".$grade." Right: ".$gradeset."<br>";
}

}
else
{
	$section = $section + 1;
}



}



?>