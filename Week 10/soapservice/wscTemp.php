<?php

//creating a soap client, wsdl file as argument
$client =  new SoapClient("http://www.w3schools.com/xml/tempconvert.asmx?WSDL");

//all the argument to the method has to be in an array
$param = array("Fahrenheit" => 230);


//call the method with the parameters
$result = $client->FahrenheitToCelsius($param);

//var_dump($result);

//capture the result using the correct property name
echo "100 Fahrenheit is " . $result->FahrenheitToCelsiusResult . " Celsius<br />";


$client = new soapclient("http://www.w3schools.com/xml/tempconvert.asmx?WSDL");
	

$params = array ('Celsius' => '110');
$result = $client -> CelsiusToFahrenheit( $params);

//$result = $client->CelsiusToFahrenheit(array("Celsius"=>"100");

//prints to screen what comes back

$tempResult = $result->CelsiusToFahrenheitResult;

echo "110 Celsius is " . $tempResult  . " Fahrenheit<br />";;

print_r($result);



?>