<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); ?>
<?php include($root . '/public_html/variables/about_variables.php'); ?>
<?php include($root . '/public_html/includes/header.php'); ?>
    
    <!-- Content Body -->
    <div id="website_design" class="main-content-alternate">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center slide-down-onload">
                	<hr />
                    <h2>About</h2>
                    <img class="img-responsive center-block" src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/img/bizuality_logo_small.png">
                    <hr />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa fa-bullhorn"></i>
                        <h4>Mission</h4>
                        <p>Our mission is to provide mobile first websites to small businesses who do not already have a mobile implementation of their website. We also strive to provide our clients with outstanding user interfaces, exceptional social media marketing, and consistent search engine optimization results.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa fa-comment"></i>
                        <h4>About Us</h4>
                        <p>bizuality is a small startup that focuses on mobile web development. Founders Cary and Trevor share a mutual intrest in the betterment of technology through design and software.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa fa-map-marker"></i>
                        <h4>Location</h4>
                        <p>Based out of North Augusta, SC and Columbia, SC, bizuality focuses mainly on the local markets. Our goal is to help local businesses move to the mobile world by way of mobile we development. If you would like to schedule a meeting, please <a href="" data-toggle="modal" data-target="#contactModal">contact us</a>.</p>
                    </div>
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            		<div id="map_canvas">
            		</div>
            	</div>
            </div>
        </div>
    </div>
    <!-- /Content Body -->
    
    
    
<?php include($root . '/public_html/includes/footer.php'); ?>
<?php include($root . '/public_html/includes/map_javascript.php'); ?>
