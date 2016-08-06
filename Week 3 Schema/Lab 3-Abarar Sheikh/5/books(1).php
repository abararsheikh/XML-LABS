<?php
$doc = new DOMDocument();
$doc -> load('books(1).xml');
if($doc->schemaValidate('books(1).xsd'))
{
    echo "valid document";
}