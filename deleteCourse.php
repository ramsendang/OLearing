<?php 
require_once('./database/connection.php');
if(isset($_GET['data'])){
    $courseId = isset($_GET['data']) ? urldecode($_GET['data']) : "Default Value";

    $selectsql = "SELECT courseImagePath, videoPath FROM courses WHERE course_id = $courseId";
    $result = $conn->query($selectsql);
    $row = $result->fetch_assoc();
    $image = $row['courseImagePath'];
    $video = $row['videoPath'];

    $deletesql = "DELETE FROM courses WHERE course_id = $courseId";
    $conn->query($deletesql);
    ?>
    <script>
        window.location.href = 'd_course.php';
    </script>
    <?php
}




?>