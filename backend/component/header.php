<?php 
session_start();
require_once('./database/connection.php');
require_once('showCourseController.php');
require_once('categoryController.php');
$user_id = $_SESSION['user_id'];
$result = getCourse($user_id, $conn);
$result1 = getCourse($user_id, $conn);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OLearning | Dashboard</title>
    <link rel="shortcut icon" href="frontend/src/images/LogoOlearning.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="row bg-dark">
        <div class="col d-flex align-center p-4">
            <a href="dashboard.php" class="text-decoration-none text-light pt-2 px-4">Dashboard</a>
            <a href="d_course.php"  class="text-decoration-none text-light pt-2 px-4">Courses</a>
            <a href="d_category.php"  class="text-decoration-none text-light pt-2 px-4">Categories</a>
            <a href="index.php"  class="text-decoration-none text-light pt-2 px-4">Home</a>
        </div>
    </div>