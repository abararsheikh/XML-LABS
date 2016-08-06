<?php
    require_once '../Model/database.php';
?>
<!doctype html>
<html lang="en">
<head>
    <title>Using cURL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="../css/bootstrap-image-gallery.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header id="header">

</header>
    <main id="gallery" class="container">
        <div id="links" class="row">
        <?php foreach($foodTrucks as $vendor){
            if(isset($vendor['images'])){
                foreach($vendor['images']['header'] as $photo) {
                    echo "<a href='" . $photo . "' title='" . $vendor['name'] . "' data-gallery><img class='col-lg-2 col-sm-4 col-xs-6 thumbnail nopadding' src='" . $photo . "' alt='" . $vendor['name'] . "' /></a>";
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
    </main>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="../js/bootstrap-image-gallery.min.js"></script>

<?php include_once 'footer.php' ?>