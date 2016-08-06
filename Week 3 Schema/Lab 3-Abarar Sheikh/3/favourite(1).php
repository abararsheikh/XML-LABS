<?php
$doc = new DOMDocument();
$doc -> load('favourite(1).xml');
if($doc->schemaValidate('favourite(1).xsd'))
{
    echo "valid document";
}