<?php 
require_once('./frontend/component/header.php');
require_once('courseDetailsController.php');
?>
<div class="row bg-dark d-flex justify-content-center" style="margin-top: 60px;">
    <div class="col-10">
        <div class="row">
            <div class="col-6">
                <h2 class="text-light"><?php echo $row['courseName']; ?></h2>
                <p class="text-light">
                    <?php echo $row['courseDescription']; ?>
                </p>
                <p class="text-light">4.6 ⭐⭐⭐⭐⭐ <span>(490,659 rating)</span></p>
            </div>
            <div class="col-4 d-flex justify-content-center position-fixed top-1 py-4 border border-primary bg-light" style="right: 80px; z-index: 200;">
                <div class="col-10">
                    <div class="row">
                        <div class="col">
                            <img src="<?php echo $row['courseImagePath']?>" class="border border-primary" style="height:180px; width: 100%;"></video>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="courseVideo.php?data=<?php echo urlencode($row['course_id']);?>" class="btn btn-primary">Watch this Course</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="text-center">30-Day Money-Back Guarantee</p>
                            <p class="text-center">Full Lifetime Access</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <a href="">Share</a>
                        </div>
                        <div class="col-4">
                            <a href="">Gift This Course</a>
                        </div>
                        <div class="col-4">
                            <a href="">Apply Coupon</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h4>Subscribe to Udemy’s top courses</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row d-flex justify-content-center position-relative">
    <div class="col-10 py-2">
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col">
                        <h4>What You'll Learn</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <ul>
                            <li>You will learn how to leverage the power of Python to solve tasks.</li>
                            <li>You will learn how to leverage the power of Python to solve tasks.</li>
                            <li>You will learn how to leverage the power of Python to solve tasks.</li>
                            <li>You will learn how to leverage the power of Python to solve tasks.</li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li>You will learn how to leverage the power of Python to solve tasks.</li>
                            <li>You will learn how to leverage the power of Python to solve tasks.</li>
                            <li>You will learn how to leverage the power of Python to solve tasks.</li>
                            <li>You will learn how to leverage the power of Python to solve tasks.</li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<div class="row d-flex justify-content-center">
    <div class="col-10">
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col">This course Includes</div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>2 hours on-demand video</p>
                        <p>19 coding exercises</p>
                        <p>15 articles</p>
                    </div>
                    <div class="col-6">
                        <p>2 hours on-demand video</p>
                        <p>19 coding exercises</p>
                        <p>15 articles</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row d-flex justify-content-center">
    <div class="col-10">
        <div class="row">
            <div class="col">
                <h4>Requirements</h4>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <ul>
                    <li>Access to a computer with an internet connections</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row d-flex justify-content-center">
    <div class="col-10">
        <div class="row">
            <div class="row">
                <div class="col-12">
                    <h4>Description</h4>
                </div>
                <div class="col">
                    <p><?php echo $row['courseDescription'] ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-4">
                            <div class="row">
                                <div class="col-4">
                                    profileimage
                                </div>
                                <div class="col-8">
                                    <h3>Ram</h3>
                                    <p>9 courses</p>
                                    <p>2 reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8 py-2">
                            <p>⭐⭐⭐⭐⭐<span>3 years ago</span></p>
                            Everything on this course is a goldmine except for the GUI since it's specific for Jupyter Notebooks and it's missing the video for GUI Events. Still it was a nice introduction to GUI. Don't let that disappoint you though. THIS IS A MUST HAVE COURSE. I have already recommended it to few people and always will. Do yourself a favor and do this course if you want to learn Python 3. Thank you so much for this course, Jose-sensei!!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
require_once('./frontend/component/footer.php');
?>
