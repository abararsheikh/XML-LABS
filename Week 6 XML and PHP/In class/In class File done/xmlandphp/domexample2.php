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
$doc->load("keyword-data2.xml");
$root = $doc->documentElement;
$keywords = $root->getElementsByTagName('keyword');
echo '<ul>';
foreach ($keywords as $kw) {
	echo '<li>' . htmlentities($kw->nodeValue) . ' (' . htmlentities($kw->getAttribute('status')) . ')</li>';
}
echo '</ul>';
?>
</body>
</html>