<?php
require_once '../Model/database.php';
require_once '../View/header.php';

   //$i=1;
    foreach($foodTrucks as $vendor)
    {
        $rating= $vendor['email'];
      // $arr = explode(",", $rating);
       // $numericOnlyArray = array_filter($arr,'is_numeric');

      //  var_dump($numericOnlyArray);


        //echo $_GET['id'];
        $id=$_GET['email'];
       // var_dump($rating,$id) ;
        if(array_search($id,$rating)) {
            //  var_dump($foodTrucks[$id]);
            echo "<h3>" . $vendor['name'] . "</h3>";
            echo "<div id='myCarousel' class='carousel slide' data-ride='carousel'>";
            echo "    <div class='carousel-inner' role='listbox'>";
            echo "        <div class='item active'>";
            echo "            <img src='" . $vendor['images']['header'][0] . "' alt='" . $vendor['name'] . "'>";
            echo "        </div>";
            echo "    </div>";
            echo "</div>";
            echo "<p>" . $vendor['description'] . "</p>";
            echo "<p>Rating: " . $vendor['rating'] . "<br/>";
            echo "Website: <a href='http://" . $vendor['url'] . "' target='_blank'>" . $vendor['url'] . "</a><br/>";
            echo "Twitter: @<a href='https://twitter.com/" . $vendor['twitter'] . "' target='_blank'>" . $vendor['twitter'] . "</a><br/>";
            echo "</p>";


        }
     //   $i++;
    }

?>

