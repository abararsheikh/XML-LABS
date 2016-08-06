<?php
session_start();

require "twitteroauth/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

$twitteruser = "FlyYKF"; //user name you want to reference
$notweets = 5; //how many tweets you want to retrieve
$consumerkey = "WrTHh98HK852hXyu7JXFzeGsd";
$consumersecret = "MBL9QT2ZgWXs2HdognRMK3yK70eG5OIlBQ71VOqpNdx361tc8U";
$accesstoken = "2293431442-HcomS1JlnILSv6H0yPsOVlTvOjoVLoA2VKN67RE";
$accesstokensecret = "kzc5zwNSiKkHCDhTCwhnl7H2nroMCMUOckWOj04NpO7mM";

$connection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);


$tweets = $connection->get("statuses/user_timeline",["count" => $notweets, "screen_name" => $twitteruser]);



foreach($tweets as $items)
{
    echo "Time and Date of Tweet: ".$items->created_at ."<br />";
    echo "Tweet: ". $items->text."<br />";
    echo "Tweeted by: ". $items->user->name."<br />";
    echo "<p></p>";

}
?>
