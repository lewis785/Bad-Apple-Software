<?php


include(dirname(__FILE__) . "/../core/connection.php");
include(dirname(__FILE__) . "/../core/validCookie.php");


$checkWizard = mysqli_stmt_init($link);
mysqli_stmt_prepare($checkWizard, 'SELECT Wizard from userlogin WHERE UserName = ? AND Password = ?');
mysqli_stmt_bind_param($checkWizard, 'ss', $temp['user'], $temp['pass']);   
mysqli_stmt_execute($checkWizard);
$result = mysqli_stmt_get_result($checkWizard);
$wizard = $result -> fetch_row();
$wizardPage = $wizard[0];

if($wizard[0] < 4){
	header('Location: ../../html/makeaccount.php');
}


mysqli_close($link);
?>