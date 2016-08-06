<?php 

$client = new SoapClient("http://localhost:8081/formsandarrays/soapservice/wss-stockquote.php?wsdl");
$result = $client->getQuote("nt");


echo $result;

?> 

