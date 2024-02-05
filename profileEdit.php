<?php 
require_once('frontend/component/header.php');
?>

<div class="container" style="margin-top: 80px; min-height: 100vh;">
    <div class="row">
        <div class="col">
            <h3>Edit Profile Form</h3>
        </div>
    </div>
    <form action="profileController.php" method="post" enctype="multipart/form-data" >
        <div class="row">
            <div class="col">
                <label for="" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="fName" value="<?php echo $_SESSION["username"]?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $_SESSION["email"]?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="" class="form-label">Full Name</label>
                <input type="file" class="form-control" name="profileImg" value="<?php echo $_SESSION["username"]?>">
            </div>
        </div>
        <div class="row">
            <div class="col py-4">
                <button class="btn btn-primary" type="submit">Save Changes</button>
            </div>
        </div>
    </form>
</div>



<?php 
require_once('frontend/component/footer.php');
?>