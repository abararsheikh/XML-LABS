<?php

function startele($parser,$ename,$atts){
    echo "<h1> Start Element : " . $ename . "</h1>";
    foreach($atts as $att){
        echo " Attribute " . $att;
    }
}
function endele($parser, $ename){
    echo "<h1> End Element : " . $ename . "</h1>";
}
function ctext($parser, $data){
    echo "<h3>Data : $data</h3>";
}

$parser = xml_parser_create();

xml_set_element_handler($parser,'startele','endele');
xml_set_character_data_handler($parser,'ctext');


xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, false);

$fp = fopen('book.xml', 'r') or die("cannot open file");

while($data = fread($fp, 4096)){
    xml_parse($parser,$data, feof($fp));
}

xml_parser_free($parser);