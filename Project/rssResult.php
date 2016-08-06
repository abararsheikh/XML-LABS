
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


    <!-- Second Row contain -Flight Table and News-->
    <div class="row">

        <?php echo "<div class='col-md-6'>" . $result . "</div>" ?>


<!--
        <div class="col-md-6">
            <a href ="<?php echo $result; ?>">Would you like to see Latest News !</a>

        </div>    -->
    </div>

    <!-- Third Row contain -Distance Convertor-->
    <div class="row">
        <div class="col-md-5">

        </div>

    </div>
</div>
</body>
</html>