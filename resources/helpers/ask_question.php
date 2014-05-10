<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .  '/public_html/resources/load.php');

// Get the user name to look up the password.
session_start();
if(isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
}
session_write_close();

$table = 'user_logins';
$didHappen = $b->askQuestion($username, $table);

?>