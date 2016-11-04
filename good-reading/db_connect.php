<?php
	$hostname = 'localhost'; // Host name or IP address of the server
	$username = 'root'; // Username of the user account in PHPMyAdmin
	$password = ''; // Password of the user account in PHPMyAdmin
	$databasename = 'good_reading_book_store'; // Name of of the database in PHPMyAdmin
	$connect = new mysqli($hostname, $username, $password, $databasename);
	if($connect->connect_error)
	{
		die ($connect->connect_error);
	}
	else
	{
		// echo "Connected to the Database";
	}
?>