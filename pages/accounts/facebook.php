<?php 
session_start();
if(!isset($_SESSION['facebook'])) {
	header("Location: /pages/accounts/settings.php?msg=error&value=10");
}
else{
	$sessionToken = $_SESSION['facebook'];
	if(isset($_SESSION['facebook_user'])) {
		$facebook_user = $_SESSION['facebook_user'];
	}
	else {
		header("Location: /pages/accounts/faq.php?msg=error&value=11");
	}
}
session_write_close();

$root = realpath($_SERVER["DOCUMENT_ROOT"]);

include($root . '/variables/user_analytics_variables.php');
require_once($root .'/includes/secure_header.php');
require_once($root .  '/resources/helpers/Facebook/FacebookSession.php' );

use Facebook\FacebookSession;

$session = new FacebookSession($sessionToken);
if($session) {
	$page_info = file_get_contents('https://graph.facebook.com/' . $facebook_user . '?access_token=' . $session->getToken());
	$page_info = json_decode($page_info, true);
	$insights = file_get_contents('https://graph.facebook.com/' . $facebook_user . '/insights' . '?access_token=' . $session->getToken());
	$insights = json_decode($insights, true);
	$insights = $insights['data']; // 'data' is the container of all other elements.
	
	/****************************************************
	 * searchForName Function
	 *
	 * This function finds the first index at which the
	 * name matches. If the day, week, and month data exists
	 * for your searched name, you may acces those by the
	 * returned value + 1 for the week, and returned value
	 * + 2 for days_28.
	 *
	 * Params: $name - the name of the endpoint.
	 * 		   $array - the array you are searching.
	 *
	 * Returns: int $i - the first index at which the name
	 *                   exists.
	 *
	**/
	function searchForName($name, $array){
    	$length = count($array);
    	for($i = 0; $i < $length; $i++){
    		if($array[$i]['name'] == $name) {
    			return $i;
    		}
    	}
    	return false;
	}
	
	$page_fan_adds_index = searchForName('page_fan_adds', $insights);
	$page_fan_removes_index = searchForName('page_fan_removes', $insights);
	$page_views_login_index = searchForName('page_views_login', $insights);
	$page_views_logout_index = searchForName('page_views_logout', $insights);
	$page_story_adds_index = searchForName('page_story_adds', $insights); // index of daily insight by default.
	$page_story_adds_by_story_type_index = searchForName('page_story_adds_by_story_type', $insights); //index of daily insight by default
}
?>

    <div id="website_design" class="main-content-alternate">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center slide-down-onload">
                	<hr class="thick" />
                	<h1><i class="fa fa-facebook-square"></i> <?php echo $page_info['name']; ?></h1>
                	<p><small><?php echo $page_info['about']; ?></small></p>
                	<hr class="thick" />
                	<p>As of <?php echo date('l\, F j\, Y h:i:s A'); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-xs-6 text-center hoverable-color-fixed">
                	<i class="service-item hoverable fa fa-thumbs-up fa-4x"></i>
                	<hr class="short" />
                	<h4>Likes</h4>
                	<h2><?php echo $page_info['likes']; ?></h2>
                </div>
                <div class="col-md-3 col-xs-6 text-center hoverable-color-fixed">
                	<i class="service-item hoverable fa fa-volume-up fa-4x"></i>
                	<hr class="short" />
                	<h4>Talking About</h4>
                	<h2><?php echo $page_info['talking_about_count']; ?></h2>
                </div>
            	<div class="col-md-3 col-xs-6 text-center hoverable-color-fixed">
                	<i class="service-item hoverable fa fa-map-marker fa-4x"></i>
                	<hr class="short" />
                	<h4>Were Here</h4>
                	<h2><?php echo $page_info['were_here_count']; ?></h2>
                </div>
                <div class="col-md-3 col-xs-6 text-center hoverable-color-fixed">
                	<i class="service-item hoverable fa fa-flag fa-4x"></i>
                	<hr class="short" />
                	<h4>Check Ins</h4>
                	<h2><?php echo $page_info['checkins']; ?></h2>
                </div>
            </div>
            <hr class="thick" />
            <div class="row">
                <div class="col-xs-12 text-center">
            		<h2>Vitals</h2>
            		<hr class="short" />
            	</div>
            	<div class="col-md-3 col-xs-6 text-center hoverable-color-fixed">
            		<h4>New Likes Today</h4>
            		<hr class="short" />
            		<h2><?php echo $insights[$page_fan_adds_index]['values'][2]['value']; // 2 for the most recent data, three given, we choose most recent.?></h2>
            	</div>
            	<div class="col-md-3 col-xs-6 text-center hoverable-color-fixed">
            		<h4>Unlikes Today</h4>
            		<hr class="short" />
            		<h2><?php echo $insights[$page_fan_removes_index]['values'][2]['value']; // 2 for the most recent data, three given, we choose most recent.?></h2>
            	</div>
            	<div class="col-md-3 col-xs-6 text-center hoverable-color-fixed">
            		<h4>Page Views From Logged In Users Today</h4>
            		<hr class="short" />
            		<h2><?php echo $insights[$page_views_login_index]['values'][2]['value']; // 2 for the most recent data, three given, we choose most recent.?></h2>
            	</div>
            	<div class="col-md-3 col-xs-6 text-center hoverable-color-fixed">
            		<h4>Page Views From Un-Logged Users Today</h4>
            		<hr class="short" />
            		<h2><?php echo $insights[$page_views_logout_index]['values'][2]['value']; // 2 for the most recent data, three given, we choose most recent.?></h2>
            	</div>
            </div>
            <hr class="thick" />
            <div class="row">
            	<div class="col-xs-12 text-center">
            		<h2>Stories</h2>
            		<hr class="short" />
            	</div>
            	<div class="col-md-3 col-xs-12 text-center hoverable-color-fixed">
            		<h3>Stories Created</h3>
            		<hr class="short" />
            		<h4>Today</h4>
            		<h2><?php echo $insights[$page_story_adds_index]['values'][2]['value']; // 2 for the most recent data, three given, we choose most recent.?></h2>
            		<h4>This Week</h4>
            		<h2><?php echo $insights[$page_story_adds_index + 1]['values'][2]['value']; // 2 for the most recent data, three given, we choose most recent.?></h2>
            		<h4>This Month</h4>
            		<h2><?php echo $insights[$page_story_adds_index + 2]['values'][1]['value']; // 1 for the most recent data, two given, we choose most recent.?></h2>
            	</div>
            	<div class="col-md-9 col-xs-12 text-center hoverable-color-fixed">
            		<h3>Stories Created by Type This Week</h3>
            		<hr class="short" />
            		<div class="col-xs-6 text-center">
            			<h4>By Coupon</h4>
            			<h2><?php echo $insights[$page_story_adds_by_story_type_index + 1]['values'][2]['value']['coupon']; ?></h2>
            			<h4>By Mention</h4>
            			<h2><?php echo $insights[$page_story_adds_by_story_type_index + 1]['values'][2]['value']['mention']; ?></h2>
            			<h4>By Question</h4>
            			<h2><?php echo $insights[$page_story_adds_by_story_type_index + 1]['values'][2]['value']['question']; ?></h2>
            			<h4>By Fan</h4>
            			<h2><?php echo $insights[$page_story_adds_by_story_type_index + 1]['values'][2]['value']['fan']; ?></h2>
            		</div>
            		<div class="col-xs-6 text-center">
            			<h4>By Checkin</h4>
            			<h2><?php echo $insights[$page_story_adds_by_story_type_index + 1]['values'][2]['value']['checkin']; ?></h2>
            			<h4>By User Post</h4>
            			<h2><?php echo $insights[$page_story_adds_by_story_type_index + 1]['values'][2]['value']['user post']; ?></h2>
            			<h4>By Page Post</h4>
            			<h2><?php echo $insights[$page_story_adds_by_story_type_index + 1]['values'][2]['value']['page post']; ?></h2>
            			<h4>By Other</h4>
            			<h2><?php echo $insights[$page_story_adds_by_story_type_index + 1]['values'][2]['value']['other']; ?></h2>
            		</div>
            	</div>
            </div>
        </div>
    </div>
    
<?php
require_once($root . '/includes/footer.php');
?>
