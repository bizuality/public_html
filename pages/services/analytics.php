<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); ?>
<?php include($root . '/variables/analytics_variables.php'); ?>
<?php include($root . '/includes/header.php'); ?>

    <!-- Content Body -->
    <div id="analytics" class="main-content-alternate">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center slide-down-onload">
                	<hr class="thick"/>
                    <h2>Analytics</h2>
                    <hr class="thick"/>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa <?php echo $variables['col_01_icon'] ?>"></i>
                        <h4><?php echo $variables['col_01_title'] ?></h4>
                        <hr class="short"/>
                        <p><?php echo $variables['col_01_text'] ?></p>
                    </div>
                </div>
                <div class="col-sm-6 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa <?php echo $variables['col_02_icon'] ?>"></i>
                        <h4><?php echo $variables['col_02_title'] ?></h4>
                        <hr class="short"/>
                        <p><?php echo $variables['col_02_text'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="callout">
            <div class="col-xs-12 text-center">
           	 	<h2><i class="fa fa-tasks fa-2x"></i></h2>
            	<h2><?php echo $variables['callout_title']; ?></h2>
            </div>
            <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
            	<p><?php echo $variables['callout_text']; ?></p>
            </div>
            <div class="row">
            	<ul class="thumbnails">
            		<li><img class="col-sm-3 col-xs-6 img-circle" src="<?php echo $variables['callout_img_01']; ?>"></li>
            		<li><img class="col-sm-3 col-xs-6 img-circle" src="<?php echo $variables['callout_img_02']; ?>"></li>
            		<li><img class="col-sm-3 col-xs-6 img-circle" src="<?php echo $variables['callout_img_03']; ?>"></li>
            		<li><img class="col-sm-3 col-xs-6 img-circle" src="<?php echo $variables['callout_img_04']; ?>"></li>
            	</ul>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa <?php echo $variables['col_03_icon'] ?>"></i>
                        <h4><?php echo $variables['col_03_title'] ?></h4>
                        <hr class="short"/>
                        <p><?php echo $variables['col_03_text'] ?></p>
                    </div>
                </div>
                <div class="col-sm-6 text-center hoverable-color">
                    <div class="service-item">
                        <i class="service-icon hoverable fa <?php echo $variables['col_04_icon'] ?>"></i>
                        <h4><?php echo $variables['col_04_title'] ?></h4>
                        <hr class="short"/>
                        <p><?php echo $variables['col_04_text'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Content Body -->
    
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">         
          <div class="modal-body">                
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
<?php include($root . '/includes/footer.php'); ?>
