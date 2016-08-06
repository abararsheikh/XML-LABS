<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Keyword Listing</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Keywords</h1>
<?php
$doc = new DOMDocument();     //first create dome object
$doc->preserveWhiteSpace = false; //By default it has (accept) white spaces so remove the white spaces

$doc->load("keyword-data.xml");    //then load your xml document(file)

$root = $doc->documentElement; //first get the root element of document


$keywords = $root->getElementsByTagName('keyword'); // it is same as document.getElementByID in javascript
                                        //if i say here keyword1 then it gives ASP values
//this one gives me an array so i have to use foreach loop to take the elements what ever i want

echo '<ul>';
foreach ($keywords as $kw) {   //so here we ara printing only keyword element value ..not keyword1
	echo '<li>' . $kw->nodeName . "--". htmlentities($kw->nodeValue)   . '</li>';
}
echo '</ul>';
?>
</body>
</html>