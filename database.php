<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mobile";
$postdata = file_get_contents("php://input");
 $request = json_decode($postdata);
 
 $model = $request->model;
 $price = $request->price;
 $color = $request->color;
 $specification = $request->specification;
 $company = $request->company;
 
// Create connection
$conn = mysqli_connect($servername,$username, $password,$dbname);
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$query = "INSERT INTO mob (`model`,`price`,`color`,`specification`,`company`,) VALUES ('".$model."','".$price."','".$color."','".$specification."','".$company."',)";
if ($conn->query($query) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error: " . $query . "<br>" . $conn->error;
} ?>
