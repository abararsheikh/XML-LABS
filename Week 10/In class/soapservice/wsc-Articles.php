<?php
   
$client = new SoapClient("http://alice.humber.ca/NithyaT/ArticleService.asmx?WSDL");
/*
$params= ['artid' => 1];

$result = $client->getArticleDetails($params)->getArticleDetailsResult;

var_dump($result);

echo "Author: " . $result->Author;
echo "<br />Description: " . $result->Description;

*/

$result  = $client->getArticleDetails(array("artid" => 2));

var_dump($result);
$article = $result->getArticleDetailsResult;  //here response is in array articlescl and it has more attaribuets
var_dump($article);

foreach ($article as $key => $value){
    echo $key . " : " . $value . "<br />";
    
}

 
echo "<br /> Get all Articles <br />";
  
$response2 = $client->getArticles();   // doesn't take any param becuase you can see in WSDL it doesn't have
   
echo "<br />Response2 ";
 
$articles = $response2->getArticlesResult;   //result store in array //you can see result type is tns:ArrayOfArticlescl
                                             //which points to method and it takes name-articlescl and it has ID,TITLE,Authot,descripton and publish date you can print any thing
//var_dump($articles);
foreach($articles->articlescl as  $nn)
{
	echo $nn->Author . "<br />";
	echo $nn->Description . "<br />";
   // echo $nn->DatePublished . "<br />";
        
}

?> 
