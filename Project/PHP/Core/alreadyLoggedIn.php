<?php

include 'connection.php';
include 'validCookie.php';

if($verified){
	header("Location:http://badapple/html/profile.php");
}

?>