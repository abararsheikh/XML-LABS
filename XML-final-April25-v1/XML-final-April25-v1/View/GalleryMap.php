<?php
require_once '../Model/database.php';

$truckLoc = "";

foreach($foodTrucks as $vendor){
    if(isset($vendor['last'])){
        $truckLoc .= '["' . $vendor["name"] . '", ' . $vendor["last"]["latitude"] . ', ' . $vendor["last"]["longitude"] . ', "www.' . $vendor["url"] . '"],';
    }

}

//var_dump($truckLoc)
?>
<!doctype html>
<html lang="en">
<head>
    <title>Google Maps Multiple Markers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="../css/bootstrap-image-gallery.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
</head>
<body>
    <header id="header">

    </header>
    <main>
        <section id="map" style="height: 400px; width: auto;">

        </section>
        <section id="gallery">
            <div id="links" class="row">
                <?php foreach($foodTrucks as $vendor){
                    if(isset($vendor['images'])){
                        foreach($vendor['images']['header'] as $photo) {
                            echo "<a href='" . $photo . "' title='" . $vendor['name'] . "' data-gallery><img class='col-lg-1 col-sm-4 col-xs-6 thumbnail nopadding' src='" . $photo . "' alt='" . $vendor['name'] . "' /></a>";
                        }
                    }
                }?>
            </div>
            <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
            <div id="blueimp-gallery" class="blueimp-gallery" data-use-bootstrap-modal="false">
                <!-- The container for the modal slides -->
                <div class="slides"></div>
                <!-- Controls for the borderless lightbox -->
                <h3 class="title"></h3>
                <a class="prev">‹</a>
                <a class="next">›</a>
                <a class="close">×</a>
                <a class="play-pause"></a>
                <ol class="indicator"></ol>
                <!-- The modal dialog, which will be used to wrap the lightbox content -->
                <div class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"></h4>
                            </div>
                            <div class="modal-body next"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left prev">
                                    <i class="glyphicon glyphicon-chevron-left"></i>Previous
                                </button>
                                <button type="button" class="btn btn-primary next">Next
                                    <i class="glyphicon glyphicon-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="../js/bootstrap-image-gallery.min.js"></script>

    <!--Google map setting-->
    <script type="text/javascript">
        var locations = [
            <?php echo $truckLoc ?>
        ];
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 8,
            center: new google.maps.LatLng(43.70049, -79.41790),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    </script>

<?php include_once 'footer.php' ?>