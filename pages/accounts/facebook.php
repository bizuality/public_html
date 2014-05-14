<?php 
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

include($root . '/variables/user_analytics_variables.php');
require_once($root .'/includes/secure_header.php');
require_once($root . '/resources/helpers/FacebookAPIExchange.php');

$settings = array(
    'app_id' => FACEBOOK_APP_ID,
    'app_secret' => FACEBOOK_APP_SECRET
);

$facebook = new FacebookAPIExchange($settings);
$facebook->setGetField('nike/insights');
$insights = $facebook->performRequest();
$facebook->setGetField('nike');
$user = $facebook->performRequest();
$facebook->setGetField('nike/posts');
$posts = $facebook->performRequest();

?>

    <div id="website_design" class="main-content-alternate">
        <div class="container">
            <div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12 text-center">
            		<h1><?php echo $user['name']; ?></h1>
            		<p><?php 
            			if(isset($user['location']['city'])) { 
            				echo $user['location']['city'];
            				echo ', ';
            			} 
            			if(isset($user['location']['state'])) { 
            				echo $user['location']['state'];
            			}; 
            		?></p>
            		<p><small><?php echo $user['about']; ?></small></p>
            	<div>
            	<div class="col-lg-4 col-md-4 col-sm-4 text-center hoverable-color-fixed">
                	<i class="hoverable fa fa-thumbs-o-up fa-4x"></i>
                	<p>Likes</p>
                	<h1><?php echo number_format($user['likes']); ?></h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 text-center hoverable-color-fixed">
                	<i class="hoverable fa fa-quote-left fa-4x"></i>
                	<p>Talking About</p>
                	<h1><?php echo number_format($user['talking_about_count']); ?></h1>
                </div>
               	<div class="col-lg-4 col-md-4 col-sm-4 text-center hoverable-color-fixed">
                	<i class="hoverable fa fa-map-marker fa-4x"></i>
                	<p>Were Here</p>
                	<h1><?php echo number_format($user['were_here_count']); ?></h1>
                </div>
            </div>
            <div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 hoverable-color-fixed text-center">
					<h2>Your Most Recent Post</h2>
					<hr class="short"/>
					<div class="col-lg-10 col-md-10 col-sm-10">
						<h3 class="text-left"><?php echo $posts['data'][0]['from']['name'] . ': ' . $posts['data'][0]['message']; ?></h3>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2">
						<h3><i class="hoverable fa fa-share"></i> <?php echo number_format($posts['data'][0]['shares']['count']); ?></h3>	
					</div>
				</div>
            </div>
        </div>
    </div>
    
<?php
require_once($root . '/includes/footer.php');
?>
