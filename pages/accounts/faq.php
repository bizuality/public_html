<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]);
include($root . '/variables/user_faq_variables.php');
require_once($root . '/includes/secure_header.php');
?>

<!-- Content Body -->
    <div id="website_design" class="main-content-alternate">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center slide-down-onload">
                	<hr class="thick"/>
                	<img class="img-responsive center-block" src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/img/bizuality_logo_small.png">
                    <h1>FAQ</h1>
                    <hr class="thick"/>
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 text-center hoverable-color service-item">
            		<h2><?php echo $variables['col_01_title']; ?></h2>
            		<p><?php echo $variables['col_01_text']; ?></p>
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 text-center hoverable-color service-item">
            	   	<h2><?php echo $variables['col_02_title']; ?></h2>
            		<p><?php echo $variables['col_02_text']; ?></p>
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 text-center hoverable-color service-item">
            	   	<h2>Why are my Facebook analytics lagging?</h2>
            		<p>We analyze the data that comes from Facebook in realtime, however, it takes Facebook up to 48 hours to process the data from your page on their end. There is nothing we can do at this time to prevent lagging from Facebook.</p>
                </div>
            </div>
            <div id="#question" class="row">
            	<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 text-center hoverable-color service-item">
            		<h2>How else can we help you?</h2>
            		<form class="col-form" action="/resources/helpers/ask_question.php" method="post" accept-charset="UTF-8">
						<div class="input-group custom-form-lg">
							<select id="category" name="category">
  								<option value="updating page">I need help updating my page.</option>
  								<option value="adding more space">I need help adding more space for content.</option>
  								<option value="understanding analytics">I need help understanding my analytics.</option>
  								<option value="account information">I need help with my account information. </option>
  								<option value="updating competitors">I need to update my competitors.</option>
  								<option value="subscribing to analytics">I want to subscribe to analytics.</option>
							</select>
  							<textarea id="question" type="text" name="question" placeholder="Tell us more!"></textarea>
  							<button id="signInButton" class="btn-custom-form btn btn-lg center-block" type="submit">Submit</button>
  						</div>
					</form>
            	</div>
            </div>
        </div>
    </div>
<!-- /Content Body -->

<?php include($root . '/includes/footer.php'); ?>
