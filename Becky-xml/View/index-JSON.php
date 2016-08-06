<?php
require_once '../Model/database.php';
require_once 'header.php';

/*$truck_name = filter_input(INPUT_GET, 'truck_name', FILTER_VALIDATE_INT);
if ($truck_name == NULL || $truck_name == FALSE) {
    $truck_name = 1;
}*/
?>
    <main id="main" class="container">
        <div id="truckList"></div>
    </main>

    <aside id="sideNav" class="col-md-2">
        <div id="truckInfo"></div>
    </aside>

    <script>
        $(document).ready(function(){
            $.getJSON('../Model/getTruckList.php', function(data){
                var tks = "";
                $.each(data, function(index,truckList){

                    tks += '<a href="' + truckList.truckList + '">' + truckList.truckList + '</a>';
                })
                $('#truckList').html(tks);
            });

            $('#truckList').change(function(){
                var truck = $('#truckList').val();
                //alert ("truck name: " + truck);

                $.getJSON('model/getStaffsInDepartment.php',{tks : truck}, function (data) {

                    //console.log(data);

                    var result ="<ul>";
                    $.each(data, function(index,name){
                        //result += "<li>" + name.fname + "</li>";

                        result += "<li><a linkValue >" + name.fname + "</a></li>";
                    });
                    result += "</ul>";

                    $('#truckInfo').html(result);
                });
            })
        });
    </script>

<?php include_once 'footer.php' ?>