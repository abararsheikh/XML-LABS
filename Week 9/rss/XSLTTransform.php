<?php

// you have to make .xsl file from xml file what ever you want to display you can grab that part in xslt
$xsldoc = new DOMDocument();
$xsldoc->load('rssTransform.xsl');

$xmldoc = new DOMDocument();
$xmldoc->load('http://rss.cbc.ca/lineup/topstories.xml');
// here i am giving link to XML file, not downloading and attaching them
// go to cbc.cs -> rss -> open any one xml file and copy and pest it's url here


$xsl = new XSLTProcessor();
$xsl->importStyleSheet($xsldoc);
$result = $xsl->transformToXML($xmldoc);


?>



<?php echo $result; ?>

