<?php
$doc = new DOMDocument();
$doc -> load('contactlist.xml');
if($doc->schemaValidate('contactlist.xsd'))
{
    echo "valid document";
}