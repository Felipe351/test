<?php
	$server = "localhost";
	$user = "root";
	$passwd = "";
	$database = "management";

	$mysqli = new mysqli($server, $user, $passwd, $database);
	if ($mysqli->connect_errno) {
		echo "connection failed";
	}
?>