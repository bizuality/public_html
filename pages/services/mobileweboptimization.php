<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); ?>
<?php include($root . '/variables/mobileweboptimization_variables.php'); ?>
<?php include($root . '/includes/header.php'); ?>
    
    <!-- Content Body -->
    <div id="website_design" class="main-content-alternate">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center slide-down-onload">
                	<hr class="thick"/>
                    <h2>Mobile Web Optimization</h2>
                    <hr class="thick"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 text-center hoverable-color hidden-lg hidden-xl">
                    <div class="service-item">
                        <i class="service-icon hoverable fa <?php echo $variables['col_02_icon'] ?>"></i>
                        <h4><?php echo $variables['col_02_title'] ?></h4>
                        <hr class="short"/>
                        <p><?php echo $variables['col_02_text'] ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 text-center hoverable-color hidden-xs hidden-sm hidden-md">
                    <div class="service-item">
                        <i class="service-icon hoverable fa <?php echo $variables['col_02_icon'] ?>"></i>
                        <h4><?php echo $variables['col_02_title'] ?></h4>
                        <hr class="short"/>
                        <p><?php echo $variables['col_02_text'] ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 text-center hidden-xs hidden-sm hidden-md">
                	<h3>See what we look like on some common devices!</h3>
                	<hr class="short" />
            		<div class="col-sm-6">
            		 	<ul class="thumbnails">
            		 		<li><a class="btn btn-lg btn-custom" onclick="openResponsiveDemo(320, 480)">iPhone 4S</a></li>
            				<li><a class="btn btn-lg btn-custom" onclick="openResponsiveDemo(320, 568)">iPhone 5S</a></li>
            				<li><a class="btn btn-lg btn-custom" onclick="openResponsiveDemo(540, 960)">Galaxy S4</a></li>
            				<li><a class="btn btn-lg btn-custom" onclick="openResponsiveDemo(540, 960)">Galaxy S5</a></li>
            				<li><a class="btn btn-lg btn-custom" onclick="openResponsiveDemo(768, 1024)">iPad Mini</a></li>
            				<li><a class="btn btn-lg btn-custom" onclick="openResponsiveDemo(790, 1024)">iPad Air</a></li>	
            			</ul>
        			</div>
        			<div class="col-sm-6">
            		 	<ul class="thumbnails">
            		 		<li><a class="btn btn-lg btn-custom" onclick="openResponsiveDemo(800, 1280)">Galaxy Note 10.1</a></li>
            		 		<li><a class="btn btn-lg btn-custom" onclick="openResponsiveDemo(688, 384)">Surface RT</a></li>
            				<li><a class="btn btn-lg btn-custom" onclick="openResponsiveDemo(840, 525)">13" Laptop</a></li>
            				<li><a class="btn btn-lg btn-custom" onclick="openResponsiveDemo(960, 600)">15" Laptop</a></li>
            				<li><a class="btn btn-lg btn-custom" onclick="openResponsiveDemo(1600, 900)">17" Laptop</a></li>
            				<li><a class="btn btn-lg btn-custom" onclick="openResponsiveDemo(1920, 1080)">Large Desktop</a></li>
            			</ul>
        			</div>
                </div>
            </div>
            
            <hr class="thick"/>
            <div class="row">
                <div class="col-md-3 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa <?php echo $variables['col_03_icon'] ?>"></i>
                        <h4><?php echo $variables['col_03_title'] ?></h4>
                        <hr class="short"/>
                        <p><?php echo $variables['col_03_text'] ?></p>
                    </div>
                </div>
                <div class="col-md-3 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa <?php echo $variables['col_04_icon'] ?>"></i>
                        <h4><?php echo $variables['col_04_title'] ?></h4>
                        <hr class="short"/>
                        <p><?php echo $variables['col_04_text'] ?></p>
                    </div>
                </div>
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
            </div>
        </div>
    </div>
    <!-- /Content Body -->
    
<?php include($root . '/includes/footer.php'); ?>