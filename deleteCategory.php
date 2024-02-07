<?php 
require_once('./database/connection.php');
if(isset($_GET['data'])){
    // gettig the data form the url 
    $id = isset($_GET['data']) ? urldecode($_GET['data']) : "Default Value";

    // deleting the category by its id 
    $deletesql = "DELETE FROM category WHERE id = $id";
    $conn->query($deletesql);
    ?>
    <script>
        window.location.href = 'd_category.php';
    </script>
    <?php
}




?>