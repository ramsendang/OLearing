<?php
    require_once('./frontend/component/header.php');
    require_once('./database/connection.php');
    require_once('categoryController.php');

    if(isset($_GET['data'])){
        $categoryId = isset($_GET['data']) ? urldecode($_GET['data']) : "Default Value";
        $categoryId1 = isset($_GET['data']) ? urldecode($_GET['data']) : "Default Value";
        $courses = getAllCourseByCategory($conn, $categoryId);
        $category = getCategoryByCategoryId($conn, $categoryId1);
        if($category->num_rows> 0){
            $category_row = $category->fetch_assoc();
        }
    }
?>

<div class="container">
    <div class="row">
        <div class="col" style="margin-top: 60px;">
            <h2><?php echo $category_row['categoryName']; ?></h2>
            <p><?php echo $category_row['categoryDescription']; ?></p>
            
        </div>
    </div>
    <div class="row">
        <?php 
        if($courses->num_rows>0){
            while($course_row = $courses->fetch_assoc()){
                $authorId = $course_row['user_id'];
                $sql = "SELECT fullName FROM user WHERE id = $authorId";
                $result = $conn->query($sql);
                if($result->num_rows>0){
                    $authorName = $result->fetch_assoc();
                }
                ?>
                <div class="col-lg-3 col-md-6 p-3">
                <div class="card">
                    <img src="<?php echo $course_row['courseImagePath']; ?>" alt="" class="card-img-top">
                    <div class="card-body">
                        <a href="" class="card-title"><?php echo $course_row['courseName']?></a>
                        <p class="card-text"><?php echo $authorName['fullName'] ?></p>
                        <p class="card-text"><?php echo $course_row['price']?></p>
                        <a href="courseDetails.php?data=<?php echo urlencode($course_row['course_id']);?>" class="btn btn-primary">Study Now</a>
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
require_once('./frontend/component/footer.php');
?>