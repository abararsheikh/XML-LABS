<?php
   
  $client = new SoapClient("http://www.webservicex.net/ConvertWeight.asmx?wsdl");
 
  $weight = 1500;
  $fromUnit = "Grams";
  $toUnit = "Kilograms";
 
  // call method ConvertWeight with three parameters based on the wsdl schema
  $response = $client->ConvertWeight(array("Weight" => $weight,
                                           "FromUnit" => $fromUnit,
                                           "ToUnit" => $toUnit));
 
  // get the result, $weightResult will contains conversion result
  $weightResult = $response->ConvertWeightResult;
 
  echo "Weight Converter using SOAP web service<br/>";
  
  echo $weight . " " . $fromUnit . " = " . $weightResult . " " . $toUnit;
?> 
