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

 $doc->load("beaches.xml");    //then load your xml document(file)

$root = $doc->documentElement; //first get the root element of document


$body= $root->getElementsByTagName('beachData');
$sampleDate = $root->getElementsByTagName('sampleDate');
$publishDate = $root->getElementsByTagName('publishDate');
$eColiCount = $root->getElementsByTagName('eColiCount');
$beachAdvisory = $root->getElementsByTagName('beachAdvisory');
$beachStatus = $root->getElementsByTagName('beachStatus');

foreach ($body as $value){
    if ($value->getAttribute('beachId') == '0')
    {
        echo htmlentities($value->nodeValue). "<br />";
    }
    elseif($value->getAttribute('beachId') == '1')
    {
        echo htmlentities($value->nodeValue). "<br />";
    }
    elseif($value->getAttribute('beachId') == '3')
    {
        echo htmlentities($value->nodeValue). "<br />";
    }
    elseif($value->getAttribute('beachId') == '4')
    {
        echo htmlentities($value->nodeValue). "<br />";
    }
    elseif($value->getAttribute('beachId') == '5')
    {
        echo htmlentities($value->nodeValue). "<br />";
    }
    elseif($value->getAttribute('beachId') == '6')
    {
        echo htmlentities($value->nodeValue). "<br />";
    }
    elseif($value->getAttribute('beachId') == '7')
    {
        echo htmlentities($value->nodeValue). "<br />";
    }
    elseif($value->getAttribute('beachId') == '8')
    {
        echo htmlentities($value->nodeValue). "<br />";
    }
    elseif($value->getAttribute('beachId') == '9')
    {
        echo htmlentities($value->nodeValue). "<br />";
    }
    elseif($value->getAttribute('beachId') == '10')
    {
        echo htmlentities($value->nodeValue). "<br />";
    }
    elseif($value->getAttribute('beachId') == '11')
    {
        echo htmlentities($value->nodeValue). "<br />";
    }
}
/*
foreach ($sampleDate as $sampleDates)
{
     echo '<li>' .'Sample Date    :' . htmlentities($sampleDates->nodeValue)   . '</li>';
}
foreach ($publishDate as $publishDates)
{
    echo '<li>'.'publish Date    :' . htmlentities($publishDates->nodeValue)   . '</li>';
}

foreach ($eColiCount as $eColiCounts)
{
    echo '<li>'.'Ecoli Count    :' . htmlentities($eColiCounts->nodeValue)   . '</li>';
}
foreach ($beachAdvisory as $beachAdvisorys)
{
    echo '<li>'.'' . htmlentities($beachAdvisorys->nodeValue)   . '</li>';
}
foreach ($beachStatus as $beachStatuss)
{
    echo '<li>'.'' . htmlentities($beachStatuss->nodeValue)   . '</li>';
}
/*
echo '<ul>';
foreach ($keywords as $kw) {   //so here we ara printing only keyword element value ..not keyword1
    echo '<li>' . $kw->nodeName . "<br>". htmlentities($kw->nodeValue)   . '</li>';
 // echo  $kw->getElementsByTagName("sampleDate").childNodes[0].nodeValue;
}
echo '</ul>';
*/


?>
</body>
</html>