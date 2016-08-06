<?php
$doc = new DOMDocument();
$doc -> load('book.xml');
if($doc->schemaValidate('book.xsd'))
{
    echo "valid document";
}