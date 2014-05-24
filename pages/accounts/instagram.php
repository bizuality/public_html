<?php
session_start();
if(!isset($_SESSION['instagram_user'])) {
	header("Location: /pages/accounts/faq.php?msg=error&value=12");
}
else {
	$instagram_user = $_SESSION['instagram_user'];
	$locationKnown = false;
	if(isset($_SESSION['latitude']) and isset($_SESSION['longitude'])) {
		$latitude = $_SESSION['latitude'];
		$longitude = $_SESSION['longitude'];
		$locationKnown = true;
	}
}

$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include($root . '/variables/user_analytics_variables.php');
require_once($root . '/includes/secure_header.php');
require_once($root . '/resources/helpers/InstagramAPIExchange.php');


$instagram = new InstagramAPIExchange(INSTAGRAM_CLIENT_ID);
$instagram->setGetField('users/' . $instagram_user . '/?');
$user_info = $instagram->performRequest();
$user_info = $user_info['data'];
if($locationKnown) {
	$instagram->setGetField('media/search?' . 'lat=' . $latitude . '&lng=' . $longitude . '&distance=5000' . '&count=1000');
	//$instagram->setGetField('media/search?' . 'lat=40.7127' . '&lng=74.0059' . '&distance=5000' . '&count=1000');
	$close_by = $instagram->performRequest();
	$close_by = $close_by['data'];
}

session_write_close();
?>
   <div id="website_design" class="main-content-alternate">
        <div class="container">
        	<div class="row">
        		<div class="col-md-4 col-md-offset-4 text-center slide-down-onload">
                	<hr class="thick" />
                	<h1><i class="fa fa-instagram"></i> <?php echo $user_info['username']; ?></h1>
                	<p><small><?php echo $user_info['bio']; ?></small></p>
                	<hr class="thick" />
                	<p>As of <?php echo date('l\, F j\, Y h:i:s A'); ?></p>
            	</div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-6 text-center hoverable-color-fixed">
                	<i class="service-item hoverable fa fa-group fa-4x"></i>
                	<hr class="short" />
                	<h4>Followers</h4>
                	<h2><?php echo $user_info['counts']['followed_by']; ?></h2>
                </div>
                <div class="col-md-4 col-xs-6 text-center hoverable-color-fixed">
                	<i class="service-item hoverable fa fa-user fa-4x"></i>
                	<hr class="short" />
                	<h4>Following</h4>
                	<h2><?php echo $user_info['counts']['follows']; ?></h2>
                </div>
            	<div class="col-md-4 col-xs-12 text-center hoverable-color-fixed">
                	<i class="service-item hoverable fa fa-film fa-4x"></i>
                	<hr class="short" />
                	<h4>Media</h4>
                	<h2><?php echo $user_info['counts']['media']; ?></h2>
                </div>
            </div>
            <div class="row">
            	<?php if($locationKnown) {
            		echo '<div class="col-lg-12 text-center">
            				<h2>People Nearby <small>(5 km)</small></h2>
            				<hr class="thick" />
            			';
            		$count = 0;
            		foreach($close_by as $location) {
            			echo '<div class="col-md-2 col-xs-4 text-center hoverable-color-fixed">';
            				if(strpos($location['caption']['text'], ' ') !== false) {
            					echo '<a href="' . $location['link'] . '" target="_blank" alt="More information on ' . $location['user']['username'] . '">';
            						echo '<img class="img-responsive center-block" src="'. $location['images']['low_resolution']['url'] . '">';
            					echo '</a>';
            				}
            				else {
            					echo '<img class="img-responsive center-block img-fade" src="'. $location['images']['low_resolution']['url'] . '">';
            				}
                		echo '<p><i class="fa fa-thumbs-up"></i> ' . $location['likes']['count'] . '</p>';
                		echo '</div>';
                		if($count >= 20) {
                			break;
                		}
                		$count++;
            		}
            		echo '</div>';
            	} ?>
            </div>
        </div>
    </div>
    
<?php
require_once($root . '/includes/footer.php');
?>