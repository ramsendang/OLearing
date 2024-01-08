<?php 
require_once('./database/connection.php');
// working with the comment form 
// checking for login condition of the reviewer 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['user_id'])) {
    if(isset($_POST['review']) && isset($_POST['course_id']) && isset($_POST['rating'])){
        // Process and store review as well as star rating
        $user_id = $_POST["user_id"];
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
            ?>
                <script>
                    alert("failed");
                </script>
            <?php
        }
    }
}else{
    ?>
    <script>
        alert("You must be logged in to submit a review");
    </script>
    <?php
}
?>