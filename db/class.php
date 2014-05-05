<?php
// Our main class
if(!class_exists('Bizuality')){
	class Bizuality {
	
		function submitContactForm($table) {
			global $bdb;
			
			if( !empty($_POST)){
			
				// Set the fields to the correct values.
				$fields = array('first_name', 'last_name', 'email', 'phone', 'goal');
				
				// Clean up.
				$values = $bdb->clean($_POST);
				
				// Set variables.
				$first_name = $_POST['first_name'];
				$last_name = $_POST['last_name'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];
				$goal = $_POST['goal'];
				
				
				// Package variables.
				$values = array(
								'first_name' => $first_name,
								'last_name' => $last_name,
								'email' => $email,
								'phone' => $phone,
								'goal' => $goal
							);
				
				// Insert to database.			
				$insert = $bdb->insert($link, $table, $fields, $values);
				
				if($insert != TRUE){
					die("Failure to insert data.");
				}
					
			}
		}
		
		function login($table) {
			global $bdb;
			
			if (! empty($_POST)) {
				$values = $bdb->clean($_POST);
				
				$username = $_POST['username'];
				$password = $_POST['password'];
				
				$sql = "SELECT * FROM $table WHERE username = '" . $username . "'";
				$results = $bdb->select($sql);
				
				//Kill the script if the submitted username doesn't exit
				if (!$results) {
					die('Sorry, that username does not exist!');
				}
				
				$results = mysql_fetch_assoc( $results );
				
				$sto_username = $results['username'];
				$sto_password = $results['password'];
				
				if($sto_username == $username && $sto_password == $password) {
					setcookie('bizuality[user]', $username, 0, '', '', '', true);
					header("Location: /public_html/pages/users_page.php");
				}
				else{
					header("Location: /public_html/index.php?msg=error&value=1");
				}
			}
		}
		
	}
}

//Instantiate our database class
$b = new Bizuality;
?>