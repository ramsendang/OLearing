<?php 
function showLatestReview($conn){
    $sql = "SELECT * FROM rating ORDER BY created_at DESC";
    $result = $conn->query($sql);
    return $result;
}

function showUserByUserIDformReview($conn, $userid){
    $sql = "SELECT fullName, profileImgPath FROM user WHERE user_id = $userid";
    $result = $conn->query($sql);
    return $result;
}

function showReviewByCousreID($conn, $courseId){
    $sql = "SELECT * FROM rating WHERE course_id = $courseId ORDER BY rating DESC";
    $result = $conn->query($sql);
    return $result;
}
function userName($conn, $userID){
    $sql = "SELECT fullName FROM user WHERE id = $userID";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        $userName = $result->fetch_assoc();
    }
    return $userName['fullName'];
}

function userProfile($conn, $userID){
    $sql = "SELECT profileImgPath FROM user WHERE id = $userID";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        $profile = $result->fetch_assoc();
    }
    return $profile['profileImgPath'];
}

?>