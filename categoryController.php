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

    function getCourseByCategory($conn, $categoryid){
        $sqlQuery = "SELECT courseName, courseDescription, courseImagePath, user_id, price FROM courses WHERE category_id = $courseId";
    }

    require_once('./database/connection.php');
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $category = $_POST["category"];
        $categoryDescription = $_POST["cDescription"];

        if(empty($category)){
            echo "Category is Required";
        }else{
            $Query = "INSERT INTO category (CategoryName, categoryDescription) VALUES ('$category', '$categoryDescription')";
            if($conn->query($Query) === TRUE){
                ?>
                <script>
                    alert("Category Added Successfully!");
                    window.location.href ="dashboard.php";
                </script>
                <?php
            }else{
                echo "Failed";
            }
        }
    }
       

?>