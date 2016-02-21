<?php 

include "Core/connection.php";
include 'Core/validCookie.php';

echo  $temp['user'].$temp['pass'];

$getUserJob = mysqli_stmt_init($link);
mysqli_stmt_prepare($getUserJob, "SELECT useremployment.Employer, useremployment.JobTitle, useremployment.JobDescription, S1.MonthName as SMonth,
	S2.MonthName as EMonth, useremployment.StartYear, useremployment.EndYear FROM useremployment 
	INNER JOIN userlogin ON useremployment.UserID = userlogin.UserID
	INNER JOIN months as S1 ON useremployment.StartMonth = months.MonthID
	INNER JOIN months as S2 ON useremployment.EndMonth = months.MonthID
	where userlogin.UserName= ? and userlogin.Password = ? ");


mysqli_stmt_bind_param($getUserJob, 'ss', $temp['user'], $temp['pass']);   
mysqli_stmt_execute($getUserJob); 

$joblist = mysqli_stmt_get_result($getUserJob);

while($row = mysqli_fetch_assoc($joblist)){



	echo'<ul class="list-group">
	<li class="list-group-item text-right"><span class="pull-left"><strong>'.'Employer'.'</strong></span> <div id="employer">'.$row['Employer'].'</div> </li>
	<li class="list-group-item text-right"><span class="pull-left"><strong>'.'Time'.'</strong></span> <div id="start">'.$row['SMonth']." ".$row['StartYear']. " - ".$row['EMonth'].' '.$row['EndYear'].'</div></li>
	<li class="list-group-item text-right"><span class="pull-left"><strong>'.'Title'.'</strong></span> <div id="title">'.$row['JobTitle'].'</div> </li>
	<li class="list-group-item text-right"><span class="pull-left"><strong>'.'Description'.'</strong></span> <div id="desc">'.$row['JobDescription'].'</div> </li>
	</ul>';

}

?>