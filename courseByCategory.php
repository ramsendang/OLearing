<?php
    require_once('./frontend/component/header.php');
    require_once('./database/connection.php');
    require('showCourseController.php');
?>
<div class="row">
    <div class="col" style="margin-top: 60px;">
        <h2>Category Name</h2>
        <p>Category Description</p>
    </div>
</div>
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <img src="" alt="" class="card-img-top">
            <div class="card-body">
                <a href="" class="card-title">Course Name</a>
                <p class="card-text">Auther</p>
                <p class="card-text">Price</p>
                <a href="" class="btn btn-primary">Study Now</a>
            </div>
        </div>
    </div>
</div>













<?php
require_once('./frontend/component/footer.php');
?>