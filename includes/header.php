<?php 
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

include($root . '/public_html/variables/variables.php');

?>

<!-- Bootstrap core CSS -->
<link href="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/css/bootstrap.min.css" rel="stylesheet">

<!-- Add custom CSS here -->
<link href="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/css/bizuality.css" rel="stylesheet">

</head>
<body>

<!--Navigation Bar-->
    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/index.php">
                    <img class="img-responsive center-block" src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/img/bizuality_logo_aqua_small.png">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/index.php">About</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Services</a>
                        <ul class="dropdown-menu">
                        	<li><a href="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/pages/services/websitedesign.php">Website Design</a></li>
                        	<li><a href="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/pages/services/mobileweboptimization.php">Mobile Web Optimization</a></li>
                        	<li><a href="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/pages/services/socialmediamarketing.php">Social Media Creation and Marketing</a></li>
                        	<li><a href="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/pages/services/seo.php">Search Engine Optimization</a></li>
                        </ul>	
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Portfolio</a>
                        <ul class="dropdown-menu">
                        	<li><a href="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/pages/portfolio/websites.php">Websites</a></li>
                        </ul>	
                    </li>
                    <li class="page-scroll">
                        <a href="" data-toggle="modal" data-target="#contactModal"">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<!--/Navigation Bar-->