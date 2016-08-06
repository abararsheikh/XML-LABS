<?php

//creating a soap client, wsdl file as argument
$client =  new SoapClient("http://www.webservicex.net/BibleWebservice.asmx?WSDL");

//all the argument to the method has to be in an array
// BibleWords is attribute of GetBookTitles method name atribute
$param = array("BibleWords" => "This web service list all books from the Kings James version Bible");


//call the method with the parameters
$result = $client->GetBookTitles($param);

//var_dump($result);

//capture the result using the correct property name
echo "Book is  " . $result->GetBookTitlesResultt ;