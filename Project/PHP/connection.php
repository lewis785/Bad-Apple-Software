<?php

$link = mysqli_connect('localhost', 'root', 'kandersteg'); 
if (!$link) { 
	die('Could not connect to MySQL: ' . mysqli_connect_error()); 
} 

mysqli_select_db($link,"pathmaker");


?>