<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); ?>
<?php include($root . '/variables/socialmediamarketing_variables.php'); ?>
<?php include($root . '/includes/header.php'); ?>
    
    <!-- Content Body -->
    <div id="website_design" class="main-content-alternate">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center slide-down-onload">
                	<hr class="thick"/>
                    <h2>Social Media Creation and Marketing</h2>
                    <hr class="thick"/>
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color">
            		<h1>
            			<i class="popover-icon fa <?php echo $variables['col_01_icon'] ?> fa-4x"></i>
					</h1>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color">
            		<h1>
            			<i class="popover-icon fa <?php echo $variables['col_02_icon'] ?> fa-4x"></i>
					</h1>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color">
            		<h1>
            			<i class="popover-icon fa <?php echo $variables['col_03_icon'] ?> fa-4x"></i>
					</h1>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color">
            		<h1>
            			<i class="popover-icon fa <?php echo $variables['col_04_icon'] ?> fa-4x"></i>
					</h1>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-md-3 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa <?php echo $variables['col_05_icon'] ?>"></i>
                        <h4><?php echo $variables['col_05_title'] ?></h4>
                        <hr class="short"/>
                        <p><?php echo $variables['col_05_text'] ?></p>
                    </div>
                </div>
                <div class="col-md-3 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa <?php echo $variables['col_06_icon'] ?>"></i>
                        <h4><?php echo $variables['col_06_title'] ?></h4>
                        <hr class="short"/>
                        <p><?php echo $variables['col_06_text'] ?></p>
                    </div>
                </div>
                <div class="col-md-3 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa <?php echo $variables['col_07_icon'] ?>"></i>
                        <h4><?php echo $variables['col_07_title'] ?></h4>
                        <hr class="short"/>
                        <p><?php echo $variables['col_07_text'] ?></p>
                    </div>
                </div>
                <div class="col-md-3 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa <?php echo $variables['col_08_icon'] ?>"></i>
                        <h4><?php echo $variables['col_08_title'] ?></h4>
                        <hr class="short"/>
                        <p><?php echo $variables['col_08_text'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Content Body -->
    
<?php include($root . '/includes/footer.php'); ?>
