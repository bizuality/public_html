<?php
session_start();
if(!isset($_SESSION['instagram_user'])) {
	header("Location: /pages/accounts/faq.php?msg=error&value=12");
}
else {
	$instagram_user = $_SESSION['instagram_user'];
}

$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include($root . '/variables/user_analytics_variables.php');
require_once($root . '/includes/secure_header.php');
require_once($root . '/resources/helpers/InstagramAPIExchange.php');


$instagram = new InstagramAPIExchange(INSTAGRAM_CLIENT_ID);
$instagram->setGetField('users/' . $instagram_user);
$user_info = $instagram->performRequest();
$user_info = $user_info['data'];

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
        </div>
    </div>
    
<?php
require_once($root . '/includes/footer.php');
?>
