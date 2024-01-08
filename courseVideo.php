<?php 
require_once('./frontend/component/header.php');
require_once('courseDetailsController.php');
require_once('reviewController.php');

// getting course informating using the wild card techinque in php 
if(isset($_GET['data'])){
    $courseId = isset($_GET['data']) ? urldecode($_GET['data']) : "Default Value";
    $sqlQuery = "SELECT course_id, courseName, courseDescription, courseImagePath, user_id, price, category_id, videoPath FROM courses WHERE course_id = $courseId";
    $result = $conn->query($sqlQuery);
    if($result->num_rows>0){
        $row = $result->fetch_assoc();
    }
}
// working with the comment form 
// checking for login condition of the reviewer 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['user_id'])) {
    if(isset($_POST['review']) && isset($_POST['course_id']) && isset($_POST['rating'])){
        // Process and store review as well as star rating
        $user_id = $_SESSION["user_id"]; //getting user id from session
        $course_id = $_POST['course_id'];
        $review = $_POST['review'];
        $rating = $_POST['rating'];
        $sql = "INSERT INTO rating (course_id, rating, review, user_id) VALUES ($user_id, $rating, '$review', $user_id)";
        if ($conn->query($sql) === TRUE) {
            ?>
                <script>
                    alert("Thank's for Your Review");
                </script>
            <?php
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}else{
    
}

?>
<div class="container" style="margin-top:60px;">
    <div class="row">
        <div class="col p-4">
            <h2><?php echo $row['courseName'];?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col p-4">
            <video src="<?php echo $row['videoPath']; ?>" controls style="height: 500px; width: 100%;"></video>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3>Comments</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-6 p-">
            <div class="row">
                <div class="col">
                    <h5>Ram</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe dignissimos quae enim cumque. Minus quam commodi praesentium eius consequuntur at.</p>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                    <h3>Write Your Review !</h3>
                    <form id="review_form" method="post">
                        <textarea type="text" name="review" class="form-control my-2" rows="3"></textarea>
                        <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
                        <input type="hidden" name="course_id" value="<?php echo $courseId;?>">
                        <div class="row my-3">
                            <div class="col star_rating">
                                <input class="d-none rating_input" type="radio" name="rating" id="star5" value='5'><label class="rating_label" for="star5"><i class="fas fa-star"></i></label>
                                <input class="d-none rating_input" type="radio" name="rating" id="star4" value='4'><label class="rating_label" for="star4"><i class="fas fa-star"></i></label>
                                <input class="d-none rating_input" type="radio" name="rating" id="star3" value='3'><label class="rating_label" for="star3"><i class="fas fa-star"></i></label>
                                <input class="d-none rating_input" type="radio" name="rating" id="star2" value='2'><label class="rating_label" for="star2"><i class="fas fa-star"></i></label>
                                <input class="d-none rating_input" type="radio" name="rating" id="star1" value='1'><label class="rating_label" for="star1"><i class="fas fa-star"></i></label>
                            </div>
                        </div>
                        <button class="btn btn-secondary" id="revie_submit__button">Submit Review</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    <script>
          $(document).ready(function() {
              $('#review_submit__button').click(function() {
                  // Serialize form data
                  var formData = $('#review_form').serialize();

                  // Make an AJAX request to a PHP script
                  $.ajax({
                      url: 'courseVideo.php', // Replace with your PHP script file
                      method: 'POST',
                      data: formData,
                      success: function(response) {
                          // Update the result div with the data received from the server
                          $('#form_result').html(response);
                      },
                      error: function(error) {
                          console.error('Error:', error);
                      }
                  });
              });
          });

      </script>
</script>



<?php 
require_once('./frontend/component/footer.php');
?>