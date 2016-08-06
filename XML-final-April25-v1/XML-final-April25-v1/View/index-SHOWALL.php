<?php
    require_once '../Model/database.php';
    require_once 'header.php';
?>
    <main id="main" class="container">
        <div class="row">
            <section id="main-content" class="col-md-10">
                <h1>Food Trucks Around Toronto!!!</h1>
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
            </section>
            <aside id="sideNav" class="col-md-2">
                <!-- display all food truck names as link on right side -->
                <?php foreach($foodTrucks as $key=> $vendor) : ?>
                    <div id="">
                        <a href="../Controller/getTruckName.php?email=<?php echo $vendor['email']; ?>"><?php echo $vendor['name']; ?></a><br/>
                    </div>
                <?php endforeach; ?>
            </aside>
        </div>
    </main>
<?php include_once 'footer.php' ?>