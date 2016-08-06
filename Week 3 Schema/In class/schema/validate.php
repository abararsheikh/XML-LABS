<?php
$doc = new DOMDocument();
$doc->load('books.xml');
if($doc->schemaValidate('books.xsd')){
    echo "valid docement";
}