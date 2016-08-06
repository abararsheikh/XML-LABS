<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Keyword Listing</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php
function start_element($parser, $element_name, $element_attrs) {
	switch ($element_name) {
		case 'KEYWORDS':
		echo '<h1>Keywords</h1><ul>';
		break;

		case 'KEYWORD':  //Here it checks element is keyword then print only ..<li> list item
		echo '<li>';    //Here i am printing list items
		break;
	}
}
function end_element($parser, $element_name) {
	switch ($element_name) {
		case 'KEYWORDS':
		echo '</ul>';           //if end elemt is this then close ul
		break;

		case 'KEYWORD':   //if end elemt is this then close list item
		echo '</li>';
		break;
	}
}
function character_data($parser, $data) {
	echo htmlentities($data);       // we are printing th elemet's value using this data function
}


$parser = xml_parser_create();
xml_set_element_handler($parser, 'start_element', 'end_element');
xml_set_character_data_handler($parser, 'character_data');


$fp = fopen('keyword-data.xml', 'r') or die ("Cannot open keyword-data.xml!");


while ($data = fread($fp, 4096)) {
	xml_parse($parser, $data, feof($fp))
		or die(sprintf('XML ERROR: %s at line %d',
			xml_error_string(xml_get_error_code($parser)),
			xml_get_current_line_number($parser)));
}
xml_parser_free($parser);
?>
</body>
</html>