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
$xml = <<<XML
<?xml version="1.0" encoding="iso-8859-1"?>
<keywords>
	<keyword status="live">XML</keyword>
	<keyword status="in progress">PHP</keyword>
	<keyword status="live">Perl</keyword>
	<keyword status="live">JavaScript</keyword>
	<keyword status="in progress">ASP</keyword>
</keywords>
XML;
$keywords = simplexml_load_string($xml);
echo '<ul>';
foreach ($keywords->keyword as $kw) {
	echo '<li>' . htmlentities($kw) . '</li>';
}
echo '</ul>';
?>
</body>
</html>