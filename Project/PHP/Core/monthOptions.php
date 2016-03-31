<?php

include "connection.php";


$months = mysqli_stmt_init($link);
mysqli_stmt_prepare($months, "select * from months");
mysqli_stmt_execute($months);


$result = mysqli_stmt_get_result($months);
echo '<option value="NonSelect">Select Month</option>';
while($row = mysqli_fetch_assoc($result)){
	echo "<option value='".$row["MonthID"]."'>".$row["MonthName"]."</option>";

}


?>