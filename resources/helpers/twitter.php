<?php
require_once('TwitterAPIExchange.php');
 
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "2458969478-EpqF3ujJl5rR7pcWa0wDMPpPXTfDkttUY2nAhKs",
    'oauth_access_token_secret' => "oZz2fgNC590hIMyH48yGJEyQqlroitnUIJjITMLm8xhgC",
    'consumer_key' => "FhU6GORQ4RRZsCMtRE2uZ3HW0",
    'consumer_secret' => "hTU00OqAMjI7VT16WO1lssF7yLPIEMft5Jl7XNpwbZ8umWCCAa"
);
 
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$requestMethod = "GET";
$getfield = '?screen_name=caryhutto&count=20';
$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest(),$assoc = TRUE);

foreach($string as $items)
    {
        //echo "Time and Date of Tweet: ".$items['created_at']."<br />";
        echo "Tweet: ". $items['text']."<br />";
        echo "Tweeted by: ". $items['user']['name']."<br />";
        echo "Retweets: " . $items['retweet_count']. "<br />";
        echo "Favorites: " . $items['favorite_count'] . "<br />";
        //echo "Screen name: ". $items['user']['screen_name']."<br />";
        echo "Followers: ". $items['user']['followers_count']."<br />";
        echo "Following: ". $items['user']['friends_count']."<br />";
        //echo "Listed: ". $items['user']['listed_count']."<br />";
        echo "**************************************************<br>";
    }
?>