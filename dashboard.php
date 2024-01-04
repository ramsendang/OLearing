<?php 
session_start();
require_once('./database/connection.php');
require_once('showCourseController.php');
require_once('fcategory.php');
$user_id = $_SESSION['user_id'];
$result = getCourse($user_id, $conn);
$result1 = getCourse($user_id, $conn);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Dashboard</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Courses</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#category-tab-pane" type="button" role="tab" aria-controls="category-tab-pane" aria-selected="false">Categories</button>
        </li>
        <li class="nav-item" role="presentation">
            <a href="./index.php" class="btn">Home</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
             <div class="container">
                <div class="row d-flex g-3">
                    <div class="col-12 p-4">
                        <h3>My Courses</h3>
                    </div>
                    <?php 
                            if($result->num_rows> 0){
                                while($rows = $result->fetch_assoc()){
                                    ?>
                                    <div class="col-lg-4 mr-4">
                                        <div class="card" style="width: 18rem;">
                                            <img src="<?php echo $rows["courseImagePath"];?>" class="" style="height: 80px!important; width: 200px!important;" alt="course_image_alt">
                                            <div class="card-body" style="min-height: 250px;">
                                                <h5 class="card-title"><?php echo $rows["courseName"];?></h5>
                                                <p class="card-text"><?php echo $rows["courseDescription"];?></p>
                                                <p class="card-text">£ <?php echo $rows["price"];?></p>
                                                <a href="#" class="btn btn-primary">Delete</a>
                                                <a href="#" class="btn btn-primary">View</a>
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
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <div class="d-flex align-items-start">
                <div class="col-1 nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">All courses</button>
                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Add courses</button>
                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
                </div>
                <div class="col-11 tab-content" id="v-pills-tabContent">
                    <!---------All course----------->
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                        <div class="col-12 d-flex g-3 p-4">
                            <?php 
                            if($result1->num_rows> 0){
                                while($rows = $result1->fetch_assoc()){
                                    ?>
                                    <div class="col-lg-4 mr-4">
                                        <div class="card" style="width: 18rem;">
                                            <img src="<?php echo $rows["courseImagePath"];?>" class="" style="height: 80px!important; width: 200px!important;" alt="course_image_alt">
                                            <div class="card-body" style="min-height: 250px;">
                                                <h5 class="card-title"><?php echo $rows["courseName"];?></h5>
                                                <p class="card-text"><?php echo $rows["courseDescription"];?></p>
                                                <p class="card-text">£ <?php echo $rows["price"];?></p>
                                                <a href="#" class="btn btn-primary">Delete</a>
                                                <a href="#" class="btn btn-primary">View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                };
                            }
                            ?>
                        </div>
                    </div>
                    <!-------- Add Course  ------>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                        <form class="row g-3 needs-validation" action="./addCourseController.php" method="post" enctype="multipart/form-data" novalidate>
                            <div class="col-12">
                                <label for="validationCustom01" class="form-label">Course Name</label>
                                <input type="text" class="form-control" name="cName" id="validationCustom01" required>
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="validationCustom01" class="form-label">Course Description</label>
                                <input type="text" class="form-control" name="cDescription" id="validationCustom01" required>
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="validationCustom01" class="form-label">Please Upload the Course Cover Image</label>
                                <input type="file" class="form-control" name="cImage" accept="images/*" id="validationCustom01" required>
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <input type="hidden" value="<?php echo $_SESSION["user_id"];?>" name="user_id">
                            </div>
                            <div class="col-12">
                                <label for="validationCustom01" class="form-label">Please Upload the Course Video</label>
                                <input type="file" class="form-control" name="cVideo" accept="video/*" id="validationCustom01" required>
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                                <input type="hidden" value="<?php echo $_SESSION["user_id"];?>" name="user_id">
                            </div>
                            <div class="col-12">
                                <label for="validationCustom01" class="form-label">Price</label>
                                <input type="number" class="form-control" name="price" id="validationCustom01" required>
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                            </div>
                            <div class="col-12">
                                <select class="form-select" name="category_id" aria-label="Default select example">
                                    <option selected>Select Course Category</option>
                                    <?php 
                                    $categories = getAllCategories($conn);
                                    if($categories->num_rows>0){
                                        while($row = $categories->fetch_assoc()){
                                        ?>
                                        <option value="<?php echo $row['id']?>"><?php echo $row['categoryName']?></option>
                                        <?php
                                        }
                                    }else{
                                        echo "failed";
                                    }
                                    ?>
                                    
                                </select>
                            </div>
                            <div class="col-12 d-flex">
                                <button class="btn btn-primary" type="submit">Add course</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
                </div>
            </div> 
        </div>

        <!-----------------------------------------Category Tab Pannel--------------------------------------------------->
        <div class="tab-pane fade" id="category-tab-pane" role="tabpanel" aria-labelledby="category-tab" tabindex="0">
           <?php require_once("b_category.php") ?>
        </div>
        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>