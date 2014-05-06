<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); ?>
<?php include($root . '/public_html/variables/index_variables.php'); ?>
<?php include($root . '/public_html/includes/header.php'); ?>
    
<!-- Full Page Image Header Area -->
    <div id="top" class="header">
        <div class="vert-text">
        		<img class="img-responsive center-block" src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/img/bizuality_logo.png">
            <h3>
            	<i class="popover-icon hoverable spin-on-scroll fa <?php echo $variables['icon_01'] ?> fa-2x" data-trigger="hover" data-placement="bottom" data-content="<?php echo $variables['icon_01_text'] ?>"></i>
            	<i class="popover-icon hoverable spin-on-scroll fa <?php echo $variables['icon_02'] ?> fa-2x" data-trigger="hover" data-placement="bottom" data-content="<?php echo $variables['icon_02_text'] ?>"></i>
            	<i class="popover-icon hoverable spin-on-scroll fa <?php echo $variables['icon_03'] ?> fa-2x" data-trigger="hover" data-placement="bottom" data-content="<?php echo $variables['icon_03_text'] ?>"></i> 
            	<i class="popover-icon hoverable spin-on-scroll fa <?php echo $variables['icon_04'] ?> fa-2x" data-trigger="hover" data-placement="bottom" data-content="<?php echo $variables['icon_04_text'] ?>"></i>
				<i class="popover-icon hoverable spin-on-scroll fa <?php echo $variables['icon_05'] ?> fa-2x" data-trigger="hover" data-placement="bottom" data-content="<?php echo $variables['icon_05_text'] ?>"></i>
				<i class="popover-icon hoverable spin-on-scroll fa <?php echo $variables['icon_06'] ?> fa-2x" data-trigger="hover" data-placement="bottom" data-content="<?php echo $variables['icon_06_text'] ?>"></i>
				<i class="popover-icon hoverable spin-on-scroll fa <?php echo $variables['icon_07'] ?> fa-2x" data-trigger="hover" data-placement="bottom" data-content="<?php echo $variables['icon_07_text'] ?>"></i>
				<i class="popover-icon hoverable spin-on-scroll fa <?php echo $variables['icon_08'] ?> fa-2x" data-trigger="hover" data-placement="bottom" data-content="<?php echo $variables['icon_08_text'] ?>"></i>
				<i class="popover-icon hoverable spin-on-scroll fa <?php echo $variables['icon_09'] ?> fa-2x" data-trigger="hover" data-placement="bottom" data-content="<?php echo $variables['icon_09_text'] ?>"></i>
			</h3>
            <h3><?php echo $variables['tag_line'] ?></h3>
            <a href="#findOutMore" class="btn btn-default btn-lg"><?php echo $variables['scroll_button_text'] ?></a>

        </div>
    </div>
    <!-- /Full Page Image Header Area -->

    <!-- Call to Action -->
    <div id="findOutMore" class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 text-center hoverable-color">
                    <h3>
                    	<i class="service-icon hoverable fa <?php echo $variables['col_01_icon'] ?> fa-2x"></i>
                    	<br />
                    	<?php echo $variables['col_01_title'] ?>
                    </h3>
                    <p><?php echo $variables['col_01_text'] ?></p>
                </div>
                <div class="col-lg-4 col-md-4 text-center hoverable-color">
                    <h3>
                    	<i class="service-icon hoverable fa <?php echo $variables['col_02_icon'] ?> fa-2x"></i>
                    	<br />
                    	<?php echo $variables['col_02_title'] ?>
                    </h3>
                    <p><?php echo $variables['col_02_text'] ?></p>
                </div>
                <div class="col-lg-4 col-md-4 text-center hoverable-color">
                    <h3>
                    	<i class="service-icon hoverable fa <?php echo $variables['col_03_icon'] ?> fa-2x"></i>
                    	<br />
                    	<?php echo $variables['col_03_title'] ?>
                    </h3>
                    <p><?php echo $variables['col_03_text'] ?></p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /Call to Action -->

<?php include($root . '/public_html/includes/footer.php'); ?>
