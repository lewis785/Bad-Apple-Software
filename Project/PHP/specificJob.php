<?php

include"Core/connection.php";
include"Core/validCookie.php";

if(isset($_POST["EID"])){
	if($verified){

		$EID = $_POST["EID"];

		$getJob = mysqli_stmt_init($link);
		mysqli_stmt_prepare($getJob, "SELECT useremployment.EmploymentID, useremployment.Employer, useremployment.JobTitle, useremployment.JobDescription, S1.MonthName as SMonth,
			S2.MonthName as EMonth, useremployment.StartYear, useremployment.EndYear FROM useremployment 
			INNER JOIN userlogin ON useremployment.UserID = userlogin.UserID
			INNER JOIN months S1 ON useremployment.StartMonth = S1.MonthID
			INNER JOIN months S2 ON useremployment.EndMonth = S2.MonthID
			WHERE UserName = ? and Password = ? and EmploymentID = ?");
		mysqli_stmt_bind_param($getJob, 'ssi', $temp['user'], $temp['pass'], $EID);   
		mysqli_stmt_execute($getJob); 
		$result = mysqli_stmt_get_result($getJob);
		$currentjob = mysqli_fetch_assoc($result);

		$employer = $currentjob["Employer"];
		$title = $currentjob["JobTitle"];
		$descrip = $currentjob["JobDescription"];
		$startmonth = $currentjob["SMonth"];
		$endmonth = $currentjob["EMonth"];
		$startyear = $currentjob["StartYear"];
		$endyear = $currentjob["EndYear"];

		$htmledit = "<div col-sm-12><div id='info'> ".$employer."</div><br>";

		$getMonths = mysqli_stmt_init($link);
		mysqli_stmt_prepare($getMonths, "SELECT MonthName FROM months");  
		mysqli_stmt_execute($getMonths); 
		$result = mysqli_stmt_get_result($getMonths);

		$monthslist = [];
		while($row = mysqli_fetch_assoc($result))
		{
			array_push($monthslist,$row["MonthName"]);
		}	


		$starttime = monthyear("start",$monthslist,$startmonth,$startyear);

		$endtime = monthyear("end",$monthslist,$endmonth,$endyear);

		$text = "<div> <input type='text' name='title' value='".$title."'></input><br><input type='text' name='description' value='".$descrip."'></input></div>";

		$button = "<button onclick=updatejob(".$EID.") class='btn-info btn-lg'> Save </button></div>";


		$htmledit = $htmledit.$starttime.$endtime.$text.$button;


		echo  $htmledit;

		echo json_encode(array('html'=>$htmledit));

	}
}





function monthyear($id,$monthlist,$curmonth,$curyear)
{
	$monthSelections = "<select id='".$id."month' name='".$id."month' class='form-control'>";
	for ($i=0; $i < sizeof($monthlist); $i++)
	{
		if ($curmonth === $monthlist[$i])
		{
			$selection = "<option value='".$monthlist[$i]."' selected>".$monthlist[$i]."</option>";
		}
		else
		{
			$selection = "<option value='".$monthlist[$i]."'>".$monthlist[$i]."</option>";
		}
		$monthSelections = $monthSelections.$selection;
	}
	$monthSelections = $monthSelections."</select><br>";

	$startdate = date("Y")-60;
	$enddate = date("Y");

	$years = range ($startdate,$enddate);

	$yearSelections = "<select id='".$id."year' name='".$id."year' class='form-control' >";
	foreach($years as $year)
	{
		if($year === $curyear)
			$yearSelections = $yearSelections."<option value'".$year."' selected>".$year."</option>";
		else

			$yearSelections = $yearSelections."<option value'".$year."'>".$year."</option>";
	}
	$yearSelections = $yearSelections."</select><br>";

	return $monthSelections.$yearSelections;
}






mysqli_close($link);
?>