<?php
/* Define some RSS 2.0 and other compatible feeds */
$rssfeed = array();

$rssfeed['CBC'] = 'http://rss.cnn.com/rss/cnn_topstories.rss';


/* Loop through and process each defined feed */
foreach($rssfeed AS $name=>$url) {
   $rssParser = simplexml_load_file($url);

   /* Output the channel information */
   echo $rssParser->channel->title."\n";
   echo "   URL: ".$rssParser->channel->link."\n";
   echo "   ".$rssParser->channel->description."\n\n";

   /* Iterate through the items, and output each one */
   foreach ($rssParser->channel->item AS $item) {
      echo $item->title."\n";
      echo $item->link."\n";
      echo $item->pubDate."\n";
      echo $item->description."\n\n";
   }
}
?>


