<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); ?>
<?php include($root . '/variables/about_variables.php'); ?>
<?php include($root . '/includes/header.php'); ?>
    
    <!-- Content Body -->
    <div id="about" class="main-content-alternate">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center slide-down-onload">
                	<hr class="thick"/>
                    <h2>About</h2>
                    <img class="img-responsive center-block" src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/img/bizuality_logo_small.png">
                    <hr class="thick"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa <?php echo $variables['col_01_icon'] ?>"></i>
                        <h4><?php echo $variables['col_01_title'] ?></h4>
                        <hr class="short"/>
                        <p><?php echo $variables['col_01_text'] ?></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa <?php echo $variables['col_02_icon'] ?>"></i>
                        <h4><?php echo $variables['col_02_title'] ?></h4>
                        <hr class="short"/>
						<p><?php echo $variables['col_02_text'] ?></p>
					</div>
                </div>
                <div class="col-md-4 col-sm-12 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa <?php echo $variables['col_03_icon'] ?>"></i>
                        <h4><?php echo $variables['col_03_title'] ?></h4>
                        <hr class="short"/>
                        <p><?php echo $variables['col_03_text'] ?></p>
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
    
    <!-- Google Map JS-->
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <!-- /Google Map JS -->
    
    
    
<?php include($root . '/includes/footer.php'); ?>
<?php include($root . '/includes/map_javascript.php'); ?>
