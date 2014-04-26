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
    
    <!-- Portfolio -->
    <div id="portfolio" class="main-content-alternate">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center slide-down-onload">
                	<hr />
                    <h2>Our Work</h2>
                    <hr />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-2 text-center">
                    <div class="portfolio-item">
                    	<div class="thumb">
                    		<div class="text">
                    			<h3>Trevor Hutto</h3>
                    			<hr />
                    			<p>Trevor is the co-founder, and developer for <em>bizuality</em>. He designed his school website as a one page scroller. This website features a black and white feel with garnet accent buttons. <a href="http://www.cse.sc.edu/~huttotw">Check it out</a>.
                    		</div>
                        	<a href="http://www.cse.sc.edu/~huttotw" target="_blank">
                            	<img class="img-portfolio img-responsive" src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/img/trevor_website_display.png">
                        	</a>
                        </div>
                        <h4>Trevor Hutto</h4>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="portfolio-item">
                    	<div class="thumb">
                    		<div class="text">
                    			<h3>Crowder Stewart LLP</h3>
                    			<hr />
                    			<p>Crowder Stewart LLP is a law firm based in Augusta, GA. Their website features a homepage carousel, and a box structure for their content. Go have a <a href="http://www.crowderstewart.com">look</a>.
                    		</div>
                        	<a href="http://www.crowderstewart.com" target="_blank">
                            	<img class="img-portfolio img-responsive" src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/img/crowder_stewart_website_display.png">
                        	</a>
                        </div>
                        <h4>Crowder Stewart LLP</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Portfolio -->
    
	<?php include($root . '/public_html/includes/footer.php'); ?>
	
	<?php include($root . '/public_html/includes/contact_modal.php'); ?>

	<?php include($root . '/public_html/includes/javascript.php'); ?>
	
	<?php include($root . '/public_html/includes/analytics.php'); ?>

</body>

</html>
