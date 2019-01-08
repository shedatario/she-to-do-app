<?php
	$host = 'db4free.net';
	$username = 'shedatario';
	$password = 'she020695';
	$dbname = 'shetodoapp';



	$conn = mysqli_connect($host, $username, $password, $dbname);

	if(!$conn) {
		die('Connection: failed ' . mysqli_error($conn));
	}

	echo 'Connected Successfully!';
	




?>