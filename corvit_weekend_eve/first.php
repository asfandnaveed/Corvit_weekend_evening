<?php

$serverAddress = 'localhost';
$username = 'root';
$password = '';
$databaseName= 'corvit_weekend_eve';


$con = new mysqli($serverAddress,$username,$password,$databaseName);

$email  = $_POST['email'];
$name = $_POST['name'];
$fatherName = $_POST['father_name'];
$age = $_POST['age'];
$address = $_POST['address'];
$rollNumber = $_POST['roll_number'];

echo $email;


// $sql = "INSERT INTO students (name,father_name,email,age,roll_number,address) VALUE ('Hammad','Asghar','hammad134@gmail.com',30,'LH_SH_023','Lahore , Pakistan')";
// $sql = "UPDATE students SET email='hammadasghar00@gmail.com' WHERE id=2";

// if( $con->query($sql) == TRUE ){
// 	echo 'Data successfully inserted ! ';
// }else{
// 	echo 'Something went wrong';
// }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
  	<form method="POST" action="first.php">
  		<label class="form-lable">Name</label>
	  	<input type="text" class="form-control w-25" name="name" placeholder="Enter Name">

	  	<label class="form-lable">Email</label>
	  	<input type="email" class="form-control w-25" name="email" placeholder="Enter Email">

	  	<label class="form-lable">Father Name</label>
	  	<input type="text" class="form-control w-25" name="father_name" placeholder="Enter Father Name">

	  	<label class="form-lable">Age</label>
	  	<input type="number" class="form-control w-25" name="age" placeholder="Enter Age">

	  	<label class="form-lable">Roll Number</label>
	  	<input type="text" class="form-control w-25" name="roll_number" placeholder="Enter Roll Number">

	  	<label class="form-lable">Address</label>
	  	<input type="text" class="form-control w-25" name="Address" placeholder="Enter Address" >

	  	<button type="submit" class="btn btn-primary">Register</button>
  	</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>





