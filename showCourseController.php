<?php

function getCourse($user_id, $conn){
    $selectQuery = "SELECT course_id, courseName, courseDescription, courseImagePath, price FROM courses WHERE user_id = $user_id";
    $result = $conn->query($selectQuery);
    return $result;
}

function getCourseByCategory($course_id, $conn){
    $selectQuery2 = "SELECT course_id, courseName,courseDescription, courseImagePath, price FROM courses WHERE category_id = $course_id";
    $courseByCategory = $conn->query($selectQuery2);
    return $courseByCategory;
}
?>