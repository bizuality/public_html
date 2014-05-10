<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include($root . '/public_html/variables/user_userspage_variables.php');
require_once($root . '/public_html/includes/secure_header.php');
 
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$requestMethod = "GET";
$getfield = '?screen_name=' . $twitter_user . '&count=1000';

$string = json_decode($twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest(),$assoc = TRUE);

foreach($string as $items)
    {
		echo $items['text'];
    }	
    
include($root . '/public_html/includes/footer.php');
?>