<?php
$books = simplexml_load_file("book.xml");

var_dump($books);

foreach($books->book as $b){
    echo "Title : " . $b->title . "::" . $b->title['long'] . "<br />";
                                         //grab the attribute of the title element
}


$authors = simplexml_load_file("authors.xml");

$author= $authors->xpath('author[@id=2]');

foreach($author as $a){
    echo $a->name . "<br />";
    echo $a->email . "<br />";
}


