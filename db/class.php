<?php
$url=strtok($_SERVER["REQUEST_URI"],'?');
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
					session_start();
					$_SESSION['username'] = $sto_username;
					$_SESSION['password'] = $sto_password;
					session_write_close();
					header("Location: /public_html/pages/accounts/users_page.php");
				}
				else{
					header("Location: $_SERVER[HTTP_REFERER]?msg=error&value=1");
				}
			}
		}
		
		function checkLogin($table) {
			global $bdb;
			
			session_start();
			//Set our user and authID variables
			$username = $_SESSION['username'];
			$password = $_SESSION['password'];
			session_write_close();
			
			if (!empty($username)) {
				$sql = "SELECT * FROM $table WHERE username ='" . $username . "'";
				$results = $bdb->select($sql);
			
				//Fetch our results into an associative array
				$results = mysql_fetch_assoc( $results );
			
				$sto_username = $results['username'];
				$sto_password = $results['password'];
			
				if($sto_username == $username && $sto_password == $password) {
					$results = true;
				}
				else {
					$results = false;
				}
			}
			else {
				header("Location: /public_html/index.php?msg=error&value=2");
				exit;
			}
			return $results;
		}
		
		function logout() {
			session_start();

			// Unset all of the session variables.
			$_SESSION = array();

			// If it's desired to kill the session, also delete the session cookie.
			// Note: This will destroy the session, and not just the session data!
			if (ini_get("session.use_cookies")) {
    			$params = session_get_cookie_params();
    			setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
			}

			// Finally, destroy the session.
			session_destroy();
		}
		
		function changePassword($username, $table) {
			global $bdb;
			
			$results = false;
			if( !empty($_POST)){
				
				// Clean up.
				$values = $bdb->clean($_POST);
				
				// Set variables.
				$old_password = $_POST['old_password'];
				$new_password = $_POST['new_password'];
				$confirm_password = $_POST['confirm_password'];
				
				$sql = "SELECT * FROM $table WHERE username ='" . $username . "'";
				$results = $bdb->select($sql);
				
				$results = mysql_fetch_assoc( $results );
				
				$sto_password = $results['password'];
				
				if($old_password == $sto_password){
					if($new_password == $confirm_password) {
						$sql = "UPDATE $table SET password ='" . $new_password . "' WHERE username ='" . $username . "'";
						$results = $bdb->update($sql);
					}
					else {
						// new passwords do not match
					}
				}
				else {
					// old does not match stored
				}	
			}
			
			return $results;
		}
	}
}

//Instantiate our database class
$b = new Bizuality;
?>