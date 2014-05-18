<script type="text/javascript">
	function updatePrice(id, currentValue) {
		if(id == 'content'){
			alert("Here");
		}
		if(id == 'currentPicture'){
			document.getElementById('currentPicture').innerHTML=newValue;
		}
		if(id == 'currentVideo'){
			document.getElementById('currentVideo').innerHTML=newValue;
		}
		if(id == 'currentMember'){
			document.getElementById('currentMember').innerHTML=newValue;
		}
		if(id == 'currentForm'){
			document.getElementById('currentForm').innerHTML=newValue;
		}
		if(id == 'currentAnimation'){
			document.getElementById('currentAnimation').innerHTML=newValue;
		}
			
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
            			<p>Adjust the sliders based on your needs.</p>
            			<small>A hosting fee of $200 is charged once a year, and an initial design fee of $300 dollars is charged at startup.</small>
            		</span>
        		</div>
        		<!-- Modal Body-->
       			<div class="modal-body alternate-background">
       				<form id="contactForm" class="text-center" method="post" action="">
            			<div class="input-group center-block text-center">
            				<div class="col-sm-6 col-xs-12">
            					<p>Content:</p>
            					<input class="form-control input-lg" id="content" name="content" type="range" onchange="updatePrice(this.id, this.value)" value="0" min="0" max="5">
            					<p>Pictures:</p>
            					<input class="form-control input-lg" id="pictures" name="pictures" type="range" onchange="updatePrice(this.id, this.value)" value="0" min="0" max="5">
            					<p>Videos:</p>
            					<input class="form-control input-lg" id="points" name="points" type="range" onchange="updatePrice(this.id, this.value)" value="0" min="0" max="5">
            				</div>
            				<div class="col-sm-6 col-xs-12">
            					<p>Member Areas:</p>
            					<input class="form-control input-lg" id="points" name="points" type="range" onchange="showValue(this.value, 'currentMember')" value="0" min="0" max="5">
            					<p>Forms:</p>
            					<input class="form-control input-lg" id="points" name="points" type="range" onchange="showValue(this.value, 'currentForm')" value="0" min="0" max="5">
            					<p>Animation:</p>
            					<input class="form-control input-lg" id="points" name="points" type="range" onchange="showValue(this.value, 'currentAnimation')" value="0" min="0" max="5">
            				</div>
            			</div>
            			<span class="modal-title">
            				<h2 class="text-center"><i class="fa fa-dollar"></i> 500</h2>
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
