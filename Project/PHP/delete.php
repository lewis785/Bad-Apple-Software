<pre>
<?php

include 'connection.php';

if (isset($_COOKIE['confirmation']))
{
	$temp = unserialize($_COOKIE['confirmation']);

	$check = mysqli_stmt_init($link);
	mysqli_stmt_prepare($check, "select count(*) from users where user_name= ? and user_pass = ?");
	mysqli_stmt_bind_param($check, 'ss', $temp['user'], $temp['pass']);
	mysqli_stmt_execute($check);

	$result = mysqli_stmt_get_result($check);
	$count = $result -> fetch_row();

	if ($count[0] == 1) 
	{

	$delete = mysqli_stmt_init($link);
	mysqli_stmt_prepare($delete, "delete from users where user_name= ? and user_pass = ?");
	mysqli_stmt_bind_param($delete, 'ss', $temp['user'], $temp['pass']);
	mysqli_stmt_execute($delete);
	echo "User Deleted";

	}
	else
	{
		echo "No User";
	}


}
else
{
	echo "No cookie present";
}

?>
