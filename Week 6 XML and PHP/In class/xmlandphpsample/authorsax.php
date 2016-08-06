<?php

// step 2
// Here start element author has attribute so took attribute parameter or we can set attributr in first eleemnt
function start_element($parser,$name,$attribute)
{
    echo "start element  ".$name. "<br>";

    // This is for your attribute if you want to print attribute

    foreach($attribute as $att){
        echo " Attribute " . $att;
    }

}
function end_element($parser,$name)   //end element always have end tag ..no attribute
{
   //echo "End element  ".$name. "<hr>";
}
function character_data($parser,$data)
{
    echo $data;
}

// step 1

$parser = xml_parser_create();
xml_set_element_handler($parser,'start_element','end_element');  //define this method above
xml_set_character_data_handler($parser,'character_data');    //write about this method above

//xml_parser_set_option($parser,XML_OPTION_CASE_FOLDING,false);  // By default SAX makes every element Upper Case
                                                                 //so you can turn it off by this command

// step 3

// open your xml file..r=read..read your xml file and if it is not able to then die the file
$fp = fopen('authors.xml','r') or die("can not open authors.xml");

while($data = fread($fp,4096))  //4096 is reading one chunk of file at a time.if you have very long file then it reads
// chunk of file at a time .the maximum size that the it can read
{
    xml_parse($parser,$data,feof($fp)); // if it reaches end of the file then stops
}
xml_parser_free($parser);