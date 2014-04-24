<?php
 function sanityCheck($string, $type, $length){

  // assign the type
  $type = 'is_'.$type;

  if(!$type($string))
    {
    return FALSE;
    }
  // now we see if there is anything in the string
  elseif(empty($string))
    {
    return FALSE;
    }
  // then we check how long the string is
  elseif(strlen($string) > $length)
    {
    return FALSE;
    }
  else
    {
    // if all is well, we return TRUE
    return TRUE;
    }
}

function checkEmail($email){
  return preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $email) ? TRUE : FALSE;
}

if(checkEmail($_POST['email']) != FALSE){
	$email = $_POST['email'];
        }
    else
        {
        header('Location: ../index.html');
        exit();
        }

$con=mysqli_connect("localhost","bemberry_root","rootpassword","bemberry_master");
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security

$sql = "INSERT INTO `EmailAddresses` (Email) VALUES ('" . $email . "' )";

if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}
header("Location: ../index.html");

mysqli_close($con);
?>