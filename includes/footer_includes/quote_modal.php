<script type="text/javascript">
	function updatePrice(newValue) {
		var price = 500;
		var contentValue = document.getElementById('content').value;
		var picturesValue = document.getElementById('pictures').value;
		var videosValue = document.getElementById('videos').value;
		var membersValue = document.getElementById('members').value;
		var formsValue = document.getElementById('forms').value;
		var animationValue = document.getElementById('animation').value;
		
		price += (contentValue * 250);
		price += (picturesValue * 35);
		price += (videosValue * 35);
		price += (membersValue * 175);
		price += (formsValue * 75);
		price += (animationValue * 100);
		
		
		document.getElementById('price').innerHTML='<i class="fa fa-dollar"></i> ' + price;
			
	}
</script>
<!-- Quote Modal -->
    <div id="quoteModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel" aria-hidden="true">
    	<div class="modal-dialog">
        	<div class="modal-content">
        		<div class="modal-header">
            		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            		<span class="modal-title text-center">
            			<h2>Get A Quote</h2>
            			<h4>Adjust the sliders based on your needs.</h4>
            			<p>A hosting fee of $200 is charged once a year, and an initial design fee of $300 dollars is charged at startup.</p>
            		</span>
        		</div>
        		<!-- Modal Body-->
       			<div class="modal-body alternate-background">
       				<form id="quoteForm" class="text-center" method="post" action="">
            			<div class="input-group center-block text-center">
            				<div class="row">
            					<div class="col-sm-6 col-xs-12">
            						<p>Content:</p>
            						<small>We offer a default of 5 pages. Consider each notch to be about 5 pages.</small>
            						<input class="form-control input-lg slider" id="content" name="content" type="range" onchange="updatePrice()" value="0" min="0" max="5">
            						<p>Pictures:</p>
            						<small>Consider each notch to increase pictures per page by 2.</small>
            						<input class="form-control input-lg slider" id="pictures" name="pictures" type="range" onchange="updatePrice()" value="0" min="0" max="5">
            						<p>Videos:</p>
            						<small>Consider each notch to increase videos per page by 1.</small>
            						<input class="form-control input-lg slider" id="videos" name="videos" type="range" onchange="updatePrice()" value="0" min="0" max="5">
            					</div>
            					<div class="col-sm-6 col-xs-12">
            						<p>Member Areas:</p>
            						<small>Our default offer does not include member's areas. Adjust the sliders based on the percentage of your site you would like tucked behind a username and password.</small>
            						<input class="form-control input-lg slider" id="members" name="members" type="range" onchange="updatePrice()" value="0" min="0" max="5">
            						<p>Forms:</p>
            						<small>Base price includes 1 contact form. Increases here would include calendars and help forms.</small>
            						<input class="form-control input-lg slider" id="forms" name="forms" type="range" onchange="updatePrice()" value="0" min="0" max="5">
            						<p>Animation:</p>
            						<small>By default we offer simple animations such as fades and slides.</small>
            						<input class="form-control input-lg slider" id="animation" name="animation" type="range" onchange="updatePrice()" value="0" min="0" max="5">
            					</div>
            				</div>
            			</div>
            			<span class="modal-title">
            				<h2 id="price" class="text-center"><i class="fa fa-dollar"></i> 500</h2>
            			</span>
            			<span>
            				<p class="text-center">If you would like something more, <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#contactModal">tell us about it</a> and we will work up a quote!</p>
            			</span>
          			</form>
        		</div>
        		<!-- End of Modal body -->
        	</div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
    </div><!-- End of Modal -->
<!-- /Quote Modal -->
