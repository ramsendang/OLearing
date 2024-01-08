<?php
    require_once('./frontend/component/header.php');
    require_once('./database/connection.php');
    require('showCourseController.php');
?>
<div class="row">
    <div class="col-md-12">
    <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./frontend/src/images/banner3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="./frontend/src/images/banner2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="./frontend/src/images/banner1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    </div>
</div>

<div class="container">
    <div class="row testemonial">
        <div class="row p-5 test_heading">
            <p class="text-center">Trusted by over 500 comapnies and hundreed of thousand around the world</p>
        </div>
        <div class="row p-4">
            <div class="col-md-2">
                <img src="./frontend/src/images/testomonial/amazon.png" alt="" class="test-logo-css">
            </div>
            <div class="col-md-2">
                <img src="./frontend/src/images/testomonial/facebook.png" alt="" class="test-logo-css">
            </div>
            <div class="col-md-2">
                <img src="./frontend/src/images/testomonial/google.png" alt="" class="test-logo-css">
            </div>
            <div class="col-md-2">
                <img src="./frontend/src/images/testomonial/microsoft.png" alt="" class="test-logo-css">
            </div>
            <div class="col-md-2">
                <img src="./frontend/src/images/testomonial/udemy.png" alt="" class="test-logo-css"> 
            </div>
            <div class="col-md-2">
                <img src="./frontend/src/images/testomonial/yahoo.png" alt="" class="test-logo-css">
            </div>
        </div>
    </div>
 
    <!-- For courses tabs menue according to category  -->
    
    <div class="row">
        <div class="tabs-container d-flex py-4 bg-secondary">
            <?php 
                $categories = getAllCategories($conn);
                if($categories->num_rows>0){
                    while($row = $categories->fetch_assoc()){
                    ?>
                    <div class="tab mx-2 btn btn-primary" data-tab="<?php echo $row["categoryName"].'_id'; ?>"><?php echo $row["categoryName"];?></div>
                    <?php
                    }
                }else{
                    echo "failed";
                }
            ?>
        </div>
    </div>
    <?php 
         $categories1 = getAllCategories($conn);
        if($categories1->num_rows>0){
            while($row_category = $categories1->fetch_assoc()){
                ?>
                <div class="tab-content row py-4 bg-secondary" id="<?php echo $row_category['categoryName'].'_id'; ?>">
                    <div class="row d-flex">
                    <?php
                        $categoryId = $row_category["id"];
                        $course = getCourseByCategory($categoryId, $conn);
                        if($course->num_rows>0){
                            while($row_course = $course->fetch_assoc()){
                                ?>
                                    <div class="col-3 py-3">
                                        <div class="card">
                                            <img src="<?php echo $row_course["courseImagePath"];?>" alt="" class="carg-img-top" style="width: 100%; height:150px; min-height:150px;">
                                            <div class="card-body" style="min-height: 250px;">
                                                <a class="card-title" href="courseDetails.php?data=<?php echo urlencode($row_course['course_id']);?>"><?php echo $row_course["courseName"]; ?></a>
                                                <p class="card-text">Ram Sendang</p>
                                                <p><span>4.6</span>⭐⭐⭐⭐⭐</p>
                                                <p class="card-text">£ <?php echo $row_course['price']?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            }
                        }
                    ?>
                    </div>
                </div>
                <?php
            }
          }else{
            echo "failed";
          }
    ?>
    <div class="row py-4">
        <div class="row py-4">
            <div class="col"><h3>Top Categories</h3></div>
        </div>
        <div class="row">
            <?php 
                $categories2 = getCategories($conn);
                if($categories2->num_rows>0){
                    while($row_category = $categories2->fetch_assoc()){
                        ?>
                        <div class="col-3">
                            <div class="card my-2">
                                <div class="card-body">
                                    <a href="courseByCategory.php?data=<?php echo urlencode($row_category['id']);?>" class="card-title text-decoration-none"><?php echo $row_category['categoryName'] ?></a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                  }else{
                    echo "failed";
                  }
            ?>
            
        </div>
    </div>
</div>















<?php
require_once('./frontend/component/footer.php');
?>