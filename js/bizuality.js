/************ Menu Collapse ************/
$("#menu-close").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
});
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
});

/************ Smooth Scrolling ************/
$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});
/************ Contact Modal ************/
$('#contactModal').modal('hide') // Hides the modal until called.

/************ Spin on Hover ************/
$(".hoverable").mouseover(function(){
    $(this).addClass('fa-spin'); // Spins icons on hover.
});
$(".hoverable").mouseout(function(){
	$(this).removeClass('fa-spin'); // Stops icons on mouse out.
});

/************ Dropdown on Hover ************/
$(".hover-dropdown-menu").mouseover(function(){
	$(this).addClass('dropdown-toggle');}); // Hover over links for dropdown menu to appear.

/************ Popover Description on Hover ************/
$(function(){
	$(".popover-icon").popover(); // Shows text on hover.
}); // 

/************ Spin on Scroll ************/
$(document).ready(function() {
    $(window).scroll(function() {
      $(".spin-on-scroll").addClass('fa-spin'); // Spins icons when scrolling on page.
    });
});

$(window).scroll(function() { // Stops spinning when scrolling stops.
    clearTimeout($.data(this, 'scrollTimer'));
    $.data(this, 'scrollTimer', setTimeout(function() {
        $(".spin-on-scroll").removeClass('fa-spin');
        console.log("Haven't scrolled in 250ms!");
    }, 250));
});

/************ Contact Modal Submission ************/
$(document).ready(function(){
	$("#submitButton").click(function(){
		// Check valid class from the live form validation 
		if($('#first_name').hasClass('valid') && $('#last_name').hasClass('valid') && $('#email').hasClass('valid') && $('#phone').hasClass('valid') && $('#goal').hasClass('valid')) {
			// If so start with the form submission
			var first_name = $('#first_name').val();
			var last_name = $('#last_name').val();
			var email = $('#email').val();
			var phone = $('#phone').val();
			var company = $('#company').val();
			var website = $('#website').val();
			var goal = $('#goal').val();
			var formData = "first_name="+first_name+"&last_name="+last_name+"&email="+email+"&phone="+phone+"&company="+company+"&website="+website+"&goal="+goal;
        	$.ajax({ // Start the PHP submission
        		url : "/resources/helpers/contact_form.php",
        		type: "POST",
        		data : formData,
        		success: function(data, textStatus, jqXHR) {	//data - response from server
        			$('.show-on-submit').slideDown("slow");
            		$('.hide-on-submit').slideUp("slow");
            		$('.show-on-error').slideUp("fast"); // Hide error message quickly.
        		}
    		});
    	}
    	else {
    		// Show error message
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
	$('#company').on('input', function(){
		var input = $(this).val();
		if(input.length > 0){
			$(this).removeClass("invalid").addClass("valid");
		}
    	else {
    		$(this).removeClass("valid").addClass("invalid");
    	}
  	});
  	$('#website').on('input', function(){
		var input = $(this).val();
		if(input.length > 0){
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

/************ Page Animation *************/
$(document).ready(function(){
	$('.slide-down-onload').slideDown(2250);
});
$(document).ready(function(){
	$('.slide-up-onload').slideUp(1250);
});
$(document).ready(function(){
	$('.ribbon').animate({width: "70%"}, 1000);
});
$('.hoverable-color').mouseover(function(){
	$(this).addClass('color-on-hover');
});
$('.hoverable-color').mouseout(function(){
	$(this).removeClass('color-on-hover');
});
$('.hoverable-color-fixed').mouseover(function(){
	$(this).addClass('color-on-hover');
});
$(".hoverable-color-fixed").mouseout(function(){
	$(this).removeClass('color-on-hover');
});
$('.text').hide().removeClass('text').addClass('text-js');

$('.thumb').hover(function(){
    $(this).find('.text-js').fadeToggle();
});
$(document).ready(function(){
  $('.vert-text-footer').animate({'margin-bottom': "15px"}, 1250);
});
       $(document).ready(function(){
           $('li img').on('click',function(){
                var src = $(this).attr('src');
                var img = '<img src="' + src + '" class="img-responsive"/>';
                $('#myModal').modal();
                $('#myModal').on('shown.bs.modal', function(){
                    $('#myModal .modal-body').html(img);
                });
                $('#myModal').on('hidden.bs.modal', function(){
                    $('#myModal .modal-body').html('');
                });
           });  
        })

/************ Search Bar ************/
$('#searchButton').click(function(){
	var query = "http://www.google.com/search?q=";
	query += $('#query').val();
	query = query.replace(" ", "+");
	window.open(query, "_blank");
});

/************ Search Bar ************/
$('.load-warning').click(function() {
	$('.load-warning-msg').slideDown('slow');
});

/************ URL Params ************/
$(document).ready(function(){
	var $_GET = {};

	document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
    	function decode(s) {
        	return decodeURIComponent(s.split("+").join(" "));
    	}

    	$_GET[decode(arguments[1])] = decode(arguments[2]);
	});

	if($_GET['msg'] == 'error') {
		if($_GET['value'] == 1) {
			$('.error-msg').append('<p>Your username or password is incorrect. Please try again.</p>');
		}
		if($_GET['value'] == 2) {
			$('.error-msg').append('<p>You are not logged in.</p>');
		}
		if($_GET['value'] == 3) {
			$('.error-msg').append('<p>Your old password is incorrect. Please try again.</p>');
		}
		if($_GET['value'] == 4) {
			$('.error-msg').append('<p>Your new password cannot be confirmed, please try again.</p>');
		}
		if($_GET['value'] == 5) {
			$('.error-msg').append('<p>Your new password cannot be changed.</p>');
		}
		if($_GET['value'] == 6) {
			$('.error-msg').append('<p>Your question was not submitted. Please try again.</p>');
		}
		if($_GET['value'] == 7) {
			$('.error-msg').append('<p>You are not an analytics subscriber. If you would like to become one, <a href="/pages/accounts/faq.php#question">let us know</a>.</p>');
		}
		if($_GET['value'] == 8) {
			$('.error-msg').append('<p>Your new email cannot be confirmed, please try again.</p>');
		}
		if($_GET['value'] == 9) {
			$('.error-msg').append('<p>Your old email is incorrect. Please try again.</p>');
		}
		if($_GET['value'] == 10) {
			$('.error-msg').append('<p>You are not logged in with Facebook. Please login below.</p>');
		}
		if($_GET['value'] == 11) {
			$('.error-msg').append('<p>You have not told us the name of your Facebook Page. Tell us about it in the <a href="/pages/accounts/faq.php#question">"help" form.</p>');
		}
		$('.show-on-error-banner').slideDown('slow');
	}
	if($_GET['msg'] == 'success') {
		if($_GET['value'] == 1) {
			$('.notification-msg').append('<p>You are now signed out.</p>');
		}
		if($_GET['value'] == 2) {
			$('.notification-msg').append('<p>Your password has been changed.</p>');
		}
		if($_GET['value'] == 3) {
			$('.notification-msg').append('<p>Your question has been sent, we will be in touch soon.</p>');
		}
		if($_GET['value'] == 4) {
			$('.notification-msg').append('<p>Your email has been updated.');
		}
		$('.show-on-notification-banner').slideDown('slow');
	}	
});



