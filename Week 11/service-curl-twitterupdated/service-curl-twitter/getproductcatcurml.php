<?php


$gdata = ['cat' => 'Drums'];  //as a input i m passing this into URL because we r using PHP subject Example
$query = http_build_query($gdata);
                                                  //here after .php ? we are putting ? becaue
//we are getting query from table and in that query we are passing categoryID which is on post request that
//we don't get it here so that we are passing here as a parameter which is $query
$url="http://localhost:63342/phptest/XML_LABS/XML-final-April25-v1/XML-final-April25-v1/View/index-SHOWALL.php?" . $query;

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$jsonresult = curl_exec($curl);

$result = json_decode($jsonresult);
//var_dump($result);
foreach ($result  as $product) {
    echo $product->category .  " : " . $product->productName . "<br />";
}


//here we are accesing $product through OBJECT so we take -> $product->category .not as an array $product['category']
//if you want to use an array then follow it's same as getproductcurl.php example

/*
$result = json_decode($jsonresult,true);

foreach ($result  as $product) {
    echo $product['category'] .  " : " . $product['productName'] . "<br />";
}
*/