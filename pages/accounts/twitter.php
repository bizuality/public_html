<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include($root . '/variables/user_twitter_variables.php');
require_once($root . '/includes/secure_header.php');
require_once($root . '/resources/helpers/TwitterAPIExchange.php');

$settings = array(
    'oauth_access_token' => TWITTER_OAUTH_ACCESS_TOKEN,
    'oauth_access_token_secret' => TWITTER_OAUTH_ACCESS_TOKEN_SECRET,
    'consumer_key' => TWITTER_CONSUMER_KEY,
    'consumer_secret' => TWITTER_CONSUMER_SECRET
);

$twitter = new TwitterAPIExchange($settings);
$user_timeline = $twitter->getUserTimeline($twitter_user);
$searchResults = $twitter->searchTweets($twitter_user);

if(empty($twitter_user)) {
	echo '<p class="error-msg">You do not have any tweets!</p>';
	include($root . '/includes/footer.php');
	die();
}
if(!empty($twitter_user_competitor_01)) {
	$twitter_comp_01 = new TwitterAPIExchange($settings);
	$comp_01_user_timeline = $twitter_comp_01->getUserTimeline($twitter_user_competitor_01);
	$comp_01_searchResults = $twitter_comp_01->searchTweets($twitter_user_competitor_01);
}
if(!empty($twitter_user_competitor_02)) {
	$twitter_comp_02 = new TwitterAPIExchange($settings);
	$comp_02_user_timeline = $twitter_comp_02->getUserTimeline($twitter_user_competitor_02);
	$comp_02_searchResults = $twitter_comp_02->searchTweets($twitter_user_competitor_02);
}
if(!empty($twitter_user_competitor_03)) {
	$twitter_comp_03 = new TwitterAPIExchange($settings);
	$comp_03_user_timeline = $twitter_comp_03->getUserTimeline($twitter_user_competitor_03);
	$comp_03_searchResults = $twitter_comp_03->searchTweets($twitter_user_competitor_03);
}

?>

