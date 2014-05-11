<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); ?>
<?php include($root . '/variables/mobileweboptimization_variables.php'); ?>
<?php include($root . '/includes/header.php'); ?>
    
    <!-- Content Body -->
    <div id="website_design" class="main-content-alternate">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center slide-down-onload">
                	<hr />
                    <h2>Mobile Web Optimization</h2>
                    <hr />
                </div>
            </div>
            <div class="row">
            	<div class="col-md-6 col-sm-6 text-center">
            		<div class="thumb">
            			<div class="text">
            				<p><?php echo $variables['col_01_caption'] ?></p>
            			</div>
                    		<img class="img-responsive spin-on-scroll" src="<?php echo $variables['col_01_img'] ?>" alt="">
                	</div>
                </div>
                <div class="col-md-6 col-sm-6 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa <?php echo $variables['col_02_icon'] ?>"></i>
                        <h4><?php echo $variables['col_02_title'] ?></h4>
                        <p><?php echo $variables['col_02_text'] ?></p>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
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
                <div class="col-md-3 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa <?php echo $variables['col_05_icon'] ?>"></i>
                        <h4><?php echo $variables['col_05_title'] ?></h4>
                        <p><?php echo $variables['col_05_text'] ?></p>
                    </div>
                </div>
                <div class="col-md-3 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa <?php echo $variables['col_06_icon'] ?>"></i>
                        <h4><?php echo $variables['col_06_title'] ?></h4>
                        <p><?php echo $variables['col_06_text'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Content Body -->
    
<?php include($root . '/includes/footer.php'); ?>