<?php
require_once 'database.php';
$i=0;
 foreach($foodTrucks as $key => $vendor)
 {

     //echo $_GET['id'];
      $id=$_GET['id'];
     if($i==$id) {
       //  var_dump($foodTrucks[$id]);
         echo "<li>" . $vendor['description'] ."<br/>". $vendor['region']."<br/>". $vendor['twitter']."</li>";

     }
     $i++;
 }