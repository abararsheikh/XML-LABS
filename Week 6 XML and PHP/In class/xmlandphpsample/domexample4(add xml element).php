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
$doc = new DOMDocument();
$doc->preserveWhiteSpace = false;
$doc->load("keyword-data.xml");
$root = $doc->documentElement;
$keywords = $root->getElementsByTagName('keyword');
echo '<ul>';
foreach ($keywords as $kw) {
	echo '<li>' . htmlentities($kw->nodeValue) . '</li>';
}
echo '</ul>';

// Below code is creating XML new Element ..It's creating only ONE ELEMENT ..
//Dom is very powerfull property..using this you can create new element

$newKW = $doc->createElement('keyword', 'ABU');   //create keyword ELEMENT and pass the VALUE XSLT in it
//whenever you referesh the page it keps creating the new XML Element
$root->appendChild($newKW);         //Join this new element is as child in root existing xml file
$doc->formatOutput = true;
echo '<p>Updated XML source code:</p>';
echo '<pre>' . htmlentities($doc->saveXML()) . '</pre>';     // save as xml

$doc->save("keyword-data.xml");   // save into this xml file ..in output you can see XSLT element is added.
?>
</body>
</html>