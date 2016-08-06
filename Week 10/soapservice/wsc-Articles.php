<?php
   
$client = new SoapClient("http://alice.humber.ca/NithyaT/ArticleService.asmx?WSDL");

$result  = $client->getArticleDetails(array("artid" => 2));


$article = $result->getArticleDetailsResult;

foreach ($article as $key => $value){
    echo $key . " : " . $value . "<br />";
    
}
 
 
echo "<br /> Get all Articles <br />";
  
$response2 = $client->getArticles();
   
echo "<br />Response2 ";
 
$articles = $response2->getArticlesResult;


foreach($articles->articlescl as  $nn)
{
	echo $nn->Author . "<br />";
	echo $nn->Description . "<br />";
        
}

?> 
