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
