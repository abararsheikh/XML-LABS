<?php

$dom = new DOMDocument('1.0');

$notes = $dom->createElement("notes");
$notes->setAttribute('id', "a1");

$dom->appendChild($notes);

$note = $dom->createElement("note","PHP XML");

$notes->appendChild($note);

$dom->save('notes.xml');

echo "file created";

