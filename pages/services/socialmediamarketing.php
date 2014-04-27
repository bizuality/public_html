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
        	<hr />
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Crowder Stewart LLP</h2>
                    <p class="lead">Crowder Stewart LLP is a law firm based in Augusta, GA. Their website was built with a professional style, featuring a large slider on the home page. The box style you see can help separate the content for a cleaner, and more sleek look. Be sure to check out their contact page, as it features an interactive map, a necessity for any small business. Check out their website <a target="_blank" href="http://www.crowderstewart.com">here</a>.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <br />
                    <img class="img-responsive" src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/img/mobile_desktop_pie_chart.png" alt="">
                </div>
            </div>
            <hr />
        	<div class="row">
        		<div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <br />
                    <img class="img-responsive" src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/img/phones.png" alt="">
                </div>
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Trevor Hutto</h2>
                    <p class="lead">One of the founders of bizualITy and a student at South Carolina, Trevor's personal website is a one page scroller. His page features large background images, and a sliding layout. The buttons are accented with garnet to show his school spirt, and contacting him is a breeze. Take a <a href="http://www.cse.sc.edu/~huttotw" target="_blank"> look</a>.</p>
                </div>

            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /Call to Action -->
    
	<?php include($root . '/public_html/includes/footer.php'); ?>
	
	<?php include($root . '/public_html/includes/contact_modal.php'); ?>

	<?php include($root . '/public_html/includes/javascript.php'); ?>
	
	<?php include($root . '/public_html/includes/analytics.php'); ?>

</body>

</html>
