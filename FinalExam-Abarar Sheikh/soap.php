<?php
//creating a soap client, wsdl file as argument
$client =  new SoapClient("http://alice.humber.ca/NithyaT/quoteService.asmx?WSDL");
$param = array("Author" =>"author 3","Source"=>"source 3","Text"=>"quote 3","Keyword"=>"Web 3");
$result = $client->GetQuoteFull($param);

$random= $result->GetQuoteFullResult;
foreach ($random as $key => $value){
    echo "<b>". $key ."</b>" ." : " . $value . "<br />";

}