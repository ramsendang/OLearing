<?php 
    function getCategories($conn){
        $sql_display_query = "SELECT id, categoryName FROM category LIMIT 8";
        $category = $conn->query($sql_display_query);
        return $category;
    }

    function getAllCategories($conn){
        $sql_display_query = "SELECT id, categoryName FROM category";
        $category = $conn->query($sql_display_query);
        return $category;
    }

    function getCategoryByCategoryId($conn, $categoryId){
        $sql = "SELECT categoryName, categoryDescription FROM category WHERE id = $categoryId";
        $category = $conn->query($sql);
        return $category;
    }

    function getAllCourseByCategory($conn, $categoryid){
        $sqlQuery = "SELECT course_id, courseName, courseDescription, courseImagePath, user_id, price FROM courses WHERE category_id = $categoryid";
        $courseByCategory = $conn->query($sqlQuery);
        return $courseByCategory;
    }

    require_once('./database/connection.php');
    
    
       

?>