<?php

session_start();
require_once( 'Facebook/FacebookSession.php' );
require_once( 'Facebook/FacebookRedirectLoginHelper.php' );
require_once( 'Facebook/FacebookRequest.php' );
require_once( 'Facebook/FacebookResponse.php' );
require_once( 'Facebook/FacebookSDKException.php' );
require_once( 'Facebook/FacebookRequestException.php' );
require_once( 'Facebook/FacebookAuthorizationException.php' );
require_once( 'Facebook/GraphObject.php' );
 
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
 
 
// init app with app id (APPID) and secret (SECRET)
FacebookSession::setDefaultApplication('637873329634271','39c1e47d1c334308ed868d350c8defc1');
 
// login helper with redirect_uri
$helper = new FacebookRedirectLoginHelper('http://www.bizuality.com/resources/helpers/facebook_login.php' );

try {
  $session = $helper->getSessionFromRedirect();
} catch(FacebookRequestException $ex) {
  // When Facebook returns an error
} catch(Exception $ex) {
  // When validation fails or other local issues
}
if ($session) {
	$_SESSION['facebook'] = $session->getToken();
	header("Location: /pages/accounts/settings.php");
}
else {
	header("Location:" . $helper->getLoginUrl());
}

session_write_close();
?>