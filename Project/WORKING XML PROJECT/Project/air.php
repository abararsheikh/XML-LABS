<?php
$url = "http://xmlfltdata.ifids.com/ifids/EDIAirportXMLData.asp?apt=YKF&pwd=mk37";
// Start the process:
$curl = curl_init($url);
// Assign the returned data to a variable:
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// Set the timeout:
//curl_setopt($curl, CURLOPT_TIMEOUT, 5);
$getData = curl_exec($curl);
//$data = json_decode($getData);
//var_dump($data);
//$r = json_encode($data);
//var_dump($r);

header("Content-type: text/xml");
echo $getData;
//echo $data;
//foreach($r['Header'] as $flightData)
//{
   // echo $flightData['FlightNumber'] ;
//}