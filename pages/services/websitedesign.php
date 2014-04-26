<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]);

include($root . '/public_html/variables/variables.php');

?>

<!DOCTYPE html>
<html lang="en">

<head profile="http://www.bizuality.com">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
	<link rel="icon" type="image/png" href="">

    <title>bizualITy - Your Visual Business</title>
	
	<?php include($root . '/public_html/includes/header.php'); ?>
	
    <!-- Call to Action -->
    <div id="about" class="call-to-action">
         <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6 slide-down-onload">
                	<h1>Website Design</h1>
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-12 slide-down-onload">
					<h4 class="lead">We will work with you to design a custom website that meets your needs and vision for your company.<br>
						We specialize in coding brand new designs and redesigns from scratch to make sure your specific customer base and site visitors have a user friendly experience.
					</h4>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 slide-down-onload">
					<img class="img-responsive" src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/img/trevor_website_display.png">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 slide-down-onload focus-area">
					<h4>Website Design and Redesign</h4>
					<p>Whether you want professional, minimal, flashy, or modern; we can design, or redesign, your site to best suit you and your customers.</p>
					<hr />
					<h4>Content Management System</h4>
					<p>Using PHP scripts and database design, we have developed a CMS that allows you to update your website with fresh content without technical assistance or additional cost.</p>

				</div>
            </div>
            <div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 slide-down-onload focus-area">
					<h4 class="lead">We will work with you to design a custom website that meets your needs and vision for your company.<br>
						We specialize in coding brand new designs and redesigns from scratch to make sure your specific customer base and site visitors have a user friendly experience.
					</h4>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 slide-down-onload">
					<img class="img-responsive" src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/img/crowder_stewart_website_display.png">
				</div>

            </div>
        </div><!-- /.container -->
    </div>
    <!-- /Call to Action -->
    
	<?php include($root . '/public_html/includes/footer.php'); ?>
	
	<?php include($root . '/public_html/includes/contact_modal.php'); ?>

	<?php include($root . '/public_html/includes/javascript.php'); ?>
	
	<?php include($root . '/public_html/includes/analytics.php'); ?>

</body>

</html>