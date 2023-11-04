<?php

$serverAddress = 'localhost';
$username = 'root';
$password = '';
$databaseName= 'corvit_weekend_eve';


$con = new mysqli($serverAddress,$username,$password,$databaseName);


if( isset($_POST['email']) ){

	$email = $_POST['email'];
	$rollNumber = $_POST['roll_number'];


	$sql = "SELECT * FROM students WHERE email='$email' AND roll_number='$rollNumber' ";

	$result = $con->query($sql);

	if( $result ->num_rows >0){
		echo '<div class="alert alert-success">You are Logged In</div>';
	}else{
		echo '<div class="alert alert-danger">Invalid Email / rollNumber</div>';
	}
}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

	<form method="POST" action="login.php">
		<label class="form-lable">Email</label>
		<input class="form-control w-25" type="email" name="email" placeholder="Enter Email" required>

		<label class="form-lable">Roll number</label>
		<input class="form-control w-25" type="text" name="roll_number" placeholder="Enter Roll Number" required>

		<button type="submit" class="btn btn-primary">Login</button>
	</form>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>



