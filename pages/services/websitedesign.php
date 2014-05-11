<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); ?>
<?php include($root . '/variables/websitedesign_variables.php'); ?>
<?php include($root . '/includes/header.php'); ?>
	
<!-- Services -->
    <div id="website_design" class="main-content-alternate">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center slide-down-onload">
                	<hr />
                    <h2>Website Design</h2>
                    <hr />
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa <?php echo $variables['col_01_icon'] ?>"></i>
                        <h4><?php echo $variables['col_01_title'] ?></h4>
                        <p><?php echo $variables['col_01_text'] ?></p>
                    </div>
                </div>
                <div class="col-md-3 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa <?php echo $variables['col_02_icon'] ?>"></i>
                        <h4><?php echo $variables['col_02_title'] ?></h4>
                        <p><?php echo $variables['col_02_text'] ?></p>
                    </div>
                </div>
                <div class="col-md-3 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa <?php echo $variables['col_03_icon'] ?>"></i>
                        <h4><?php echo $variables['col_03_title'] ?></h4>
                        <p><?php echo $variables['col_03_text'] ?></p>
                    </div>
                </div>
                <div class="col-md-3 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa <?php echo $variables['col_04_icon'] ?>"></i>
                        <h4><?php echo $variables['col_04_title'] ?></h4>
                        <p><?php echo $variables['col_04_text'] ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa <?php echo $variables['col_05_icon'] ?>"></i>
                        <h4><?php echo $variables['col_05_title'] ?></h4>
                        <p><?php echo $variables['col_05_text'] ?></p>
                    </div>
                </div>
                <div class="col-md-4 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa <?php echo $variables['col_06_icon'] ?>"></i>
                        <h4><?php echo $variables['col_06_title'] ?></h4>
                        <p><?php echo $variables['col_06_text'] ?></p>
                    </div>
                </div>
                <div class="col-md-4 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa <?php echo $variables['col_07_icon'] ?>"></i>
                        <h4><?php echo $variables['col_07_title'] ?></h4>
                        <p><?php echo $variables['col_07_text'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Services -->
    
<?php include($root . '/includes/footer.php'); ?>