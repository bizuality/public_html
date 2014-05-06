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
                    <h2><?php echo $username; ?>'s Settings</h2>
                    <hr />
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color service-item">
            		<h4>Change Password</h4>
            		<form class="col-form" action="/public_html/db/change_password.php" method="post" accept-charset="UTF-8">
						<div class="input-group sign-in-form">
  							<input id="old_password" type="password" name="old_password" placeholder="Old Password"/>
  							<input id="new_password" type="password" name="new_password" placeholder="New Password" />
  							<input id="confirm_password" type="password" name="confirm_password" placeholder="Confirm New Password" />
  							<button id="signInButton" class="btn-custom-form btn btn-lg center-block" type="submit">Submit</button>
  						</div>
					</form>
                </div>
            </div>
        </div>
    </div>
<!-- /Content Body -->

<?php include($root . '/public_html/includes/footer.php'); ?>