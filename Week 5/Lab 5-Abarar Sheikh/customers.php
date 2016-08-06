<?php

$xsldoc = new DOMDocument();
$xsldoc->load('customers.xsl');

$xmldoc = new DOMDocument();
$xmldoc->load('customers.xml');

$xsl = new XSLTProcessor();
//$xsl->setParameter('', 'discount', ".5");
$xsl->importStyleSheet($xsldoc);
$result = $xsl->transformToXML($xmldoc);


?>



<?php echo $result; ?>


