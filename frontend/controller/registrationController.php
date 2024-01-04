<?php 
require_once('../../database/connection.php');

// Process registration form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fname"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $roleid = $_POST["role_id"];

    if (empty($fullName) || empty($email) || empty($password) || empty($roleid)) {
        ?>
        <script>
            alert("please fill all the empty fields");
            window.location.href = "../../register.php";
        </script>
        <?php
    }else{
    // Check if the username is already taken
        $check_username_sql = "SELECT id FROM user WHERE user_email='$email'";
        $check_username_result = $conn->query($check_username_sql);

        if ($check_username_result->num_rows > 0) {
            ?>\
            <script>
                alert("Username already taken. Please choose a different username.");
                window.location.href = "../../register.php";
            </script>
            <?php
        } else {
            // Insert user data into the database
            $insert_sql = "INSERT INTO user (fullName, user_email, user_password, role_id) VALUES ('$fullName', '$email', '$password', $roleid)";

            if ($conn->query($insert_sql) === TRUE) {
                ?>
                <script>
                    alert("regestration successfull");
                    window.location.href = "../../login.php";
                    
                </script>
                <?php
            } else {
                echo "Error: " . $insert_sql . "<br>" . $conn->error;
            }
        }
    }
}

$conn->close();
?>

