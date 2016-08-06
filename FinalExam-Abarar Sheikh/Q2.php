
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Keyword Listing</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>City of Toronto Beaches</h1>
<?php
$doc = new DOMDocument();     //first create dome object
$doc->preserveWhiteSpace = false; //By default it has (accept) white spaces so remove the white spaces

$doc->load("beaches.xml");
$i=0;
while(is_object($beach = $doc->getElementsByTagName("body")->item($i)))
{
    foreach($beach->childNodes as $nodename)
    {
        if($nodename->nodeName=='beachData')
        {
            foreach($nodename->childNodes as $subNodes)
            {
            echo $subNodes->nodeName." : ".$subNodes->nodeValue."<br>";
                echo "\n";
            }
        }

    }
$i++;
}
?>