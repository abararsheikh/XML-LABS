<?php

// xml_teams_dom.php

// create the new XML document
$dom = new DOMDocument('1.0', 'iso-8859-1');

// create the root element
$list_of_teams = $dom->createElement('teams');
$dom->appendChild($list_of_teams);

// create the first team element
$team = $dom->createElement('team');
$list_of_teams->appendChild($team);

// now create all the subelements for the team
$name = $team->appendChild($dom->createElement('name'));
$name->appendChild($dom->createTextNode('Atlanta Braves'));

$stadium = $team->appendChild($dom->createElement('stadium'));
$stadium->appendChild($dom->createTextNode('Turner Field'));

$league = $team->appendChild($dom->createElement('league'));
$league->appendChild($dom->createTextNode('National'));

// create the second team element
$team = $dom->createElement('team');
$list_of_teams->appendChild($team);

// now create all the subelements for the second team
$name = $team->appendChild($dom->createElement('name'));
$name->appendChild($dom->createTextNode('Chicago Cubs'));

$stadium = $team->appendChild($dom->createElement('stadium'));
$stadium->appendChild($dom->createTextNode('Wrigley Field'));

$league = $team->appendChild($dom->createElement('league'));
$league->appendChild($dom->createTextNode('National'));

$xml_result = $dom->saveXML();
//$dom->save("team2.xml");
// simple mechanism to see the XML

print <<<XML_SHOW
$xml_result
XML_SHOW;

?>
