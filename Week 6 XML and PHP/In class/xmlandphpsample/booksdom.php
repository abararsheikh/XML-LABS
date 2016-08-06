<?php
$dom = new DOMDocument();
$dom ->preserveWhiteSpace = false;

$dom -> load('book.xml');
$root = $dom ->documentElement;

foreach($root->childNodes as $child)
{
    echo $child->nodeName . "::" . $child->nodeValue . "<br/>";
}

//Above thing we can write as below both saws same output

$books = $dom->getElementsByTagName('book');
foreach($books as $book)
{
    echo "Book id : " . $book->getAttribute('gen') . "<br/>";
    //$book->nodeName . $book->nodeValue
}
