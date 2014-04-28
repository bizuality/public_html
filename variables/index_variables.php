<?php

$con=mysqli_connect("localhost","trevor", "rootpassword","variables");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$title =  mysqli_query($con, "SELECT value FROM index_variables WHERE variable_name='title'") or die("MySQL Variable Error");
$title = mysqli_fetch_array($title);
$title = $title['value'];

?>