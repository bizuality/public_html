<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]);
include($root . '/public_html/variables/user_faq_variables.php');
require_once($root . '/public_html/includes/secure_header.php');
?>

<!-- Content Body -->
    <div id="website_design" class="main-content-alternate">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center slide-down-onload">
                	<hr />
                	<img class="img-responsive center-block" src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/img/bizuality_logo_small.png">
                    <h1>FAQ</h1>
                    <hr />
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12 text-center hoverable-color service-item">
            		<h2><?php echo $variables['col_01_title']; ?></h2>
            		<p><?php echo $variables['col_01_text']; ?></p>
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12 text-center hoverable-color service-item">
            	   	<h2><?php echo $variables['col_02_title']; ?></h2>
            		<p><?php echo $variables['col_02_text']; ?></p>
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12 text-center hoverable-color">
            		<h2>Have a more specific question?</h2>
            		<form class="col-form" action="/public_html/resources/helpers/ask_question.php" method="post" accept-charset="UTF-8">
						<div class="input-group custom-form-lg">
							<select id="category" name="category">
  								<option value="updating page">I need help updating my page.</option>
  								<option value="adding more space">I need help adding more space for content.</option>
  								<option value="understanding analytics">I need help understanding my analytics.</option>
  								<option value="account information">I need help with my account information. </option>
							</select>
  							<textarea id="question" type="text" name="question" placeholder="What can we help you with?"></textarea>
  							<button id="signInButton" class="btn-custom-form btn btn-lg center-block" type="submit">Submit</button>
  						</div>
					</form>
            	</div>
            </div>
        </div>
    </div>
<!-- /Content Body -->

<?php include($root . '/public_html/includes/footer.php'); ?>
