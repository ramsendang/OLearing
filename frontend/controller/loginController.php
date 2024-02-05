<?php
// Start session
session_start();

require_once('../../database/connection.php');

// Process login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT id, fullName, user_password, role_id, user_email, profileImgPath FROM user WHERE user_email='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["user_password"])) {
            // Password is correct, set session variables
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["username"] = $row["fullName"];
            $_SESSION["roleid"] = $row["role_id"];
            $_SESSION["email"] = $row["user_email"];
            $_SESSION['profile'] = $row["profileImgPath"];
            ?>
            <script>
                <?php
                    if($row["role_id"]== 2){
                        ?>
                        window.location.href = "../../dashboard.php";
                        <?php
                    }else{
                        ?>
                        window.location.href = "../../index.php";
                        <?php
                    }
                ?>
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("Invalid username or password");
                window.location.href = "../../login.php";
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            alert("User not Found");
            window.location.href = "../../login.php";
        </script>
        <?php
    }
}

$conn->close();
?>
