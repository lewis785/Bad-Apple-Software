<?php


if (isset($_COOKIE['confirmation'])) {
	unset($_COOKIE['confirmation']);
    setcookie('confirmation', '', time() - 3600, '/'); // empty value and old timestamp
}

header("Location:http://badapple/HTML/login.html");

?>