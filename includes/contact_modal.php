<!-- Contact Modal -->
    <div id="contactModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
    	<div class="modal-dialog">
        	<div class="modal-content">
        		<div class="modal-header">
            		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            		<h4 class="modal-title">Let's Hear It!</h4>
        		</div>
       			<div class="modal-body hide-on-submit">
       				<form id="contactForm" method="post" action="">
            			<div class="input-group">
            				<input class="form-control input-lg" id="first_name" name="first_name" minlength="2" type="text" required placeholder="First Name">
            				<input class="form-control input-lg" id="last_name" name="last_name" minlength="2" type="text" required placeholder="Last Name">
            				<input class="form-control input-lg" id="email" name="email" type="email" required placeholder="Email">
            				<input class="form-control input-lg" id="phone" name="phone" type="text" required placeholder="Phone Number">
            				<textarea class="form-control input-lg styled-textarea" id="goal" name="goal" type="text" required placeholder="What's your goal?"></textarea>
            				<a id="submitButton" class="btn-custom-form btn btn-default btn-lg btn-custom-form" type="submit">Submit</a>
            			</div>
          			</form>
        		</div><!-- End of Modal body -->
        		<div class="modal-body show-on-submit">
        			<div class="thankyou">
        				<i class="popover-icon hoverable fa fa-envelope fa-2x" data-trigger="hover" data-placement="bottom" data-content="Please allow up to 48 hours for a reply."></i>
						<h1>We'll be in touch.</h1>
					</div>
        		</div><!-- End of Modal body -->
        		<div class="modal-body show-on-error">
        			<div class="error">
        				<h1>
        					<i class="popover-icon hoverable fa fa-ban fa-2x" data-trigger="hover" data-placement="top" data-content="Silly goose!"></i>
						</h1>
					</div>
        		</div><!-- End of Modal body -->
        	</div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
    </div><!-- End of Modal -->
<!-- /Contact Modal -->

