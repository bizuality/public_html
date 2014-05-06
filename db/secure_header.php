<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); 

require_once($root .  '/public_html/db/load.php');

$table_name = 'user_logins';
$logged = $b->checkLogin($table_name);
if($logged) {
	$username = $_SESSION['username'];
}

require_once($root . '/public_html/includes/header.php');
?>
