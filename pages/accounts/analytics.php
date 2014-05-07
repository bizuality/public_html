<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]);
include($root . '/public_html/variables/user_analytics_variables.php');
require_once($root . '/public_html/includes/secure_header.php');
	
$sc->set_pid($pid);
$sc->getDailyStats();
$sc->getWeeklyStats();
$sc->getMonthlyStats();
$sc->getYearlyStats();

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
            		<h2>Today</h2>
            		<hr />
            		<h4>Page Views</h4>
            		<p><?php echo $dailyStats['page_views']; ?></p>
            		<h4>Unique Visits</h4>
            		<p><?php echo $dailyStats['unique_visits']; ?></p>
            		<h4>Returning Visits</h4>
            		<p><?php echo $dailyStats['returning_visits']; ?></p>
            		<h4>First Time Visits</h4>
            		<p><?php echo $dailyStats['first_time_visits']; ?></p>
                </div>
            	<div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color">
            		<h2>This Week</h2>
            		<hr />
            		<h4>Page Views</h4>
            		<p><?php echo $weeklyStats['page_views']; ?></p>
            		<h4>Unique Visits</h4>
            		<p><?php echo $weeklyStats['unique_visits']; ?></p>
            		<h4>Returning Visits</h4>
            		<p><?php echo $weeklyStats['returning_visits']; ?></p>
            		<h4>First Time Visits</h4>
            		<p><?php echo $weeklyStats['first_time_visits']; ?></p>
                </div>
            	<div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color">
            		<h2>This Month</h2>
            		<hr />
            		<h4>Page Views</h4>
            		<p><?php echo $monthlyStats['page_views']; ?></p>
            		<h4>Unique Visits</h4>
            		<p><?php echo $monthlyStats['unique_visits']; ?></p>
            		<h4>Returning Visits</h4>
            		<p><?php echo $monthlyStats['returning_visits']; ?></p>
            		<h4>First Time Visits</h4>
            		<p><?php echo $monthlyStats['first_time_visits']; ?></p>
                </div>
            	<div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color">
            		<h2>This Year</h2>
            		<hr />
            		<h4>Page Views</h4>
            		<p><?php echo $yearlyStats['page_views']; ?></p>
            		<h4>Unique Visits</h4>
            		<p><?php echo $yearlyStats['unique_visits']; ?></p>
            		<h4>Returning Visits</h4>
            		<p><?php echo $yearlyStats['returning_visits']; ?></p>
            		<h4>First Time Visits</h4>
            		<p><?php echo $yearlyStats['first_time_visits']; ?></p>
                </div>
            </div>
        </div>
    </div>
<!-- /Content Body -->


<?php include($root . '/public_html/includes/footer.php'); ?>