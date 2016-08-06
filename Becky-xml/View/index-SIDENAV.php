<?php
require_once 'database.php';
require_once 'header.php';

/*$truck_name = filter_input(INPUT_GET, 'truck_name', FILTER_VALIDATE_INT);
if ($truck_name == NULL || $truck_name == FALSE) {
    $truck_name = 1;
}*/
?>
    <main id="main" class="container">
        <div class="row">
            <aside id="sideNav" class="col-md-2">
                <!-- display all food truck names as link on right side -->
                <?php foreach($foodTrucks as $vendor) : ?>
                    <div id="">
                    <a href="getName.php?id=<?php echo $vendor['rating']; ?> "><?php echo $vendor['name']; ?></a><br/>
                    </div>
                <?php endforeach; ?>
            </aside>
        </div>
    </main>
<?php include_once 'footer.php' ?>

