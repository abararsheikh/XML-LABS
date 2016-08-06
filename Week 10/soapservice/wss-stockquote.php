<?php 
class QuoteService { 
  private $quotes = array("ibm" => 98.82, "nt" => 234);   

  public function getQuote($symbol) { 
    if (isset($this->quotes[$symbol])) { 
      return $this->quotes[$symbol]; 
    } else { 
      throw new SoapFault("Server","Unknown Symbol '$symbol'."); 
    } 
  } 
} 

$server = new SoapServer("stockquote.wsdl"); 
$server->setClass("QuoteService"); 
$server->handle(); 
?> 
