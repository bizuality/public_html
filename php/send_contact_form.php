<?php
$con=mysqli_connect("localhost","trevor", "rootpassword","tester");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$first_name = $_POST['first_name'];
$last_name =  $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$goal= $_POST['goal'];

$sql="INSERT INTO form_data (first_name, last_name, email, phone, goal)
VALUES ('$first_name', '$last_name', '$email', '$phone', '$goal'";

mysqli_query($con,$sql);

echo "1 record added";

mysqli_close($con);
?>