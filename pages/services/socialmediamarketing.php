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
    
    <!-- Content Body -->
    <div id="website_design" class="main-content-alternate">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center slide-down-onload">
                	<hr />
                    <h2>Social Media Creation and Marketing</h2>
                    <hr />
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color">
            		<h1>
            			<i class="popover-icon fa fa-facebook fa-4x"></i>
					</h1>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color">
            		<h1>
            			<i class="popover-icon fa fa-twitter fa-4x"></i>
					</h1>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color">
            		<h1>
            			<i class="popover-icon fa fa-linkedin fa-4x"></i>
					</h1>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color">
            		<h1>
            			<i class="popover-icon fa fa-google-plus fa-4x"></i>
					</h1>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-md-3 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa fa-code"></i>
                        <h4>Development Stage</h4>
                        <p>This is <em>your</em> chance to sit back and relax. Our technical staff will do all the hard work for <em>you</em> to make this process as seamless as possible. Our developers will take care in order to ensure the code complies with all the known conventions, and that documentation will be provided with each file.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa fa-eye"></i>
                        <h4>Review Stage</h4>
                        <p>About halfway through the process, we will have a review stage. This is <em>your</em> chance to point out any details you want changed or accept the design. Once the design is to <em>your</em> satisfaction, we will move on to one of the most important steps, testing!</p>
                    </div>
                </div>
                <div class="col-md-3 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa fa-signal"></i>
                        <h4>Testing Stage</h4>
                        <p>This is one of the most important parts to any type of development. Testing is essential to ensure that <em>your</em> product functions the way it is intended. Cross browser capability is a big testing point here, our developers will do their best to make your website look identical on any platform.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa fa-laptop"></i>
                        <h4>Launch Stage</h4>
                        <p>Finally, the moment <em>you</em> have been waiting for, it is time for your website to reach the masses. Once a website goes live, it is out there for the world to see. This is when customers will start to see <em>your</em> efforts, and <em>you</em> will see your business start to thrive.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Content Body -->
    
	<?php include($root . '/public_html/includes/footer.php'); ?>
	
	<?php include($root . '/public_html/includes/contact_modal.php'); ?>

	<?php include($root . '/public_html/includes/javascript.php'); ?>
	
	<?php include($root . '/public_html/includes/analytics.php'); ?>

</body>

</html>
