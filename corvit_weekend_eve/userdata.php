<?php

$serverAddress = 'localhost';
$username = 'root';
$password = '';
$databaseName= 'corvit_weekend_eve';


$con = new mysqli($serverAddress,$username,$password,$databaseName);



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
		<tr>
			<td>1</td>
			<td>LH_OK_333</td>
			<td>Ali</td>
			<td>test@gmail.com</td>
			<td>Test</td>
			<td>12</td>
			<td>Lahore Punjab</td>
			<td>2023-10-29 11:40:28</td>
		</tr>
	</table>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>