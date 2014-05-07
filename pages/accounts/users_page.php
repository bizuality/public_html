<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]);
include($root . '/public_html/variables/user_userspage_variables.php');
require_once($root . '/public_html/includes/secure_header.php');
?>

<!-- Content Body -->
    <div id="website_design" class="main-content-alternate">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center slide-down-onload">
                	<hr />
                	<img class="img-responsive center-block" src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/img/bizuality_logo_small.png">
                    <h1><?php echo $username; ?>'s User Hub</h1>
                    <hr />
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color service-item">
            		<h2>
            			<a class="icon-link" href="/public_html/db/helpers/logout.php">
            				<i class="popover-icon fa <?php echo $variables['col_01_icon'] ?> fa-4x"></i>
            			</a>
					</h2>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color">
            		<h2>
            			<a class="icon-link" href="/public_html/pages/accounts/settings.php">
            				<i class="popover-icon fa <?php echo $variables['col_02_icon']; ?> fa-4x"></i>
            			</a>
					</h2>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color">
            		<h2>
            			<a class="icon-link" href="/public_html/pages/accounts/analytics.php">
            				<i class="popover-icon fa <?php echo $variables['col_03_icon']; ?> fa-4x"></i>
            			</a>
					</h2>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color">
            		<h2>
            			<a class="icon-link" href="/public_html/pages/accounts/faq.php">
            				<i class="popover-icon fa <?php echo $variables['col_04_icon']; ?> fa-4x"></i>
            			</a>
					</h2>
                </div>
            </div>
        </div>
    </div>
<!-- /Content Body -->

<?php include($root . '/public_html/includes/footer.php'); ?>