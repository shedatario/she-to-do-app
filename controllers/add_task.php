<?php
	require_once 'connection.php';

	$newTask = $_GET['name'];

	$sql = "INSERT INTO tasks(name) VALUES ('$newTask')";
	$result = mysqli_query($conn, $sql);


	if($result === TRUE){
	echo 'Task added successfully!';
	// header("Location: ./index.php"); 

	}else{
	echo 'error: ' . $sql . "<br>" . mysqli_error($conn);
	}



	mysqli_close($conn);

	

?>