<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
	<title>To Do List</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>
<body>
	<h1> To-Do-List App
	<form action = "../controllers/add_task.php">
			<table class = "table-bordered">
				<tr>
					<td><input id = "new-task" type="text" name="name" placeholder="Enter Task"></td>
					<td><button id = "addTaskBtn" type="button" class="button btn-success">Add Task</button></td>
	
				</tr>
				
			</table>
						
	</form>





<!-- add task -->
<script>
	$('#addTaskBtn').click( function(){
		const newTask  = $('#new-task').val();

		$.ajax({
			method: 'GET',
			url: 'controllers/add_task.php',
			data: {name: newTask},
		}).done(
				console.log('added task')
			);
		});
</script>


<!-- display -->

<h2>Task list</h2>
<tr data-id="tasklist">
<?php

require_once 'controllers/connection.php';

$sql = "SELECT * FROM tasks";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) { ?>
	<td data-id = "<?php echo $row['id'] ; ?>"> 
		<?php echo $row['name'] . " is task number " . $row['id'] ; ?>
		<button class="deleteBtn btn-danger" > Delete </button>
	</td>

<?php } ?>

?>

</tr>


<!-- delete -->
<script>
	


</script>


</body>

</html>