<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Using cURL</title>
 </head>
<body>
<h2>cURL Results:</h2>
<?php 
// This page uses cURL to post data to a Web service.
 
// Identify the URL:
//$url = 'http://localhost:8081/xmljson/service-curl/service.php';
//$url ='http://localhost:63342/phptest/XML_LABS/Week%2011/service-curl-twitter/service.php';
$url = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/service.php";
// Start the process:
$curl = curl_init($url);   

//used to setup any option for the request
//there are  many options 


// Assign the returned data to a variable:
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

// Set the timeout:
curl_setopt($curl, CURLOPT_TIMEOUT, 5);

// Set the POST data:

//curl_setopt($curl, CURLOPT_POSTFIELDS, 'name=foo&pass=bar&format=json');
$qdata = ['name' => 'foo','pass'=> 'bar', 'format' => 'csv'];
$query = http_build_query($qdata);
curl_setopt($curl, CURLOPT_POSTFIELDS, $query);
// Execute the transaction:
$json_data = curl_exec($curl);

// Close the connection:
curl_close($curl);

// Print the results:
print_r($json_data);
$data = json_decode($json_data);
var_dump($data);
////
//$r = json_encode($data);
////
//var_dump($r);

?>
</body>
</html>