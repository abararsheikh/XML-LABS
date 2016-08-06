<?php
session_start();

require "twitteroauth/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

$twitteruser = "humbercollege"; //user name you want to reference
$notweets = 5; //how many tweets you want to retrieve
$consumerkey = "CrFlx9KIByjcGg1EoUpfv1pH";
$consumersecret = "aGQiDbg7Wzx49rSyp4C1WXohYb4KyftTBVv2RW1lwLXlSJsIV";
$accesstoken = "3130061458-hWi4cKeyE5dT6zJejzjJbTOa8OdqmkU2SbUh9A";
$accesstokensecret = "mNKxG6xQRWUracSwkbEx9sOllMREAjsrUtYV3xcvLRa1";

$connection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);


$tweets = $connection->get("statuses/user_timeline",["count" => $notweets, "screen_name" => $twitteruser]);



foreach($tweets as $items)
{
    echo "Time and Date of Tweet: ".$items->created_at ."<br />";
    echo "Tweet: ". $items->text."<br />";
    echo "Tweeted by: ". $items->user->name."<br />";

}
?>
