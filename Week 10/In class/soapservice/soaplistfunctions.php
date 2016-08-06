<?php

$client = new soapclient("http://alice.humber.ca/NithyaT/ArticleService.asmx?WSDL");
var_dump($client->__getFunctions());

echo "<br /><br />get types";

var_dump($client->__getTypes());

/*

$client = new soapclient("http://www.w3schools.com/xml/tempconvert.asmx?WSDL",  array('trace' => 1));

$params = array ('Celsius' => '110');
$result = $client -> CelsiusToFahrenheit( $params);


//__getLastRequest()
echo "<h2>Response</h2>\n<pre>" . htmlspecialchars($client->__getLastRequest()) . "</pre>\n";


//__getLastResponse()
echo '<h2>Response</h2><pre>' . htmlspecialchars($client->__getLastResponse()) . '</pre>';


//__getLastRequestHeaders()
echo '<h2>__getLastRequestHeaders()</h2><pre>' . htmlspecialchars($client->__getLastRequestHeaders()) . '</pre>';



*/
?> 


