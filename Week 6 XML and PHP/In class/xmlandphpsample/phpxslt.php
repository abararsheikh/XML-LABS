<?php
$docxsl = new DOMDocument();
$docxsl->load('list.xsl');


$docxml = new DOMDocument();
$docxml->load('list.xml');

$xslt = new XSLTProcessor();

$xslt->importStylesheet($docxsl);

echo $xslt->transformToXml($docxml);



