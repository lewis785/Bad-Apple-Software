<?php 

include(dirname(__FILE__)."/../Core/connection.php");
include(dirname(__FILE__)."/../Core/validCookie.php");

if ($verified){
	if (isset($_POST['EID']) && isset($_POST['level']) && isset($_POST['grade'])){

		$EID = $_POST['EID'];
		$title = mysqli_real_escape_string($link, $_POST['title']);
		$startmonth = mysqli_real_escape_string($link, $_POST['startmonth']);
		$startyear = mysqli_real_escape_string($link, $_POST['startyear']);
		$endmonth = mysqli_real_escape_string($link, $_POST['endmonth']);
		$endyear = mysqli_real_escape_string($link, $_POST['endyear']);
		$description = mysqli_real_escape_string($link, $_POST['description']);
		$curyear = date("Y");
		$curmonth = date("M");

		$checkQID = mysqli_stmt_init($link);
		mysqli_stmt_prepare($checkQID, "SELECT count(*) FROM useremployment 
			INNER JOIN userlogin ON useremployment.UserID = userlogin.UserID
			WHERE userlogin.UserName = ? AND userlogin.Password = ? AND useremployment.EmploymentID = ?");
		mysqli_stmt_bind_param($checkQID, 'ssi',$temp['user'],$temp['pass'], $EID);   
		mysqli_stmt_execute($checkQID); 

		$result = mysqli_stmt_get_result($checkQID);
		$validcourse = $result -> fetch_row();


		if($validcourse[0] == 1){
			if ((($startyear <= $endyear && $startyear > 1970) && $startyear <= $curyear) && !($startmonth > $curmonth && $startyear === $curyear)){
				$updateGrade = mysqli_stmt_init($link);
				mysqli_stmt_prepare($updateGrade, 'UPDATE userqualifications SET Level = ?, Grade = ? where UserQID =?');
				mysqli_stmt_bind_param($updateGrade, 'iii', $validgrade[1],$validgrade[2], $QID);   
				mysqli_stmt_execute($updateGrade); 
			}
			// else
				// echo "Not Valid Update";

		}
	}
}


mysqli_close($link);

?>