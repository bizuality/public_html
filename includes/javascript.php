 <!-- JavaScript -->
    <script src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/js/jquery-1.10.2.js"></script>
    <script src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/js/bootstrap.js"></script>
    <script src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/js/bootstrap-hover-dropdown.js"</script>
    <script src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/js/bootstrap-popover.js"</script>
    <script src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/js/bizuality.js"</script>
    
    <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
    <script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
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
    </script>
<!-- /JavaScript -->