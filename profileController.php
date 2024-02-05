<?php 
session_start();
require_once("./database/connection.php");


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullName = $_POST['fName'];
    $email = $_POST['email'];
    $user_id = $_SESSION['user_id'];
    if(isset($_FILES['profileImg'])){
        $targetDirectory = "./database/profile/";
        $image = file_get_contents($_FILES['profileImg']['tmp_name']);
        $imageName = $_FILES['profileImg']['name'];
        $targetFile = $targetDirectory . $imageName;
        move_uploaded_file($_FILES["profileImg"]["tmp_name"], $targetFile);
        echo "hello";
        $sql = "UPDATE user SET fullNname = '$fullName', user_email = '$email', profileImgName = '$imageName', profileImgPath = '$targetFile' Where id = $user_id";
        $conn->query($sql);
        ?>
        <script>
            window.locaiton.href = 'profile.php';
        </script>
        <?php
    }else{
        echo "failed";
    }
}

?>
