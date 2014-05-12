<?php 
session_start();
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

// Controls the Sign In / Sign Out links
$signin = false;

if(isset($_SESSION['username'])) {
	$signin = true;
	$username = $_SESSION['username'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head profile="http://www.bizuality.com">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $variables['title'] ?></title>
    
	<link rel="icon" type="image/ico" href="/img/bizuality_favicon.ico"/>

	<!-- Bootstrap core CSS -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">

	<!-- Add custom CSS here -->
	<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="/css/bizuality.css" rel="stylesheet">

</head>
<body>

<!--Navigation Bar-->
    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/index.php">
                    <img class="img-responsive center-block" src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/img/bizuality_logo_aqua_small.png">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/pages/about.php">About</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Services</a>
                        <ul class="dropdown-menu">
                        	<li><a href="/pages/services/analytics.php">Analytics</a></li>
                        	<li><a href="/pages/services/mobileweboptimization.php">Mobile Web Optimization</a></li>
                        	<li><a href="/pages/services/seo.php">Search Engine Optimization</a></li>
                        	<li><a href="/pages/services/socialmediamarketing.php">Social Media Creation and Marketing</a></li>
                        	<li><a href="/pages/services/websitedesign.php">Website Design</a></li>
                        	
                        </ul>	
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Portfolio</a>
                        <ul class="dropdown-menu">
                        	<li><a href="/pages/portfolio/websites.php">Websites</a></li>
                        </ul>	
                    </li>
                    <li>
                        <a href="" data-toggle="modal" data-target="#contactModal">Contact Us</a>
                    </li>
                    <?php if(!$signin) { echo '
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Sign In</a>
                        <ul class="dropdown-menu">
							<form action="/resources/helpers/login.php" method="post" accept-charset="UTF-8">
								<div class="input-group custom-form">
  									<input id="username" type="text" name="username" placeholder="Username"/>
  									<input id="password" type="password" name="password" placeholder="Password" />
  									<button id="signInButton" class="btn-custom-form btn btn-lg center-block" type="submit">Sign In</button>
  								</div>
							</form>
                        </ul>	
                    </li>
                    '; }
                    if($signin) { echo '
				    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">' . $username . '</a>
                        <ul class="dropdown-menu">
                        	<li><a href="/pages/accounts/users_page.php">User\'s Hub</a></li>
                        	<li><a href="/pages/accounts/settings.php">Settings</a></li>
							<li><a href="/resources/helpers/logout.php">Sign Out</a></li>
                        </ul>	
                    </li>
                    '; } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<!--/Navigation Bar-->

<!-- Error Message -->
	<div class="show-on-error-banner">
		<div class="error-msg">
		</div>
    </div>
<!-- /Error Message -->

<!-- Notification Message -->
	<div class="show-on-notification-banner">
		<div class="notification-msg">
		</div>
    </div>
<!-- /Error Message -->

<?php session_write_close(); ?>