<?php
   
  $client = new SoapClient("http://www.webservicex.net/ConvertWeight.asmx?wsdl");
 
  $weight = 1500;
  $fromUnit = "Grams";
  $toUnit = "Kilograms";
 
  // call method ConvertWeight with three parameters based on the wsdl schema
  $response = $client->ConvertWeight(array("Weight" => $weight,
                                           "FromUnit" => $fromUnit,    //or you can store these all in $param then just pass $paaram
                                           "ToUnit" => $toUnit));

var_dump($response);
 
  // get the result, $weightResult will contains conversion result
  $weightResult = $response->ConvertWeightResult;
//we are not using foreach loop because it has only one value we have defned above..if it's taking whole part then we have to use array to take one by one element.

  echo "Weight Converter using SOAP web service<br/>";
  
  echo $weight . " " . $fromUnit . " = " . $weightResult . " " . $toUnit;
?> 
