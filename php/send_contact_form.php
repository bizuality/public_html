<?php
$con=mysqli_connect("localhost","trevor", "rootpassword","tester");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$table_name = 'form_data';
$first_name = $_POST['first_name'];
$last_name =  $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$goal= $_POST['goal'];

$sql = "INSERT INTO $table_name (first_name, last_name, email, phone, goal) VALUES ('".$first_name."', '".$last_name."', '".$email."', '".$phone."', '".$goal."')";

mysqli_query($con,$sql) or die(mysql_error());

mysqli_close($con);
?>