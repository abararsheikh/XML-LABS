<?php
/* Define some RSS 2.0 and other compatible feeds */


$url = 'http://rss.cnn.com/rss/cnn_topstories.rss';
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($curl);





/* Loop through and process each defined feed */

   $rssParser = simplexml_load_string($result);

   /* Output the channel information */
   echo $rssParser->channel->title."\n";
   echo "   URL: ".$rssParser->channel->link."\n";
   echo "   ".$rssParser->channel->description."\n\n";

   /* Iterate through the items, and output each one */
   foreach ($rssParser->channel->item AS $item) {
      echo $item->title."\n";
      echo $item->link."\n";
      echo $item->pubDate."\n";
      echo html_entity_decode($item->description) . "\n\n";
   }


//var_dump($result);
?>

<?php

$xsldoc = new DOMDocument();
$xsldoc->load('rssTransform2.xsl');

$xmldoc = new DOMDocument();
$xmldoc->loadXML($result);

$xsl = new XSLTProcessor();
$xsl->importStyleSheet($xsldoc);
$result = $xsl->transformToXML($xmldoc);


?>



<?php echo $result; ?>


