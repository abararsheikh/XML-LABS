<?php

$dom  = new DOMDocument();

$dom->load('internalmemo.xml');
if($dom->validate()){
    echo "This is valid";
}
else{
    echo "not valid";
}