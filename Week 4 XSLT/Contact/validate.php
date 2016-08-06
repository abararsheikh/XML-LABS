<?php
$doc = new DOMDocument();
$doc -> load('contact.xml');
if($doc->schemaValidate('contact.xsd'))
{
    echo "valid document";
}