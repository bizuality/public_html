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
			
			// So that we don't pile up parameters in the URL.
			$uri_parts = explode('?', $_SERVER['HTTP_REFERER'], 2);
			$url = $uri_parts[0];
			
			if (! empty($_POST)) {
				$values = $bdb->clean($_POST);
				
				$username = $_POST['username'];
				$password = $_POST['password'];
				$password = $bdb->hash_password($password);
				
				$sql = "SELECT * FROM $table WHERE username = '" . $username . "'";
				$results = $bdb->select($sql);
				
				//Kill the script if the submitted username doesn't exit
				if (!$results) {
					die('Sorry, that username does not exist!');
				}
				
				$results = mysql_fetch_assoc( $results );
				
				$sto_username = $results['username'];
				$sto_password = $results['password'];
				$sto_pid = $results['sc_pid'];
				$sto_analytics_sub = $results['analytics_sub'];
				
				if($sto_username == $username && $sto_password == $password) {
					session_start();
					$_SESSION['username'] = $sto_username;
					$_SESSION['sc_pid'] = $sto_pid;
					$_SESSION['analytics_sub'] = $sto_analytics_sub;
					session_write_close();
					header("Location: /public_html/pages/accounts/users_page.php");
				}
				else{
					header("Location: $url?msg=error&value=1");
				}
			}
		}
		
		function checkLogin($table) {
			global $bdb;
			
			// So that we don't pile up parameters in the URL.
			$uri_parts = explode('?', $_SERVER['HTTP_REFERER'], 2);
			$url = $uri_parts[0];
			
			session_start();
			//Set our user and authID variables
			$username = $_SESSION['username'];
			session_write_close();
			
			if (!empty($username)) {
				$sql = "SELECT * FROM $table WHERE username ='" . $username . "'";
				$results = $bdb->select($sql);
			
				//Fetch our results into an associative array
				$results = mysql_fetch_assoc( $results );
			
				$sto_username = $results['username'];
			
				if($sto_username == $username) {
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
			
			// So that we don't pile up parameters in the URL.
			$uri_parts = explode('?', $_SERVER['HTTP_REFERER'], 2);
			$url = $uri_parts[0];
			
			$results = false;
			if( !empty($_POST)){
				
				// Clean up.
				$values = $bdb->clean($_POST);
				
				// Set variables.
				$old_password = $_POST['old_password'];
				$old_password = $bdb->hash_password($old_password);
				$new_password = $_POST['new_password'];
				$new_password = $bdb->hash_password($new_password);
				$confirm_password = $_POST['confirm_password'];
				$confirm_password = $bdb->hash_password($confirm_password);
				
				$sql = "SELECT * FROM $table WHERE username ='" . $username . "'";
				$results = $bdb->select($sql);
				
				$results = mysql_fetch_assoc( $results );
				
				$sto_password = $results['password'];
				
				if($old_password == $sto_password){
					if($new_password == $confirm_password) {
						$sql = "UPDATE $table SET password ='" . $new_password . "' WHERE username ='" . $username . "'";
						$results = $bdb->update($sql);
						if($results) {
							header("Location: $url?msg=success&value=2");
						}
					}
					else {
						header("Location: $url?msg=error&value=4");
					}
				}
				else {
					header("Location: $url?msg=error&value=3");
				}	
			}
			
			return $results;
		}
		
		function changeEmail($username, $table) {
			global $bdb;
			
			// So that we don't pile up parameters in the URL.
			$uri_parts = explode('?', $_SERVER['HTTP_REFERER'], 2);
			$url = $uri_parts[0];
			
			$results = false;
			if( !empty($_POST)){
				
				// Clean up.
				$values = $bdb->clean($_POST);
				
				// Set variables.
				$old_email = $_POST['old_email'];
				$new_email = $_POST['new_email'];
				$confirm_email = $_POST['confirm_email'];
				
				$sql = "SELECT * FROM $table WHERE username ='" . $username . "'";
				$results = $bdb->select($sql);
				
				$results = mysql_fetch_assoc( $results );
				
				$sto_email = $results['email'];
				
				if($old_email == $sto_email){
					if($new_password == $confirm_password) {
						$sql = "UPDATE $table SET email ='" . $new_email . "' WHERE username ='" . $username . "'";
						$results = $bdb->update($sql);
						if($results) {
							header("Location: $url?msg=success&value=4");
						}
					}
					else {
						header("Location: $url?msg=error&value=8");
					}
				}
				else {
					header("Location: $url?msg=error&value=9");
				}	
			}
			
			return $results;
		}
		
		function askQuestion($username, $table) {
			global $bdb;
			
			// So that we don't pile up parameters in the URL.
			$uri_parts = explode('?', $_SERVER['HTTP_REFERER'], 2);
			$url = $uri_parts[0];
			
			$results = false;
			if( !empty($_POST)){
				
				// Clean up.
				$values = $bdb->clean($_POST);
				
				// Set variables.
				$category = $_POST['category'];
				$question = $_POST['question'];
				
				$to = 'support@bizuality.com';
				$subject = 'User Question - bizuality';
				$message = $username . 'has a question...\n';
				$message .= 'Their question is classified under' . $category . '.\n';
				$message .= 'Question: \n';
				$message .= $question;
				$message = wordwrap($message, 70); // PHP does not allow line lengths over 70.
				
				
				// Send the email...	
				$results = mail($to, $subject, $message);
				
				header("Location: $url?msg=success&value=3");
			}
			else {
				header("Location: $url?msg=error&value=6");	
			}
			
			return $results;
		}
		
		function checkAnalyticSub($username, $table) {
			global $bdb;
			
			// So that we don't pile up parameters in the URL.
			$uri_parts = explode('?', $_SERVER['HTTP_REFERER'], 2);
			$url = $uri_parts[0];
			
			if(!empty($username)) {
				$sql = "SELECT * FROM $table WHERE username ='" . $username . "'";
				$results = $bdb->select($sql);
			
				//Fetch our results into an associative array
				$results = mysql_fetch_assoc( $results );
			
				$isSub = $results['analytics_sub'];
				
				if($isSub){
					header("Location: /public_html/pages/accounts/analytics.php");
				}
				else {
					header("Location: $url?msg=error&value=6");	
				}
			}
			
			return $isSub;
		}
	}
}

//Instantiate our database class
$b = new Bizuality;
?>