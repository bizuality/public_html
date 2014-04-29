<?php
$con=mysqli_connect("localhost","trevor", "rootpassword","forms");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$table_name = 'contact_form_data';
$first_name = mysql_real_escape_string($_POST['first_name']);
$last_name =  mysql_real_escape_string($_POST['last_name']);
$email = mysql_real_escape_string($_POST['email']);
$phone = mysql_real_escape_string($_POST['phone']);
$goal= mysql_real_escape_string($_POST['goal']);

$sql = "INSERT INTO $table_name (first_name, last_name, email, phone, goal) VALUES ('".$first_name."', '".$last_name."', '".$email."', '".$phone."', '".$goal."')";

mysqli_query($con,$sql) or die(mysql_error());

mysqli_close($con);
?>