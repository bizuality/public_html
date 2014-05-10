<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]);
include($root . '/public_html/variables/user_analytics_variables.php');
require_once($root . '/public_html/includes/secure_header.php');

$sc->set_pid($pid);
$sc->getRecentVisitors(500);
?>

<!-- Content Body -->
    <div id="website_design" class="main-content-alternate">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center slide-down-onload">
                	<hr />
                	<img class="img-responsive center-block" src="<?php realpath($_SERVER["DOCUMENT_ROOT"]); ?>/public_html/img/bizuality_logo_small.png">
                    <h1>Enhanced Visitor Information</h1>
                    <hr />
                    <p>As of <?php echo date('l\, F j\, Y h:i:s A'); ?></p>
                </div>
            </div>
            <?php
            	$length = count($recentVisitors);
            	$result = '';
            	for($i = 0; $i < $length; ++$i) {
            		$result .= '
            <hr class="thick" />
            <div class="row hoverable-color-fixed text-center">
            	<div class="col-lg-2 col-md-2 col-sm-2 text-center">
            		<h1><i class="fa fa-male fa-4x"></i><h1>
            		<h1>' . ($i + 1) . '</h1>
            	</div>
            	<div class="col-lg-5 col-md-5 col-sm-5 text-center">
            		<table>
						<tr>
							<td class="text-left">Log Visits</td>
							<td class="text-right"><p>' . $recentVisitors[$i]['log_visits'] . '</p></td>
						</tr>
						<tr>
							<td class="text-left">Entries in Visit</td>
							<td class="text-right"><p>' . $recentVisitors[$i]['entries_in_visit'] . '</p></td>
						</tr>
						<tr>
							<td class="text-left">Entry Time</td>
							<td class="text-right"><p>' . $recentVisitors[$i]['entry_t'] . '</p></td>
						</tr>
						<tr>
							<td class="text-left">Entry URL</td>
							<td class="text-right"><p>' . $recentVisitors[$i]['entry_url'] . '</p></td>
						</tr>
						<tr>
							<td class="text-left">Keywords</td>
							<td class="text-right"><p>' . $recentVisitors[$i]['se_keywords'] . '</p></td>
						</tr>
						<tr>
							<td class="text-left">Exit Time</td>
							<td class="text-right"><p>' . $recentVisitors[$i]['exit_t'] . '</p></td>
						</tr>
						<tr>
							<td class="text-left">Exit URL</td>
							<td class="text-right"><p>' . $recentVisitors[$i]['exit_url'] . '</p></td>
						</tr>
						<tr>
							<td class="text-left">Browser</td>
							<td class="text-right"><p>' . $recentVisitors[$i]['browser_name'] . '</p></td>
						</tr>
						<tr>
							<td class="text-left">OS</td>
							<td class="text-right"><p>' . $recentVisitors[$i]['os'] . '</p></td>
						</tr>
					</table>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-5 text-center">
					<table>
						<tr>
							<td class="text-left">Display Width</td>
							<td class="text-right"><p>' . $recentVisitors[$i]['width'] . '</p></td>
						</tr>
						<tr>
							<td class="text-left">Display Height</td>
							<td class="text-right"><p>' . $recentVisitors[$i]['height'] . '</p></td>
						</tr>
						<tr>
							<td class="text-left">JavaScript Enabled</td>
							<td class="text-right"><p>' . $recentVisitors[$i]['javascript'] . '</p></td>
						</tr>
						<tr>
							<td class="text-left">Country</td>
							<td class="text-right"><p>' . $recentVisitors[$i]['country'] . '</p></td>
						</tr>
						<tr>
							<td class="text-left">Provider</td>
							<td class="text-right"><p>' . $recentVisitors[$i]['isp'] . '</p></td>
						</tr>
						<tr>
							<td class="text-left">IP Address</td>
							<td class="text-right"><p>' . $recentVisitors[$i]['ip_address'] . '</p></td>
						</tr>
						<tr>
							<td class="text-left">Latitude</td>
							<td class="text-right"><p>' . $recentVisitors[$i]['latitude'] . '</p></td>
						</tr>
						<tr>
							<td class="text-left">Longitude</td>
							<td class="text-right"><p>' . $recentVisitors[$i]['longitude'] . '</p></td>
						</tr>
						<tr>
							<td class="text-left">Number of Entires</td>
							<td class="text-right"><p>' . $recentVisitors[$i]['num_entry'] . '</p></td>
						</tr>
						<tr>
							<td class="text-left">Visit Length</td>
							<td class="text-right"><p>' . $recentVisitors[$i]['visit_length'] . '</p></td>
						</tr>
					</table>
				</div>
			</div>';
            	}
            	echo $result;
            ?>
        </div>
    </div>
<!-- /Content Body -->
    
<?php include($root . '/public_html/includes/footer.php'); ?>