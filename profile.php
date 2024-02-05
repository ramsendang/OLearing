<?php 
require_once('frontend/component/header.php');
?>

<div class="container" style="margin-top: 80px; min-height: 100vh;">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col border border-black rounded-circle p-4 d-flex justify-content-center align-items-center" style="overflow: hidden;">
                            <img src="<?php echo $_SESSION['profile']?>" style="height: 250px; width 250px;" alt="profile image">
                        </div>
                        <div class="col d-flex justify-content-end flex-column">
                            <div class="row">
                                <p>Full Name</p>
                            </div>
                            <div class="row">
                                <p><?php echo $_SESSION['username'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col d-flex align-items-end p-4">
                    <a href="profileEdit.php" class="decoration-none">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">
                    email
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?php echo $_SESSION["email"];?>
                </div>
            </div>
        </div>
    </div>
</div>




<?php 
require_once('frontend/component/footer.php');
?>