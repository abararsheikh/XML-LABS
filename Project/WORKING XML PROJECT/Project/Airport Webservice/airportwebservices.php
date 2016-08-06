<?php
echo "Send unlimited free SMS to India - Maximum message size is 120 characters";
$client = new SoapClient("http://www.webservicex.net/SendSMS.asmx?WSDL");
//all the argument to the method has to be in an array
$param = array("MobileNumber" => 7359933534,"FromEmailAddress"=>"er.abrar@gmail.com","Message"=>"How are you!!");


//call the method with the parameters
$result = $client->SendSMSToIndia($param);

var_dump($result);
//capture the result using the correct property name
$article = $result->SendSMSToIndiaResult ;

foreach ($article as $key => $value){
    echo $key . " : " . $value . "<br />";

}