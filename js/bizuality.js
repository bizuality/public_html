/************ Contact Modal ************/
$('#contactModal').modal('hide')
    

/************ Spin on Hover ************/
$(".hoverable").mouseover(function(){
    $(this).addClass('fa-spin');
});
	
$(".hoverable").mouseout(function(){
	$(this).removeClass('fa-spin');
});

/************ Dropdown on Hover ************/
$(".hover-dropdown-menu").mouseover(function(){
	$(this).addClass('dropdown-toggle');});

/************ Popover Description on Hover ************/
$(function(){$(".popover-icon").popover();});

$(document).ready(function() {
    $(window).scroll(function() {
      $(".spin-on-scroll").addClass('fa-spin');
    });
});

$(window).scroll(function() {
    clearTimeout($.data(this, 'scrollTimer'));
    $.data(this, 'scrollTimer', setTimeout(function() {
        $(".spin-on-scroll").removeClass('fa-spin');
        console.log("Haven't scrolled in 250ms!");
    }, 250));
});

/************ Contact Modal Submission ************/
$(document).ready(function(){
	$("#submitButton").click(function(){
		if($('#first_name').hasClass('valid') && $('#last_name').hasClass('valid') && $('#email').hasClass('valid') && $('#phone').hasClass('valid') && $('#goal').hasClass('valid')){
			var first_name=$('#first_name').val();
			var last_name=$('#last_name').val();
			var email=$('#email').val();
			var phone=$('#phone').val();
			var goal=$('#goal').val();
			var formData = "first_name="+first_name+"&last_name="+last_name+"&email="+email+"&phone="+phone+"&goal="+goal;
        	$.ajax({
        		url : "php/send_contact_form.php",
        		type: "POST",
        		data : formData,
        		success: function(data, textStatus, jqXHR) {	//data - response from server
        			$('.show-on-submit').slideDown("slow");
            		$('.hide-on-submit').slideUp("slow");
            		$('.show-on-error').slideUp("fast");
        		}
    		});
    	}
    	else {
    		$('.show-on-error').slideDown("slow");
    	}
	});
});

/************ Live Form Validation ************/
$(document).ready(function(){
	$('#first_name').on('input', function(){
		var input = $(this).val();
		if(input.length > 0){
			$(this).removeClass("invalid").addClass("valid");
		}
    	else {
    		$(this).removeClass("valid").addClass("invalid");
    	}
  	});
  	$('#last_name').on('input', function(){
    	var input = $(this).val();
    	if(input.length > 0){
    		$(this).removeClass("invalid").addClass("valid");
    	}
    	else {
    		$(this).removeClass("valid").addClass("invalid");
    	}
  	});
	$('#email').on('input', function() {
    	var input = $(this).val();
    	var regex = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    	var is_email = regex.test(input);
    	if(is_email){
    		$(this).removeClass("invalid").addClass("valid");
    	}
    	else{
    		$(this).removeClass("valid").addClass("invalid");
    	}
	});
	$('#phone').on('input', function() {
		var input = $(this).val();
		var regex = new RegExp(/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/);
		var is_phone = regex.test(input);
		if(is_phone) {
			$(this).removeClass("invalid").addClass("valid");
		}
		else {
			$(this).removeClass("valid").addClass("invalid");
		}
	});
	$('#goal').on('input', function(){
		var input = $(this).val();
		if(input.length > 0){
			$(this).removeClass("invalid").addClass("valid");
		}
    	else {
    		$(this).removeClass("valid").addClass("invalid");
    	}
  	});
});

/************ Carousel ************/
$(document).ready(function(){
	$('.carousel').carousel({interval: 500});
});
