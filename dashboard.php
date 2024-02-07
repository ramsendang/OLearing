<?php require_once('./backend/component/header.php');?>
    
    <div class="container">
        <div class="row">
            <div class="col p-4">
                <h3>My Courses</h3>
            </div>
        </div>
        <div class="row">
        <?php 
        if($result->num_rows> 0){
            while($rows = $result->fetch_assoc()){
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>