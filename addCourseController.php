<?php
session_start();
require_once("./database/connection.php");


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $courseName = $_POST["cName"];
    $courseDescription = $_POST["cDescription"];
    $coursePrice = $_POST["price"];
    $userid = $_POST["user_id"];
    $categoryId = $_POST["category_id"];

    echo $courseName;
    echo $courseDescription;
    echo $coursePrice;
    echo $userid;
    // Check if the file was uploaded without errors
    if (isset($_FILES["cImage"]) && $_FILES["cImage"]["error"] == 0) {
        // Specify the directory where the image will be saved
        $targetDir = "./database/imagedb/";
        $targetVideoDir = "./database/videodb/";
        // Create the target directory if it doesn't exist
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0755, true);
        }
        if (!file_exists($targetVideoDir)) {
            mkdir($targetVideoDir, 0755, true);
        }

        // Get the uploaded file name and move the file to the target directory
        $targetFile = $targetDir . basename($_FILES["cImage"]["name"]);
        move_uploaded_file($_FILES["cImage"]["tmp_name"], $targetFile);

        // Insert image information into the database
        $imageFileName = basename($_FILES["cImage"]["name"]);

        // fior videos
        $videoName = $_FILES["cVideo"]["name"];
        $videoTmpName = $_FILES["cVideo"]["tmp_name"];
        $videoSize = $_FILES["cVideo"]["size"];
        $videoType = $_FILES["cVideo"]["type"];
        $videoError = $_FILES["cVideo"]["error"];

        $allowedExtensions = ["mp4", "avi", "mov"]; // Add more allowed video extensions
        $videoExtension = strtolower(pathinfo($videoName, PATHINFO_EXTENSION));
        
        if(in_array($videoExtension, $allowedExtensions)){
            $newVideoName = uniqid('video_').".".$videoExtension;
            $videoTargetPath = $targetVideoDir . $newVideoName;
            move_uploaded_file($videoTmpName, $videoTargetPath);
        }

        
        $insertQuery = "INSERT INTO courses (courseName, courseDescription, courseImageName, courseImagePath, user_id, price, category_id, videoName, videoPath) 
        VALUES ('$courseName', '$courseDescription', '$imageFileName','$targetFile', $userid, $coursePrice, $categoryId, '$newVideoName', '$videoTargetPath')";
        
        if ($conn->query($insertQuery) === TRUE) {
            ?>
            <script>
                alert("Image uploaded and information stored in the database successfully!");
                window.location.href ="dashboard.php";
            </script>
            <?php
        } else {
            echo "Error storing information in the database: " . $conn->error;
        }

        // Close the database connection
        $conn->close();
    } else {
        echo "Error uploading image.";
    }
}
?>
