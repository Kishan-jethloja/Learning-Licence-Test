<?php
session_start();
require_once "db_config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // User found, redirect to dashboard or home page
        $_SESSION['email'] = $email;
        header("Location: instruction.php");
    } else {
        // Invalid credentials
        echo "Invalid username or password";
        
   }


}

?>
