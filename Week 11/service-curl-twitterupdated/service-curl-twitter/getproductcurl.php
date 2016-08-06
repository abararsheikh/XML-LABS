<?php

//here we are getting week 11 PHP subject file
$url = "http://localhost/phptest/PHP_LABS/Week%2011/ajaxproductsupdate/getproducts.php";

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_TIMEOUT, 5);

$jsondata = curl_exec($curl);

$products = json_decode($jsondata,true); //it is json data ..Yes -true

//var_dump($products);
foreach ($products  as $product) {
    echo $product['category'] .  " : " . $product['productName'] . "<br />";
}