<?php

$dom  = new DOMDocument();

$dom->load('songext.xml');
if($dom->validate()){
    echo "This is valid";
}
else{
    echo "not valid";
}