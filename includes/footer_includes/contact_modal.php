<!-- Contact Modal -->
    <div id="contactModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
    	<div class="modal-dialog">
        	<div class="modal-content">
        		<div class="modal-header">
            		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            		<h2 class="modal-title text-center">Let's Hear It!</h2>
        		</div>
        		<!-- Modal Body-->
       			<div class="modal-body hide-on-submit text-center">
       				<form id="contactForm" method="post" action="">
            			<div class="input-group text-center">
            				<input class="form-control input-lg" id="first_name" name="first_name" minlength="2" type="text" required placeholder="First Name">
            				<input class="form-control input-lg" id="last_name" name="last_name" minlength="2" type="text" required placeholder="Last Name">
            				<input class="form-control input-lg" id="email" name="email" type="email" required placeholder="Email">
            				<input class="form-control input-lg" id="company" name="company" type="text" placeholder="Company Name (Optional)">
            				<input class="form-control input-lg" id="website" name="website" type="text" placeholder="Company Website (Optional)">
            				<input class="form-control input-lg" id="phone" name="phone" type="text" required placeholder="Phone Number">
            				<textarea class="form-control input-lg styled-textarea" id="goal" name="goal" type="text" required placeholder="Tell us more."></textarea>
            				<a id="submitButton" class="btn-custom-form btn btn-lg" type="submit">Submit</a>
            			</div>
          			</form>
          			<small>By submitting this contact form, you are agreeing to our <a href="/pages/privacy_policy.php">privacy policy</a>.</small>
        		</div>
        		<!-- End of Modal body -->
        		
        		<!-- Success Message -->
        		<div class="modal-body show-on-submit">
        			<div class="thankyou">
        				<i class="popover-icon hoverable fa fa-envelope fa-2x" data-trigger="hover" data-placement="bottom" data-content="Please allow up to 48 hours for a reply."></i>
						<h1>We'll be in touch.</h1>
					</div>
        		</div>
        		<!-- End of Success Message -->
        		
        		<!-- Error Message -->
        		<div class="modal-body show-on-error">
        			<div class="error">
        				<h1>
        					<i class="popover-icon hoverable fa fa-ban fa-2x" data-trigger="hover" data-placement="top" data-content="Silly goose!"></i>
						</h1>
					</div>
        		</div>
        		<!-- End of Error Message -->
        		
        	</div><!-- End of Modal content -->
        </div><!-- End of Modal dialog -->
    </div><!-- End of Modal -->
<!-- /Contact Modal -->