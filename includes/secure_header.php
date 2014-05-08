<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); 

require_once($root .  '/public_html/resources/load.php');

$table_name = 'user_logins';
$logged = $b->checkLogin($table_name);
if($logged) {
	$username = $_SESSION['username'];
	$pid = $_SESSION['sc_pid'];
	$analytics_sub = $_SESSION['analytics_sub'];
}

if(basename($_SERVER['REQUEST_URI']) == 'analytics.php' or basename($_SERVER['REQUEST_URI']) == 'more_visitor_info.php') {
	if(!$analytics_sub) {
		header("Location: /public_html/pages/accounts/users_page.php?msg=error&value=7");
	}
}

require_once($root . '/public_html/includes/header.php');
?>