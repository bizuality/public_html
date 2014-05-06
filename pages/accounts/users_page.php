<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); 
require_once($root . '/public_html/db/secure_header.php');
?>

<!-- Content Body -->
    <div id="website_design" class="main-content-alternate">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center slide-down-onload">
                	<hr />
                	<img class="img-responsive center-block" src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/img/bizuality_logo_small.png">
                    <h2><?php echo $username; ?>'s User Hub</h2>
                    <hr />
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color service-item">
            		<h1>
            			<i class="popover-icon fa fa-sign-in fa-4x"></i>
					</h1>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color">
            		<h1>
            			<a class="icon-link" href="/public_html/pages/accounts/settings.php">
            				<i class="popover-icon fa fa-gear fa-4x"></i>
            			</a>
					</h1>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color">
            		<h1>
            			<i class="popover-icon fa fa-bar-chart-o fa-4x"></i>
					</h1>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color">
            		<h1>
            			<i class="popover-icon fa fa-question fa-4x"></i>
					</h1>
                </div>
            </div>
        </div>
    </div>
<!-- /Content Body -->

<?php include($root . '/public_html/includes/footer.php'); ?>