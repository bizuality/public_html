<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); ?>
<?php include($root . '/variables/index_variables.php'); ?>
<?php require_once($root . '/includes/header.php'); ?>

<!-- Facebook Button -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=637873329634271&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<!-- /Facebook Button -->

<!-- Twitter Button -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<!--/Twitter Button -->

<!-- LinkedIn Button -->
<script src="//platform.linkedin.com/in.js" type="text/javascript">
  lang: en_US
</script>
<!-- /LinkedIn Button -->

<!-- +1 Button -->
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<!-- /+1 Button -->

<!-- Full Page Image Header Area -->


    <div id="top" class="header">
        <div class="vert-text">
        	<div class="ribbon-menu">
        		<div class="ribbon-menu-content">
        			<div class="row">
        				<p>Be Social</p>
        			</div>
        			<div class="row">
        				<div class="fb-like" data-href="https://www.facebook.com/bizuality" data-width="100" data-layout="box_count" data-action="like" data-show-faces="false" data-share="true"></div>
        			</div>
        			<div class="row">
        				<script type="IN/Share" data-url="http://www.bizuality.com" data-counter="top"></script>
        			</div>
        			<div class="row">
        				<a href="https://twitter.com/bizuality" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @bizuality</a>
        			</div>
        			<div class="row">
        				<div class="g-plusone" data-size="tall" data-annotation="bubble" expandTo="top" data-href="http://www.bizuality.com"></div>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1  col-sm-10 col-sm-offset-1  col-xs-10 col-xs-offset-1 text-center">
        		<img class="img-responsive center-block" src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/img/bizuality_logo.png">
        		<div class="hidden-xs">
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
				</div>
            	<h3><?php echo $variables['tag_line'] ?></h3>
            	<a href="#findOutMore" class="btn btn-default btn-lg"><?php echo $variables['scroll_button_text'] ?></a>
            </div>
        </div>
    </div>
    <!-- /Full Page Image Header Area -->

    <!-- Call to Action -->
    <div id="findOutMore" class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 text-center hoverable-color">
                	<h3><i class="service-icon hoverable fa <?php echo $variables['col_01_icon'] ?> fa-2x"></i></h3>
                    <h3><?php echo $variables['col_01_title'] ?></h3>
                    <hr class="short" />
                    <p><?php echo $variables['col_01_text'] ?></p>
                </div>
                <div class="col-lg-4 col-md-4 text-center hoverable-color">
                    <h3><i class="service-icon hoverable fa <?php echo $variables['col_02_icon'] ?> fa-2x"></i></h3>
                    <h3><?php echo $variables['col_02_title'] ?></h3>
                    <hr class="short" />
                    <p><?php echo $variables['col_02_text'] ?></p>
                </div>
                <div class="col-lg-4 col-md-4 text-center hoverable-color">
                    <h3><i class="service-icon hoverable fa <?php echo $variables['col_03_icon'] ?> fa-2x"></i></h3>
                    <h3><?php echo $variables['col_03_title'] ?></h3>
                    <hr class="short" />
                    <p><?php echo $variables['col_03_text'] ?></p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /Call to Action -->

<?php include($root . '/includes/footer.php'); ?>