<!-- Content Body -->
    <div id="website_design" class="main-content-alternate">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center slide-down-onload">
                	<hr class="thick" />
                	<h1><i class="fa fa-twitter-square"></i> <?php echo $user_timeline[0]['user']['name']; ?></h1>
                	<p><?php echo $user_timeline[0]['user']['location']; ?></p>
                	<p><small><p><?php echo $user_timeline[0]['user']['description']; ?></p></small></p>
                	<hr class="thick" />
                	<p>As of <?php echo date('l\, F j\, Y h:i:s A'); ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 text-center hoverable-color-fixed">
                	<i class="hoverable fa fa-group fa-4x"></i>
                	<hr class="short" />
                	<h4>Followers</h4>
                	<h2><?php echo number_format($user_timeline[0]['user']['followers_count']); ?></h2>
                </div>
               	<div class="col-lg-4 col-md-4 col-sm-4 text-center hoverable-color-fixed">
                	<i class="hoverable fa fa-user fa-4x"></i>
                	<hr class="short" />
                	<h4>Following</h4>
                	<h2><?php echo number_format($user_timeline[0]['user']['friends_count']); ?></h2>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 text-center hoverable-color-fixed">
                	<i class="hoverable fa fa-edit fa-4x"></i>
                	<hr class="short" />
                	<h4>Tweets</h4>
                	<h2><?php echo number_format($user_timeline[0]['user']['statuses_count']); ?></h2>
                </div>
            </div>
            <hr class="thick"/>
            <div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 hoverable-color-fixed text-center">
					<h2>Your Most Recent Tweet</h2>
					<hr class="short" />
					<div class="col-lg-10 col-md-10 col-sm-10">
						<h3 class="text-left"><?php echo $user_timeline[0]['text']; ?></h3>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2">
						<h3><i class="hoverable fa fa-retweet"></i> <?php echo number_format($user_timeline[0]['retweet_count']); ?></h3>
						<h3><i class="hoverable fa fa-star"></i> <?php echo number_format($user_timeline[0]['favorite_count']); ?></h3>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 hoverable-color-fixed text-center">
					<h2>Your Most Popular Tweet</h2>
					<hr class="short" />
					<div class="col-lg-10 col-md-10 col-sm-10">
						<h3 class="text-left"><?php echo $twitter->getMostPopularTweet('retweet_count')['text']; ?></h3>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2">
						<h3><i class="hoverable fa fa-retweet"></i> <?php echo number_format($twitter->getMostPopularTweet('retweet_count')['retweet_count']); ?></h3>
						<h3><i class="hoverable fa fa-star"></i> <?php echo number_format($twitter->getMostPopularTweet('retweet_count')['favorite_count']); ?></h3>
					</div>
				</div>
            </div>
            <hr class="thick" />
            <div class="row">
            	<div class="col-md-6 text-center">
            		<h2><i class="fa fa-fire"></i></h2>
            		<h2>Hot Tweets</h2>
            		<hr class="short" />
            		<div class="timeline-container">
						<table class="timeline">
							<?php
								foreach($searchResults as $result) {
									echo '<tr class="timeline-row hoverable-color-fixed">';
									echo '<td class="timeline-item-title text-left">';
									echo '<p>' . $searchResults['statuses'][0]['user']['name'] . '</p>';
									echo '</td>';
									echo '<td class="timeline-item text-left break">';
									echo '<p>' . $searchResults['statuses'][0]['text'] . '</p>';
									echo '</td>';
									echo '<td class="timeline-item text-right">';
									echo '<h4><i class="fa fa-retweet"></i>' . number_format($searchResults['statuses'][0]['retweet_count']) . '</h4>';
									echo '<h4><i class="fa fa-star"></i>' . number_format($searchResults['statuses'][0]['favorite_count']) . '</h4>';
									echo '</td>';
									echo '</tr>';
								}
							?>
						</table>
					</div>
				</div>
			</div>
			<hr class="thick" />
            <div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 text-center">
					<i class="hoverable fa fa-bullseye fa-4x"></i>
					<h2>Competitors</h2>
					<?php
						$noCompetitors = true;
						$results = "";
						if(!empty($twitter_user_competitor_01)){
							$noCompetitors = false;
							$results .= '<div class="col-lg-6 col-md-6 col-sm-6 hoverable-color-fixed text-center">';
							$results .= '<h3>' . $comp_01_user_timeline[0]['user']['name'] . '</h3>';
							$results .= '<p>' . $comp_01_user_timeline[0]['user']['description'] . '</p>';
							$results .= '<hr />';
							$results .= '<div class="col-lg-9 col-md-9 col-sm-9">';
							$results .= '<h4>Their Most Popular Tweet</h4>';
							$results .= '<hr />';
							$results .= '<p class="text-left">' . $twitter_comp_01->getMostPopularTweet('retweet_count')['text'] . '</p>';
							$results .= '</div>';
							$results .= '<div class="col-lg-3 col-md-3 col-sm-3">';
							$results .= '<p><i class="hoverable fa fa-group"></i> ' . number_format($comp_01_user_timeline[0]['user']['followers_count']) . '</p>';
							$results .= '<p><i class="hoverable fa fa-user"></i> ' . number_format($comp_01_user_timeline[0]['user']['friends_count']) . '</p>';
							$results .= '<p><i class="hoverable fa fa-edit"></i> ' . number_format($comp_01_user_timeline[0]['user']['statuses_count']) . '</p>';
							$results .= '</div>';
							$results .= '</div>';
						}
						echo $results;

						$results = "";
						if(!empty($twitter_user_competitor_02)){
							$noCompetitors = false;
							$results .= '<div class="col-lg-6 col-md-6 col-sm-6 hoverable-color-fixed text-center">';
							$results .= '<h3>' . $comp_02_user_timeline[0]['user']['name'] . '</h3>';
							$results .= '<p>' . $comp_02_user_timeline[0]['user']['description'] . '</p>';
							$results .= '<hr />';
							$results .= '<div class="col-lg-9 col-md-9 col-sm-9">';
							$results .= '<h4>Their Most Popular Tweet</h4>';
							$results .= '<hr />';
							$results .= '<p class="text-left">' . $twitter_comp_02->getMostPopularTweet('retweet_count')['text'] . '</p>';
							$results .= '</div>';
							$results .= '<div class="col-lg-3 col-md-3 col-sm-3">';
							$results .= '<p><i class="hoverable fa fa-group"></i> ' . number_format($comp_02_user_timeline[0]['user']['followers_count']) . '</p>';
							$results .= '<p><i class="hoverable fa fa-user"></i> ' . number_format($comp_02_user_timeline[0]['user']['friends_count']) . '</p>';
							$results .= '<p><i class="hoverable fa fa-edit"></i> ' . number_format($comp_02_user_timeline[0]['user']['statuses_count']) . '</p>';
							$results .= '</div>';
							$results .= '</div>';
						}
						echo $results;

						$results = "";
						if(!empty($twitter_user_competitor_03)){
							$noCompetitors = false;
							$results .= '<div class="col-lg-6 col-md-6 col-sm-6 hoverable-color-fixed text-center">';
							$results .= '<h3>' . $comp_03_user_timeline[0]['user']['name'] . '</h3>';
							$results .= '<p>' . $comp_03_user_timeline[0]['user']['description'] . '</p>';
							$results .= '<hr />';
							$results .= '<div class="col-lg-9 col-md-9 col-sm-9">';
							$results .= '<h4>Their Most Popular Tweet</h4>';
							$results .= '<hr />';
							$results .= '<p class="text-left">' . $twitter_comp_03->getMostPopularTweet('retweet_count')['text'] . '</p>';
							$results .= '</div>';
							$results .= '<div class="col-lg-3 col-md-3 col-sm-3">';
							$results .= '<p><i class="hoverable fa fa-group"></i> ' . number_format($comp_03_user_timeline[0]['user']['followers_count']) . '</p>';
							$results .= '<p><i class="hoverable fa fa-user"></i> ' . number_format($comp_03_user_timeline[0]['user']['friends_count']) . '</p>';
							$results .= '<p><i class="hoverable fa fa-edit"></i> ' . number_format($comp_03_user_timeline[0]['user']['statuses_count']) . '</p>';
							$results .= '</div>';
							$results .= '</div>';
						}
						echo $results;

						$results = "";
						if($noCompetitors) {
							$results .= '<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 hoverable-color-fixed text-center">';
							$results .= '<h3>You have not told us about your competitors yet. <a href="/pages/accounts/faq.php">Let us know</a> who they are.</h3>';
							$results .='</div>';
						}
						echo $results;
					?>
				</div>
			</div>
			<hr class="thick" />
            <div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 hoverable-color-fixed text-center">
					<i class="hoverable fa fa-location-arrow fa-4x"></i>
					<h2>Locations</h2>
					<?php
						$length = count($searchResults['statuses']);
						$results = "<p>";
						for($i = 0; $i < $length; $i++) {
							if(!empty($searchResults['statuses'][$i]['user']['location'])) {
								$results .= strtoupper($searchResults['statuses'][$i]['user']['location']) . ', ';
							}
						}
						echo $results;
					?>
				</div>
			</div>
        </div>
    </div>
<!-- /Content Body -->
    
<?php include($root . '/includes/footer.php'); ?>

