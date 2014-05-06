<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .  '/public_html/db/load.php');

session_start();
if(isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
}
session_write_close();

$table = 'user_logins';
$didHappen = $b->changePassword($username, $table);

if($didHappen) {
	header("Location: /public_html/pages/accounts/users_page.php?msg=success&value=2");
}
?>