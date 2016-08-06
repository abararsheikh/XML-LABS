<?php

$xsldoc = new DOMDocument();
$xsldoc->load('order5.xsl');

$xmldoc = new DOMDocument();
$xmldoc->load('order.xml');

$xsl = new XSLTProcessor();
$xsl->importStyleSheet($xsldoc);
$result = $xsl->transformToXML($xmldoc);


?>
<?php echo $result; ?>