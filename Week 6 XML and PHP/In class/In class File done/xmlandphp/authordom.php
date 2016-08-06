<?php
$dom = new DOMDocument();
$dom->preserveWhiteSpace = false;

$dom->load('authors.xml');

$root = $dom->documentElement;

foreach($root->childNodes as $child){    //this print whole document but without attribute
    echo $child->nodeName . " :: " . $child->nodeValue . "<br />";
}


$authors = $dom->getElementsByTagName('author');

foreach($authors as $author){

    echo "Author id :" . $author->getAttribute('id') . "<br />";

    $child = $author->childNodes;  // i am not printing child nodes here but storing in varibale

    foreach($child as $c){    //then printing child node and it's value
        echo $c->nodeName . " : " . $c->nodeValue . "<br />";
     }



}



$names = $dom->getElementsByTagName('name');

foreach($names as $name){
    echo "<p>$name->nodeValue </p>";
}

