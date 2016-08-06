<?php
require_once('twitter-api-php-master/TwitterAPIExchange.php');
//ca-bundle/ca-bundle.crt
/** Set access tokens here - Create Token from this site https://dev.twitter.com/apps/  once done enter that info here**/
$settings  = array(
    'oauth_access_token' => "2293431442-HcomS1JlnILSv6H0yPsOVlTvOjoVLoA2VKN67RE",
    'oauth_access_token_secret' => "kzc5zwNSiKkHCDhTCwhnl7H2nroMCMUOckWOj04NpO7mM",
    'consumer_key' => "WrTHh98HK852hXyu7JXFzeGsd",
    'consumer_secret' => "MBL9QT2ZgWXs2HdognRMK3yK70eG5OIlBQ71VOqpNdx361tc8U"
);

$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$requestMethod = "POST";
if (isset($_GET['user']))  {$user = $_GET['user'];}  else {$user  = "iagdotme";}
if (isset($_GET['count'])) {$count = $_GET['count'];} else {$count = 20;}
$getfield = "?screen_name=$user&count=$count";
$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)
    ->buildOauth($url, $requestMethod)
    ->performRequest(),$assoc = TRUE);
if($string["errors"][0]["message"] != "") {echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";exit();}
foreach($string as $items)
{
    echo "Time and Date of Tweet: ".$items['created_at']."<br />";
    echo "Tweet: ". $items['text']."<br />";
    echo "Tweeted by: ". $items['user']['name']."<br />";
    echo "Screen name: ". $items['user']['screen_name']."<br />";
    echo "Followers: ". $items['user']['followers_count']."<br />";
    echo "Friends: ". $items['user']['friends_count']."<br />";
    echo "Listed: ". $items['user']['listed_count']."<br /><hr />";
}