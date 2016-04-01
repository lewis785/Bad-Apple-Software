<?php
include "../php/Core/connection.php";

$search = 26;

$deleteAllUsers = mysqli_stmt_init($link);
mysqli_stmt_prepare($deleteAllUsers, "DELETE FROM userlogin WHERE UserID NOT IN (8,14,15,16)");
mysqli_stmt_execute($deleteAllUsers);


$result = mysqli_stmt_get_result($deleteAllUsers);

echo "result ".$result;

// while($row = mysqli_fetch_assoc($result)){
// 	echo json_encode(array("user"=>$row['UserName'],"joined"=>$row['DateJoined']));
// }

// $sql = "SELECT * FROM userlogin WHERE UserID = 26";
// mysqli_query($link, $sql);

echo "Users all Deleted";
?>