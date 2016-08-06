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


$keywords = simplexml_load_file('keyword-data.xml');


var_dump($keywords);

echo '<ul>';
foreach ($keywords->keyword as $kw) {
	echo '<li>' . htmlentities($kw) . '</li>';
}
echo '</ul>';
?>
</body>
</html>