<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">

<?php 
//include "../PHP/verify.php";
?>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
	<title> Test </title>

	<link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type='text/javascript'></script>

	<script src="../JS/delete.js"></script>
	
	<script src="../js/loadUser.js"></script>
	<script src="../js/storeGrade.js"></script>

	<script src="../js/pathmaker/converter.js"></script>
	<!-- <link href="../css/home.css" rel="stylesheet"> -->

</head>





<body>


	<div id="login">
		<form name="getName" method="POST" action="../PHP/getInfo.php">
			<input type="text" name="username" id="text-box"/><br>
			<input type="Submit" name="Submit" id="Submit"/><br><br>
		</form>

		<div  id="tester">
			<?php if(isset($first)&&isset($second)&&isset($DoB)){ echo $error; } ?>
		</div>
	</div>


	<div id="createuser"> 

		<form name="getName" method="POST" action="../PHP/jobdelete.php">
			<input type="text" name="jobid" placeholder="Job id" id="text-box"/><br>
<!-- 			<input type="text" name="pass1" placeholder="password" id="text-box"/><br>
			<input type="text" name="pass2" placeholder="confirm password" id="text-box"/><br>
			<input type="text" name="firstname" placeholder="Firstname" id="text-box"/><br>
			<input type="text" name="surname" placeholder="Surname" id="text-box"/><br>
			<input type="date" name="DoB" placeholder="DoB" id="text-box"/><br>
		-->

		<input type="Submit" name="Submit" id="Submit"/>
	</form>

</div>


<div id="Deleteuser"> 

	<button type="button" id="deletenow" onclick="javascript: deleteUser();">Delete User</button>
	
</div>


<?php 
	// include "../php/getInfo.php";
	// include "../php/schoolGrades.php" ;
	// // include "../php/Qualifications/getCourses.php" ;
include "../php/readFile.php"; 
	// include "../php/displayOccupations.php" ;
	// include "../php/Qualifications/getUserGrade.php"; 
	// include "../php/Qualifications/validateGrade.php";
	// include "../php/Qualifications/deleteQualification.php";
	// include "../php/jobdelete.php";
	// include "../database/deleteallusers.php";
		// include "../database/usergenerator.php";
	// include "../PHP/pathmaker/pathqualifications.php";
?>


<form method="post" action="../PHP/wizard/insertAddress.php">

	<input type="text" name="number" id="inputarea">
	<input type="text" name="street" id="inputarea">
	<input type="text" name="city" id="inputarea">
	<input type="text" name="postcode" id="inputarea">

	<button type="submit" > Search </button>
</form>




<button onclick="getqualifications()">Get Grades Tree</button>



</body>

</html>