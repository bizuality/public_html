<?php
	require_once('TwitterAPIExchange.php');
	
	/*********** Set Auth Tokens ***********/
	$settings = array (
		'oauth_access_token' => "PwRCEKt5WKYvy4tGxlJBtDJWd",
		'oauth_access_token_secret' => "mtx5Nm65ghOprs5XgZuFcqIFBbnzEDthBRYqlwUlIAApGpim9d",
		'consumer_key' => "PwRCEKt5WKYvy4tGxlJBtDJWd",
		'consumer_secret' => "mtx5Nm65ghOprs5XgZuFcqIFBbnzEDthBRYqlwUlIAApGpim9d"
	);
	
	$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
	
	$requestMethod = "GET";
	
	$getfield = '?screen_name=trevorhutto&count=20';
	
	$twitter = new TwitterAPIExchange($settings);
	
	echo $twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest();
?>
