<?php 
require_once('backend/component/header.php');
require_once('backend/component/d_course__sidebar.php');
?>
    <div class="col-10 p-4">
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
</div>