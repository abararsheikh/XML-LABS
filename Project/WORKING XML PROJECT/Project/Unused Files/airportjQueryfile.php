<?php header('Access-Control-Allow-Origin: *'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Airport</title>
    <style>
        table,th,td
        {
            border : 1px solid black;
            border-collapse: collapse;
        }
        th,td
        {
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
<h3 style="color: red">Only one hit per 50 seconds is allowed against this page.</h3>
<h2>Click on a Flight Number to display Flight Information.</h2>
<h1>Flight Details</h1>
<span style="font-size: 18px;color: #61966C">
<p id='showFlight'></p>
</span>
<table id="flightInfo"></table>
<!--
<div>
    <b>FlightNumber:</b> <span id="fNumber"></span><br>
    <b>Flight Date:</b> <span id="fDate"></span><br>
    <b>Arrival Or Departure:</b> <span id="fArrDpr"></span><br>
    <b>Via Airport City:</b> <span id="fVia"></span><br>
    <b>Via Airport Code:</b> <span id="viaCode"></span>
</div>
-->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
    // use not2.html Example

    $(document).ready(function() {
        $.get("air.php", function (data) {

            // you can take anything instead data ..

            $("#flightInfo").html("");  // this is same as element.innerHtml
            $(data).find("Header").each(function () {
                var xmlDoc = $(this);
                console.log(xmlDoc);
                $("#flightInfo").append("<h3>" +
                        //xmlDoc.attr('genre') + "<br>" +
                    xmlDoc.find("HostAirportCode").text() + "</h3>" +
                    xmlDoc.find("FlightNumber").text() + "<br>" +
                    xmlDoc.find("FlightDate").text() + "<br>" +
                    xmlDoc.find("AirlineCode").text() + "<br>");


            });

        }, "xml");;
    });
    //var xmlDoc = xmlhttp.responseXML;
  //  xmlhttp.send(null);

    //get the response

    var FlightData = xmlDoc.getElementsByTagName("Header");
    //console.log(FlightData);
    table="<tr><th>FlightNumber</th><th>Arrival || Departure</th></tr>";

    for (i = 0; i < FlightData.length; i++)
    {
        table += "<tr onclick='displayFlight(" + i + ")'><td>";
        /*
         document.getElementById("fNumber").innerHTML += xmlDoc.getElementsByTagName("FlightNumber")[i].childNodes[0].nodeValue;
         // var date = xmlDoc.getElementsByTagName("FlightDate")[0].childNodes[0].nodeValue;
         //  var d = new Date(date).toISOString();
         //  console.log(d);
         document.getElementById("fDate").innerHTML += xmlDoc.getElementsByTagName("FlightDate")[i].childNodes[0].nodeValue;
         document.getElementById("fArrDpr").innerHTML += xmlDoc.getElementsByTagName("ArrivalOrDeparture")[i].childNodes[0].nodeValue;

         document.getElementById("fVia").innerHTML += xmlDoc.getElementsByTagName("ViaAirportCity")[i].childNodes[0].nodeValue;
         document.getElementById("viaCode").innerHTML += xmlDoc.getElementsByTagName("ViaAirportCode")[i].childNodes[0].nodeValue;
         */

        table +=FlightData[i].getElementsByTagName("FlightNumber")[0].childNodes[0].nodeValue;
        table += "</td><td>";
        table +=FlightData[i].getElementsByTagName("ArrivalOrDeparture")[0].childNodes[0].nodeValue;
        //  table += "</td><td>";
    }

    document.getElementById("flightInfo").innerHTML = table;
    function displayFlight(i){
        document.getElementById("showFlight").innerHTML =
            "<span style='font-weight: bold'>FlightNumber : </span>" + FlightData[i].getElementsByTagName("FlightNumber")[0].childNodes[0].nodeValue +
            "<br><span style='font-weight: bold'>Host Airport City (origin): </span>" + FlightData[i].getElementsByTagName("HostAirportCity")[0].childNodes[0].nodeValue +
            "<br><span style='font-weight: bold'>Destination City (To):</span> " + FlightData[i].getElementsByTagName("Comments")[0].childNodes[0].nodeValue +
            "<br><span style='font-weight: bold'>Flight Date :</span> " + FlightData[i].getElementsByTagName("FlightDate")[0].childNodes[0].nodeValue +
            "<br><span style='font-weight: bold'>Arrival Or Departure :</span> " + FlightData[i].getElementsByTagName("ArrivalOrDeparture")[0].childNodes[0].nodeValue +
            "<br><span style='font-weight: bold'>Via Airport City :</span> " + FlightData[i].getElementsByTagName("ViaAirportCity")[0].childNodes[0].nodeValue +
            "<br><span style='font-weight: bold'>Status (OnTime or delayed) :</span> " + FlightData[i].getElementsByTagName("Status")[0].childNodes[0].nodeValue +
            "<br><span style='font-weight: bold'>Via Airport Code :</span> " + FlightData[i].getElementsByTagName("ViaAirportCode")[0].childNodes[0].nodeValue +
            "<br><span style='font-weight: bold'>Estimated Time :</span> " + FlightData[i].getElementsByTagName("EstimatedTime")[0].childNodes[0].nodeValue +
            "<br><span style='font-weight: bold'>Airline Code :</span> " + FlightData[i].getElementsByTagName("AirlineCode")[0].childNodes[0].nodeValue +
            "<br><span style='font-weight: bold'>Server UTC Time :</span> " + FlightData[i].getElementsByTagName("ServerUTCTime")[0].childNodes[0].nodeValue ;

    }
</script>
</body>
</html>