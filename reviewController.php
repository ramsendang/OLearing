<?php 
function showLatestReview($conn){
    $sql = "SELECT * FROM rating ORDER BY created_at DESC";
    $result = $conn->query($sql);
    return $result;
}

function showUserByUserIDformReview($conn, $userid){
    $sql = "SELECT fullName FROM user WHERE user_id = $userid";
    $result = $conn->query($sql);
    return $result;
}



?>