<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); 

require_once($root .  '/resources/load.php');

$table_name = 'users';
$logged = $b->checkLogin($table_name);
if($logged) {
	$username = $_SESSION['username'];
	$pid = $_SESSION['sc_pid'];
	$analytics_sub = $_SESSION['analytics_sub'];
	$twitter_user = $_SESSION['twitter_user'];
	$twitter_user_competitor_01 = $_SESSION['twitter_user_competitor_01'];
	$twitter_user_competitor_02 = $_SESSION['twitter_user_competitor_02'];
	$twitter_user_competitor_03 = $_SESSION['twitter_user_competitor_03'];
	$facebook_user = $_SESSION['facebook_user'];
}

if(basename($_SERVER['REQUEST_URI']) == 'analytics.php' or basename($_SERVER['REQUEST_URI']) == 'more_visitor_info.php') {
	if(!$analytics_sub) {
		header("Location: /pages/accounts/users_page.php?msg=error&value=7");
	}
}

require_once($root . '/includes/header.php');

?>

