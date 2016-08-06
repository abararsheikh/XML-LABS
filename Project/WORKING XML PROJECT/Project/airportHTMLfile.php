<?php
    $xsldoc = new DOMDocument();
    $xsldoc->load('KitchnerRSS/rssKitchner.xsl');

    $xmldoc = new DOMDocument();
    $xmldoc->load('http://www.cbc.ca/cmlink/rss-canada-kitchenerwaterloo');
// here i am giving link to XML file, not downloading and attaching them
// go to cbc.cs -> rss -> open any one xml file and copy and pest it's url here
    $xsl = new XSLTProcessor();
    $xsl->importStyleSheet($xsldoc);
    $result = $xsl->transformToXML($xmldoc);

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Kitchner Airport</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/style.css" rel="stylesheet">
</head>
<body>

<div class="container">

    <h1 style="text-align: center">Welcome to the Kitchner Airport</h1>
    <div class="row">

        <div class="col-md-9">
            <img src="images/pickup.jpg" class="img-responsive" alt="Responsive image" id="banner">
        </div>
        <div class="slider">
            <div class="col-md-3">
                <a href="./Place_details_API/place_details_api.html">
                    <img src="images/google_maps.gif" class="img-responsive" alt="Responsive image" id="googleMap">
                </a>

            <div id="googleTransit">
                <a href="./Place_details_API/place_details_api.html">Get the Public Transit ></a>
                <hr />
            </div>
            <div>
                <!-- Begin WeatherLink Fragment -->
                <iframe title="Environment Canada Weather" width="287px" height="191px" src="//weather.gc.ca/wxlink/wxlink.html?cityCode=on-82&amp;lang=e" allowtransparency="true" frameborder="0"></iframe>
                <!-- End WeatherLink Fragment -->
            </div>
                <div id="googleTransit">
                    <a href="twitter/twitterAPI.php">Connect with Twitter <img src="images/twitter.png" id="twitterPic"></a>
                </div>
          </div>
      </div>
    </div>
<!-- Second Row contain -Flight Table and News-->
    <div class="row">
        <div class="col-md-6">

            <?php include 'airport.php'; ?> <br>
            <p><a href="WSDL/LengthConvertor.php">Driving to Airport ! Need help in Length Converter</a></p>

        </div>
        <div class="col-md-6" id="headerH">
            <?php
            if(empty($result))
            {
                echo "Please wait..News is loading !..";
            }
            else
            {
                echo $result;
            }

            ?>
        </div>
    </div>
 <!-- Third Row contain -Distance Convertor-->
    <div class="row">
        <div class="col-md-6">

        </div>

    </div>
</div>
</body>
</html>