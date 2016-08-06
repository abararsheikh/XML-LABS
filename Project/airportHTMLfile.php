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

        <div class="col-md-8">
            <img src="images/pickup.jpg" class="img-responsive" alt="Responsive image" id="banner">
            <div class="row">
                <div class="col-md-8">
                    <?php include 'airport.php'; ?>
                </div>

                    <div class="col-md-4">
                        <a href="./Place_details_API/place_details_api.html">
                            <img src="images/google_maps.gif" class="img-responsive" alt="Responsive image" id="googleMap">
                        </a>
                        <div id="googleTransit">
                            <a href="./Place_details_API/place_details_api.html">Get the Public Transit ></a>
                            <hr />
                        </div>
                        <!-- Begin WeatherLink Fragment -->
                        <iframe title="Environment Canada Weather" width="287px" height="191px" src="//weather.gc.ca/wxlink/wxlink.html?cityCode=on-82&amp;lang=e" allowtransparency="true" frameborder="0"></iframe>
                        <!-- End WeatherLink Fragment -->
                        Twitter:
                    </div>

            </div>

        </div>
        <div id="rssNews" class="col-md-4">
            <?php
            if(empty($result))
            {
                echo "Please wait..News loading soon !..";
            }
            else
            {
                echo $result;
            }

            ?>
        </div>
      </div>
   </div>
<!-- Second Row contain -Flight Table and News-->
    <div class="row">
        <div class="col-md-6">

            <?php include 'airport.php'; ?> <br>
            <p>Driving to Airport ! Need help in Length Converter</p>
            <?php include 'WSDL/LengthConvertor.php' ?>
        </div>

    </div>
</body>
</html>