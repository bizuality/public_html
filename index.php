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

    <title><?php echo $default_heading ?></title>

	<?php include($root . '/public_html/includes/header.php'); ?>
    
    <!-- Full Page Image Header Area -->
    <div id="top" class="header">
        <div class="vert-text">
        		<img class="img-responsive center-block" src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/img/bizuality_logo_2.png">
            <h3>
            	<i class="popover-icon hoverable spin-on-scroll fa fa-code fa-2x" data-trigger="hover" data-placement="bottom" data-content="We will do the hard work for you!"></i>
            	<i class="popover-icon hoverable spin-on-scroll fa fa-group fa-2x" data-trigger="hover" data-placement="bottom" data-content="Updating statuses is a thing of the past."></i>
            	<i class="popover-icon hoverable spin-on-scroll fa fa-mobile fa-2x" data-trigger="hover" data-placement="bottom" data-content="Take your website with you."></i> 
            	<i class="popover-icon hoverable spin-on-scroll fa fa-gears fa-2x" data-trigger="hover" data-placement="bottom" data-content="We handle the settings."></i>
				<i class="popover-icon hoverable spin-on-scroll fa fa-laptop fa-2x" data-trigger="hover" data-placement="bottom" data-content="Have the ingredients? We cook from scratch."></i>
				<i class="popover-icon hoverable spin-on-scroll fa fa-pencil fa-2x" data-trigger="hover" data-placement="bottom" data-content="We write the code for you, no technical background needed!"></i>
				<i class="popover-icon hoverable spin-on-scroll fa fa-eye fa-2x" data-trigger="hover" data-placement="bottom" data-content="Get people looking at your site!"></i>
				<i class="popover-icon hoverable spin-on-scroll fa fa-briefcase fa-2x" data-trigger="hover" data-placement="bottom" data-content="We do business stuff too, harness the power of data!"></i>
				<i class="popover-icon hoverable spin-on-scroll fa fa-folder-open fa-2x" data-trigger="hover" data-placement="bottom" data-content="We can host your files, don't rely on shoddy service."></i>
			</h3>
            <h3>Helping <em>you </em>maximize <em>your </em>web, mobile, and social media possibilities.</h3>
            <a href="#about" class="btn btn-default btn-lg">Find Out More</a>

        </div>
    </div>
    <!-- /Full Page Image Header Area -->

    <!-- Call to Action -->
    <div id="about" class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 text-center hoverable-color">
                    <h3>
                    	<i class="service-icon hoverable fa fa-eye fa-2x"></i>
                    	<br />
                    	Your Business, Your Vision
                    </h3>
                    <p>We will work closely with you to help design the best web, mobile and/or social media platform to grow your business.</p>
                </div>
                <div class="col-lg-4 col-md-4 text-center hoverable-color">
                    <h3>
                    	<i class="service-icon hoverable fa fa-laptop fa-2x"></i>
                    	<br />
                    	Web Design &amp; Redesign
                    </h3>
                    <p>Whether you need to start from scratch or simply refresh your website content and template, we can help you complete your vision.</p>
                </div>
                <div class="col-lg-4 col-md-4 text-center hoverable-color">
                    <h3>
                    	<i class="service-icon hoverable fa fa-mobile fa-2x"></i>
                    	<br />
                    	Your Company, On The Go</h3>
                    <p>Today, more than half of all users view websites on mobile devices, however fewer than 5% of websites are optimally formatted for mobile use.  We will work with you to extend your current website to the most effective mobile interface, or help you refresh your current mobile design.</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /Call to Action -->

	<?php include($root . '/public_html/includes/footer.php'); ?>
	<?php include($root . '/public_html/includes/contact_modal.php'); ?>
	<?php include($root . '/public_html/includes/javascript.php'); ?>
	<?php include($root . '/public_html/includes/analytics.php'); ?>
<script>
  $(document).ready(function(){
    $('.carousel').carousel({interval: 500});
  });
</script>
	
</body>
</html>
