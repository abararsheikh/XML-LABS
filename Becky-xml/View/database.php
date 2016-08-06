<?php

    // This page uses cURL to post data to a Web service.
    // Identify the URL:
    $url = "http://data.streetfoodapp.com/1.1/schedule/toronto/";
    // Start the process:
    $curl = curl_init($url);
    // Assign the returned data to a variable:
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    // Set the timeout:
    curl_setopt($curl, CURLOPT_TIMEOUT, 5);
    // Execute the transaction:
    $jsondata = curl_exec($curl);

    $foodTrucksInfo = json_decode($jsondata, true);

   $foodTrucks = $foodTrucksInfo['vendors'];
//header("Content-type: text/xml");
//echo $foodTrucks;

    // Close the connection:
    curl_close($curl);