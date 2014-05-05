<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); 

require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .  '/public_html/db/load.php');

$table_name = 'user_logins';
$b->checkLogin($table_name);

?>

<!DOCTYPE html>
<html lang="en">

<head profile="http://www.bizuality.com">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Logged In</title>
    
	<link rel="icon" type="image/ico" href="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/img/bizuality_favicon.ico"/>

	<!-- Bootstrap core CSS -->
	<link href="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/css/bootstrap.min.css" rel="stylesheet">

	<!-- Add custom CSS here -->
	<link href="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/css/bizuality.css" rel="stylesheet">
</head>
<body>

<!-- Content Body -->
    <div id="website_design" class="main-content-alternate">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center slide-down-onload">
                	<hr />
                	<img class="img-responsive center-block" src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/img/bizuality_logo_small.png">
                    <h2>User's Hub</h2>
                    <hr />
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color service-item">
            		<h1>
            			<i class="popover-icon fa fa-sign-in fa-4x"></i>
					</h1>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color">
            		<h1>
            			<i class="popover-icon fa fa-gear fa-4x"></i>
					</h1>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color">
            		<h1>
            			<i class="popover-icon fa fa-bar-chart-o fa-4x"></i>
					</h1>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color">
            		<h1>
            			<i class="popover-icon fa fa-question fa-4x"></i>
					</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /Content Body -->

<?php include($root . '/public_html/includes/footer.php'); ?>