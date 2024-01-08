<?php 
require_once('./database/connection.php');
if(isset($_GET['data'])){
    $courseId = isset($_GET['data']) ? urldecode($_GET['data']) : "Default Value";
    
    $sqlQuery = "SELECT courseName, courseDescription, courseImagePath, user_id, price, category_id, videoPath FROM courses WHERE course_id = $courseId";
    $result = $conn->query($sqlQuery);
    if($result->num_rows>0){
        $row = $result->fetch_assoc();
    }
}
?>


