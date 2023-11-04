<?php

$serverAddress = 'localhost';
$username = 'root';
$password = '';
$databaseName= 'corvit_weekend_eve';


$con = new mysqli($serverAddress,$username,$password,$databaseName);


$test = 'Corvit';

$sql = "SELECT * FROM students";

$result =  $con->query($sql);




?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Data</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

	<table class="table table-striped table-dark">
		<tr>
			<th>ID</th>
			<th>Roll Number</th>
			<th>Name</th>
			<th>Email</th>
			<th>Father Name</th>
			<th>Age</th>
			<th>Address</th>
			<th>Register Time</th>
		</tr>
		<?php

			if( $result-> num_rows >0){

				while( $row = $result -> fetch_assoc() ){


					echo '<tr>';

					echo '<td>'.$row['id'].'</td>';
					echo '<td>'.$row['roll_number'].'</td>';
					echo '<td>'.$row['name'].'</td>';
					echo '<td>'.$row['email'].'</td>';
					echo '<td>'.$row['father_name'].'</td>';
					echo '<td>'.$row['age'].'</td>';
					echo '<td>'.$row['address'].'</td>';
					echo '<td>'.$row['created_at'].'</td>';

					echo '</tr>';

				}

			}else{
				echo 'No Data Available';
			}

		?>
		
	</table>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>