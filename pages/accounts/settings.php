<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]);
include($root . '/variables/user_settings_variables.php');
require_once($root . '/includes/secure_header.php');
?>

<!-- Content Body -->
    <div id="website_design" class="main-content-alternate">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center slide-down-onload">
                	<hr />
                	<img class="img-responsive center-block" src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/img/bizuality_logo_small.png">
                    <h1><?php echo $username; ?>'s Settings</h1>
                    <hr />
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color service-item">
            		<h3><?php echo $variables['col_01_heading'] ?></h3>
            		<form class="col-form" action="/resources/helpers/change_password.php" method="post" accept-charset="UTF-8">
						<div class="input-group custom-form">
  							<input id="old_password" type="password" name="old_password" placeholder="Old Password"/>
  							<input id="new_password" type="password" name="new_password" placeholder="New Password" />
  							<input id="confirm_password" type="password" name="confirm_password" placeholder="Confirm New Password" />
  							<button class="btn-custom-form btn btn-lg center-block" type="submit">Submit</button>
  						</div>
					</form>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color service-item">
            		<h3><?php echo $variables['col_02_heading'] ?></h3>
            		<form class="col-form" action="/resources/helpers/change_email.php" method="post" accept-charset="UTF-8">
						<div class="input-group custom-form">
  							<input id="old_email" type="text" name="old_email" placeholder="Old Email"/>
  							<input id="new_email" type="text" name="new_email" placeholder="New Email" />
  							<input id="confirm_email" type="text" name="confirm_email" placeholder="Confirm New Email" />
  							<button class="btn-custom-form btn btn-lg center-block" type="submit">Submit</button>
  						</div>
					</form>
                </div>
            </div>
        </div>
    </div>
<!-- /Content Body -->

<?php include($root . '/includes/footer.php'); ?>