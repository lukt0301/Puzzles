<?php
	$host   = "localhost";
	$user   = "root";
	$pass   = "root";	

	$connect = mysql_connect($host, $user, $pass);
	if (!$connect) {
		die("Error: " . mysql_error());
	}
?>