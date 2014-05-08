<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]);
include($root . '/public_html/variables/user_analytics_variables.php');
require_once($root . '/public_html/includes/secure_header.php');
	
$sc->set_pid($pid);
$sc->getDailyStats();
$sc->getWeeklyStats();
$sc->getMonthlyStats();
$sc->getYearlyStats();
$sc->getPopularPages(5);

?>

<!-- Content Body -->
    <div id="website_design" class="main-content-alternate">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center slide-down-onload">
                	<hr />
                	<img class="img-responsive center-block" src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/img/bizuality_logo_small.png">
                    <h1>Analytics</h1>
                    <hr />
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color">
            		<i class="service-item hoverable fa fa-eye fa-4x"></i>
            		<h2>Today</h2>
            		<hr />
            		<h4>Page Views</h2>
            		<h2><?php echo $dailyStats['page_views']; ?></h2>
            		<h4>Unique Visits</h4>
            		<h2><?php echo $dailyStats['unique_visits']; ?></h2>
            		<h4>Returning Visits</h4>
            		<h2><?php echo $dailyStats['returning_visits']; ?></h2>
            		<h4>First Time Visits</h4>
            		<h2><?php echo $dailyStats['first_time_visits']; ?></h2>
                </div>
            	<div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color">
            		<i class="service-item hoverable fa fa-eye fa-4x"></i>
            		<h2>This Week</h2>
            		<hr />
            		<h4>Page Views</h4>
            		<h2><?php echo $weeklyStats['page_views']; ?></h2>
            		<h4>Unique Visits</h4>
            		<h2><?php echo $weeklyStats['unique_visits']; ?></h2>
            		<h4>Returning Visits</h4>
            		<h2><?php echo $weeklyStats['returning_visits']; ?></h2>
            		<h4>First Time Visits</h4>
            		<h2><?php echo $weeklyStats['first_time_visits']; ?></h2>
                </div>
            	<div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color">
            		<i class="service-item hoverable fa fa-eye fa-4x"></i>
            		<h2>This Month</h2>
            		<hr />
            		<h4>Page Views</h4>
            		<h2><?php echo $monthlyStats['page_views']; ?></h2>
            		<h4>Unique Visits</h4>
            		<h2><?php echo $monthlyStats['unique_visits']; ?></h2>
            		<h4>Returning Visits</h4>
            		<h2><?php echo $monthlyStats['returning_visits']; ?></h2>
            		<h4>First Time Visits</h4>
            		<h2><?php echo $monthlyStats['first_time_visits']; ?></h2>
                </div>
            	<div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color">
            		<i class="service-item hoverable fa fa-eye fa-4x"></i>
            		<h2>This Year</h2>
            		<hr />
            		<h4>Page Views</h4>
            		<h2><?php echo $yearlyStats['page_views']; ?></h2>
            		<h4>Unique Visits</h4>
            		<h2><?php echo $yearlyStats['unique_visits']; ?></h2>
            		<h4>Returning Visits</h4>
            		<h2><?php echo $yearlyStats['returning_visits']; ?></h2>
            		<h4>First Time Visits</h4>
            		<h2><?php echo $yearlyStats['first_time_visits']; ?></h2>
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-6 col-md-6 col-sm-6 hoverable-color">
            		<h2 class="text-center">Popular Pages</h2>
            		<hr />
					<?php
						$length = count($popularPages);
						$result = '<table class="center-block">';
						for ($i = 0; $i < $length; $i++) {
							$result .= '<tr><td>' . $popularPages[$i]['url'] . '</td><td>' . $popularPages[$i]['page_views'] . '</tr>';
						}
						$result .= '</table>';
					?>
					<p><?php echo $result; ?></p>
                </div>
            </div>
        </div>
    </div>
<!-- /Content Body -->


<?php include($root . '/public_html/includes/footer.php'); ?>