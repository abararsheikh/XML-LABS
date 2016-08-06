<?php
$doc = new DOMDocument();
$doc -> load('schools(1).xml');
if($doc->schemaValidate('schools(1).xsd'))
{
    echo "valid document";
}