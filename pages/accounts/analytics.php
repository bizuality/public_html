<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]);
include($root . '/variables/user_analytics_variables.php');
require_once($root .'/includes/secure_header.php');
require_once($root . '/resources/helpers/StatCounterAPIExchange.php');

$sc->set_pid($pid);
$sc->getDailyStats();
$sc->getWeeklyStats();
$sc->getMonthlyStats();
$sc->getYearlyStats();
$sc->getPopularPages(10);
$sc->getBrowsers(10);
$sc->getOSs(10);
$sc->getKeywordActivity(10);
$sc->getRecentActivity(100);
$sc->getCameFrom(10);
$sc->getRecentVisitors(5);

?>

<!-- Content Body -->
	<div id="top" class="header">
        <div class="vert-text">
        	<a href="#analytics" class="btn btn-default btn-lg">Continue to Site Analytics</a>
        	<h3>or</h3>
            <h1>
            	<a class="icon-link" href="/pages/accounts/twitter.php"><i class="service-icon hoverable fa fa-twitter fa-4x" data-trigger="hover"></i></a>&nbsp;
				<a class="icon-link" href="/pages/accounts/facebook.php"><i class="service-icon hoverable fa fa-facebook fa-4x" data-trigger="hover"></i></a>
			</h1>
        </div>
    </div>
    <div id="analytics" class="main-content-alternate">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center slide-down-onload">
                	<hr class="thick"/>
                	<img class="img-responsive center-block" src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/img/bizuality_logo_small.png">
                    <h1>Analytics</h1>
                    <hr class="thick"/>
                    <p>As of <?php echo date('l\, F j\, Y h:i:s A'); ?></p>
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color-fixed">
            		<i class="service-item hoverable fa fa-eye fa-4x"></i>
            		<h2>Today</h2>
            		<hr class="short"/>
            		<h4>Page Views</h2>
            		<h2><?php echo $dailyStats['page_views']; ?></h2>
            		<h4>Unique Visits</h4>
            		<h2><?php echo $dailyStats['unique_visits']; ?></h2>
            		<h4>Returning Visits</h4>
            		<h2><?php echo $dailyStats['returning_visits']; ?></h2>
            		<h4>First Time Visits</h4>
            		<h2><?php echo $dailyStats['first_time_visits']; ?></h2>
                </div>
            	<div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color-fixed">
            		<i class="service-item hoverable fa fa-eye fa-4x"></i>
            		<h2>This Week</h2>
            		<hr class="short"/>
            		<h4>Page Views</h4>
            		<h2><?php echo $weeklyStats['page_views']; ?></h2>
            		<h4>Unique Visits</h4>
            		<h2><?php echo $weeklyStats['unique_visits']; ?></h2>
            		<h4>Returning Visits</h4>
            		<h2><?php echo $weeklyStats['returning_visits']; ?></h2>
            		<h4>First Time Visits</h4>
            		<h2><?php echo $weeklyStats['first_time_visits']; ?></h2>
                </div>
            	<div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color-fixed">
            		<i class="service-item hoverable fa fa-eye fa-4x"></i>
            		<h2>This Month</h2>
            		<hr class="short"/>
            		<h4>Page Views</h4>
            		<h2><?php echo $monthlyStats['page_views']; ?></h2>
            		<h4>Unique Visits</h4>
            		<h2><?php echo $monthlyStats['unique_visits']; ?></h2>
            		<h4>Returning Visits</h4>
            		<h2><?php echo $monthlyStats['returning_visits']; ?></h2>
            		<h4>First Time Visits</h4>
            		<h2><?php echo $monthlyStats['first_time_visits']; ?></h2>
                </div>
            	<div class="col-lg-3 col-md-3 col-sm-3 text-center hoverable-color-fixed">
            		<i class="service-item hoverable fa fa-eye fa-4x"></i>
            		<h2>This Year</h2>
            		<hr class="short"/>
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
            <hr class="thick"/>
            <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-4 hoverable-color-fixed text-center">
            		<i class="hoverable fa fa-tasks fa-4x"></i>
            		<h2 class="text-center">Operating Systems</h2>
            		<hr />
					<?php
						$length = count($oss);
						$result = '<table>';
						for ($i = 0; $i < $length; $i++) {
							$result .= '<tr><td class="text-left"><p>' . ($i + 1) . ')&nbsp;</p></td><td class="text-left">' . $oss[$i]['os_name'] . '</td><td class="text-right"><p>' . $oss[$i]['percentage'] . '</p></td></tr>';
						}
						$result .= '</table>';
					?>
					<p><?php echo $result; ?></p>
                </div>
            	<div class="col-lg-4 col-md-4 col-sm-4 hoverable-color-fixed text-center">
            		<i class="hoverable fa fa-mobile fa-4x"></i>
            		<h2 class="text-center">Devices</h2>
            		<hr />
					<?php
						$length = count($recentActivity);
						$result = '<p>';
						for ($i = 0; $i < $length; $i++) {
							if(!empty($recentActivity[$i]['device_vendor']) or !empty($recentActivity[$i]['device_model'])) {
								$result .= '<small>' . $recentActivity[$i]['device_vendor'] . '</small>' . '  ' . strtoupper($recentActivity[$i]['device_model']) . '<br>';
							}
						}
						$result .= '</p>';
					?>
					<p><?php echo $result; ?></p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 hoverable-color-fixed text-center">
               		<i class="hoverable fa fa-compass fa-4x"></i>
            		<h2 class="text-center">Browsers</h2>
            		<hr />
					<?php
						$length = count($browsers);
						$result = '<table>';
						for ($i = 0; $i < $length; $i++) {
							$result .= '<tr><td class="text-left"><p>' . ($i + 1) . ')&nbsp;</p></td><td class="text-left">' . $browsers[$i]['browser_name'] . '</td><td class="text-left">' . $browsers[$i]['browser_version'] . '</td><td class="text-right"><p>' . $browsers[$i]['percentage'] . '</p></td></tr>';
						}
						$result .= '</table>';
					?>
					<p><?php echo $result; ?></p>
                </div>
            </div>
            <hr class="thick"/>
            <div class="row">
            	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hoverable-color-fixed text-center">
            		<i class="hoverable fa fa-bookmark-o fa-4x"></i>
            		<h2 class="text-center">Popular Pages</h2>
            		<hr />
					<?php
						$length = count($popularPages);
						$result = '<table>';
						for ($i = 0; $i < $length; $i++) {
							$result .= '<tr><td class="text-left"><p>' . ($i + 1) . ')&nbsp;</p></td><td class="text-left break">' . $popularPages[$i]['url'] . '</td><td class="text-right"><p>' . $popularPages[$i]['page_views'] . '</p></td></tr>';
						}
						$result .= '</table>';
					?>
					<p><?php echo $result; ?></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hoverable-color-fixed text-center">
               		<i class="hoverable fa fa-ellipsis-h fa-4x"></i>
            		<h2 class="text-center">Referring URL's</h2>
            		<hr />
					<?php
						$length = count($cameFrom);
						$result = '<table>';
						for ($i = 0; $i < $length; $i++) {
							if(!empty($cameFrom[$i]['referring_url'])) {
								$result .= '<tr><td class="text-left"><p>' . ($i + 1) . ')&nbsp;</p></td><td class="text-left break">' . $cameFrom[$i]['referring_url'] . '</td><td class="text-right">' . $cameFrom[$i]['page_views'] . '</td></tr>';
							}
						}
						$result .= '</table>';
					?>
					<p><?php echo $result; ?></p>
                </div>
            </div>
            <hr class="thick"/>
            <div class="row text-center">
               	<div class="col-lg-4 col-md-4 col-sm-4 hoverable-color-fixed text-center">
               		<i class="hoverable fa fa-ellipsis-h fa-4x"></i>
            		<h2 class="text-center">Recent Keywords</h2>
            		<hr />
					<?php
						$length = count($keywords);
						$result = '<table>';
						for ($i = 0; $i < $length; $i++) {
							$result .= '<tr><td class="text-left"><p>' . ($i + 1) . ')&nbsp;</p></td><td class="text-left"><p>' . $keywords[$i]['search_engine_host'] . '</p></td><td class="text-right break">' . $keywords[$i]['keyword'] . '</td></tr>';
						}
						$result .= '</table>';
					?>
					<p><?php echo $result; ?></p>
					<br />
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 hoverable-color-fixed text-center">
            		<i class="hoverable fa fa-male fa-4x"></i>
            		<h2 class="text-center">Your Most Recent Visitor</h2>
            		<hr />
					<table>
						<tr>
							<td class="text-left">Log Visits</td>
							<td class="text-right break"><?php echo $recentVisitors[0]['log_visits']; ?></td>
						</tr>
						<tr>
							<td class="text-left">Entries in Visit</td>
							<td class="text-right break"><?php echo $recentVisitors[0]['entries_in_visit']; ?></td>
						</tr>
						<tr>
							<td class="text-left">Entry Time</td>
							<td class="text-right break"><?php echo $recentVisitors[0]['entry_t']; ?></td>
						</tr>
						<tr>
							<td class="text-left">Entry URL</td>
							<td class="text-right break"><?php echo $recentVisitors[0]['entry_url']; ?></td>
						</tr>
						<tr>
							<td class="text-left">Keywords</td>
							<td class="text-right break"><?php echo $recentVisitors[0]['se_keywords']; ?></td>
						</tr>
						<tr>
							<td class="text-left">Exit Time</td>
							<td class="text-right break"><?php echo $recentVisitors[0]['exit_t']; ?></td>
						</tr>
						<tr>
							<td class="text-left">Exit URL</td>
							<td class="text-right break"><?php echo $recentVisitors[0]['exit_url']; ?></td>
						</tr>
						<tr>
							<td class="text-left">Browser</td>
							<td class="text-right break"><?php echo $recentVisitors[0]['browser_name']; ?></td>
						</tr>
						<tr>
							<td class="text-left">OS</td>
							<td class="text-right break"><?php echo $recentVisitors[0]['os']; ?></td>
						</tr>
						<tr>
							<td class="text-left">Display Width</td>
							<td class="text-right break"><?php echo $recentVisitors[0]['width']; ?></td>
						</tr>
						<tr>
							<td class="text-left">Display Height</td>
							<td class="text-right break"><?php echo $recentVisitors[0]['height']; ?></td>
						</tr>
						<tr>
							<td class="text-left">JavaScript Enabled</td>
							<td class="text-right break"><?php echo $recentVisitors[0]['javascript']; ?></td>
						</tr>
						<tr>
							<td class="text-left">Country</td>
							<td class="text-right break"><?php echo $recentVisitors[0]['country']; ?></td>
						</tr>
						<tr>
							<td class="text-left">Provider</td>
							<td class="text-right break"><?php echo $recentVisitors[0]['isp']; ?></td>
						</tr>
						<tr>
							<td class="text-left">IP Address</td>
							<td class="text-right break"><?php echo $recentVisitors[0]['ip_address']; ?></td>
						</tr>
						<tr>
							<td class="text-left">Latitude</td>
							<td class="text-right break"><?php echo $recentVisitors[0]['latitude']; ?></td>
						</tr>
						<tr>
							<td class="text-left">Longitude</td>
							<td class="text-right break"><?php echo $recentVisitors[0]['longitude']; ?></td>
						</tr>
						<tr>
							<td class="text-left">Number of Entires</td>
							<td class="text-right break"><?php echo $recentVisitors[0]['num_entry']; ?></td>
						</tr>
						<tr>
							<td class="text-left">Visit Length</td>
							<td class="text-right break"><?php echo $recentVisitors[0]['visit_length']; ?></td>
						</tr>
					</table>
					<br />
                </div>
                <a href="/pages/accounts/more_visitor_info.php" class="btn btn-default btn-lg text-center">Get More Visitor Information</a>
            </div>
            <hr class="thick"/>
            <div class="row">
            	<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 hoverable-color-fixed text-center">
            		<i class="hoverable fa fa-location-arrow fa-4x"></i>
            		<h2 class="text-center">Locations</h2>
            		<hr />
					<?php
						$length = count($recentActivity);
						$result = '<p>';
						for ($i = 0; $i < $length; $i++) {
							if(!empty($recentActivity[$i]['city'])or !empty($recentActivity[$i]['state'])) {
								$result .= '<small>' . $recentActivity[$i]['city'] . '</small>' . '  ' . strtoupper($recentActivity[$i]['state']) . ', ';
							}
						}
						$result .= '</p>';
					?>
					<p><?php echo $result; ?></p>
                </div>
            </div>
        </div>
    </div>
<!-- /Content Body -->


<?php include($root . '/includes/footer.php'); ?>