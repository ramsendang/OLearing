<?php 
require_once('backend/component/header.php');
require_once('backend/component/d_course__sidebar.php');
?>
    <div class="col-10">
        <div class="row p-4">
            <?php 
            if($result1->num_rows> 0){
                while($rows = $result1->fetch_assoc()){
                    ?>
                    <div class="col-lg-4 mr-4 p-2">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $rows["courseImagePath"];?>" class="" style="height: 80px!important; width: 200px!important;" alt="course_image_alt">
                            <div class="card-body" style="min-height: 250px;">
                                <h5 class="card-title"><?php echo $rows["courseName"];?></h5>
                                <p class="card-text"><?php echo $rows["courseDescription"];?></p>
                                <p class="card-text">£ <?php echo $rows["price"];?></p>
                                <a href="deleteCourse.php?data=<?php echo urlencode($rows['course_id']);?>" class="btn btn-primary">Delete</a>
                                <a href="courseDetails.php?data=<?php echo urlencode($rows['course_id']);?>" class="btn btn-primary">View</a>
                            </div>
                        </div>
                    </div>
                    <?php
                };
            }
    ?>
        </div>
    </div>
</div>