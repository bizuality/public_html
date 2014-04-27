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
                    <h2>Search Engine Optimization</h2>
                    <hr />
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-6 col-md-6 col-sm-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
            		<div class="input-group">
            			<input id="query" class="form-control input-lg input-border text-color" type="text" placeholder="Go ahead, Google yourself.">
            			<span class="input-group-btn"><button id="searchButton" class="btn btn-lg btn-primary">Search</button></span>
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
