<?php
    require_once '../Model/database.php';
    require_once 'header.php';

    $truck_name = filter_input(INPUT_GET, 'truck_name', FILTER_VALIDATE_INT);
    if ($truck_name == NULL || $truck_name == FALSE) {
        $truck_name = 1;
    }
?>
    <main id="main" class="container">
        <div class="row">
            <aside id="sideNav" class="col-md-2">
                <!-- display all food truck names as link on right side -->
                <?php foreach($foodTrucks as $key => $vendor) : ?>

<!-- THIS IS WHERE I CAN'T GET IT WORK... TO CATCH WHAT LINK CLICKED -->

                    <a href="?=truck_name=<?php echo $vendor['name']; ?>"><?php echo $vendor['name']; ?></a><br/>
                <?php endforeach; ?>
            </aside>
            <section id="main-content" class="col-md-10">
                <div id="foodTruck">


<!-- THIS IS WHERE I CAN'T GET IT WORK... TO CATCH WHAT LINK CLICKED -->

                    <!--want to check which key got click and launch only that truck info-->
                    <?php if($key == "$foodTruckName" ) : ?>
                        <!--load specific truck only-->




                        <?php foreach($foodTrucks as $vendor) : ?>
                            <h3><?php echo $vendor['name']; ?></h3>
                            <!--check if there's images before creating carousel coding-->
                            <?php if(isset($vendor['images'])) : ?>
                                <!--Bootstrap carousel start-->
                                <div id='myCarousel' class='carousel slide' data-ride='carousel'>
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <?php
                                        /*set i to catch index value*/
                                        $i = -1;
                                        foreach($vendor['images']['header'] as $photo){
                                            $i++;
                                            if($i == 0){
                                                echo "<li data-target='#myCarousel' data-slide-to='$i' class='active'></li>";
                                            }else {
                                                echo "<li data-target='#myCarousel' data-slide-to='$i'></li>";
                                            }
                                        }
                                        ?>
                                    </ol>
                                    <div class='carousel-inner' role='listbox'>
                                        <?php
                                        /*set i to catch index value*/
                                        $i = -1;
                                        foreach($vendor['images']['header'] as $photo){
                                            $i++;
                                            if($i == 0){
                                                echo "<div class='item active'>
                                                    <img src='" . $photo . "' />
                                              </div>";
                                            }else {
                                                echo "<div class='item'>
                                                    <img src='" . $photo . "' />
                                              </div>";
                                            }
                                        }?>
                                    </div>
                                </div>
                            <?php endif ?>
                            <!-- check description -->
                            <?php if(isset($vendor['description'])) : ?>
                                <p><?php echo $vendor['description']; ?></p>
                            <?php endif ?>
                            <!-- check rating -->
                            <?php if(isset($vendor['rating'])) : ?>
                                <p>Rating: <?php echo $vendor['rating']; ?><br/>
                                <!--check if any website url exist-->
                                <?php if(isset($vendor['url'])) : ?>
                                    <?php echo "Website: <a href='http://" . $vendor['url'] . "' target='_blank'>" . $vendor['url'] . "</a><br/>" ?>
                                <?php endif ?>
                                <!--check if any twitter account exist-->
                                <?php if(isset($vendor['twitter'])) : ?>
                                    <?php echo "Twitter: <a href='https://twitter.com/" . $vendor['twitter'] . "' target='_blank'>@" . $vendor['twitter'] . "</a>" ?>
                                <?php endif ?>
                            <?php endif ?>
                            </p>
                        <?php endforeach; ?>
                    <?php endif ?>
                </div>
            </section>
        </div>
    </main>
<?php include_once 'footer.php' ?>