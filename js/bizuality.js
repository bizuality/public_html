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
        success: function(data, textStatus, jqXHR)
        {
            //data - response from server
            alert(data);
        },

    });
    alert(formData);
	$('.show-on-submit').slideDown("slow");
    $('.hide-on-submit').slideUp("slow");


  });
});

/************ Carousel ************/
$(document).ready(function(){
	$('.carousel').carousel({interval: 500});
});
