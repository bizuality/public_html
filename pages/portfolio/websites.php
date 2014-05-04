<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); ?>
<?php include($root . '/public_html/variables/websites_variables.php'); ?>
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
                    			<h3><?php echo $variables['col_01_caption_title'] ?></h3>
                    			<hr />
                    			<p><?php echo $variables['col_01_caption_text'] ?></p>.
                    		</div>
                        	<a href="<?php echo $variables['col_01_img_link'] ?>" target="_blank">
                            	<img class="img-portfolio img-responsive" src="<?php echo $variables['col_01_img'] ?>">
                        	</a>
                        </div>
                        <h4><?php echo $variables['col_01_title'] ?></h4>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="portfolio-item">
                    	<div class="thumb">
                    		<div class="text">
                    			<h3><?php echo $variables['col_02_caption_title'] ?></h3>
                    			<hr />
                    			<p><?php echo $variables['col_02_caption_text'] ?></p>.
                    		</div>
                        	<a href="<?php echo $variables['col_02_img_link'] ?>" target="_blank">
                            	<img class="img-portfolio img-responsive" src="<?php echo $variables['col_02_img'] ?>">
                        	</a>
                        </div>
                        <h4><?php echo $variables['col_02_title'] ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Portfolio -->
    
<?php include($root . '/public_html/includes/footer.php'); ?>
