<?php 
require_once('./frontend/component/header.php');
require_once('courseDetailsController.php');
require_once('reviewController.php');

$review = showReviewByCousreID($conn, $row['course_id']);
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
                    <h2>Reviews</h2>
                </div>
            </div>
            <?php 
                if($review->num_rows > 0){
                    while($reviews = $review->fetch_assoc()){
                        $rating = $reviews['rating'];
                 
            ?>
            <div class="row">
                
                <div class="border border-black border-end-0 rounded col mb-4">
                    <div class="row p-2">
                        <div class="col-4">
                            <div class="row">
                                <div class="col">
                                    <img src="<?php 
                                    echo userProfile($conn, $reviews['user_id']);
                                    ?>" alt="profile image" 
                                    style="height: 100px; widht: 100px;">
                                </div>
                                <div class="col">
                                    <h5><?php echo userName($conn, $reviews['user_id']);?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-8 py-2">
                            <p><?php 
                                $i = 0;
                                for($i=0; $i<$rating; $i++){
                                    echo "⭐";
                                }
                            ?><span>3 years ago</span></p>
                            <p><?php echo $reviews['review'];?></p>
                        </div>
                    </div>
                </div>
                <?php 
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<?php 
require_once('./frontend/component/footer.php');
?>
