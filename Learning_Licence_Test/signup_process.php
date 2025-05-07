<?php
session_start();
require_once "db_config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname=$_POST['fname'];
    $surname=$_POST['surname'];
    $Gender=$_POST['Gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phonenumber=$_POST['phonenumber'];
    $aadharnumber=$_POST['aadharnumber'];
    
    // break;

    // Check if email already exists
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Email already exists";
    } else {
        // Insert new user into the database
        $sql = "INSERT INTO users (fname,surname,Gender,email, password,phonenumber,aadharnumber) VALUES ('$fname','$surname','$Gender','$email', '$password','$phonenumber','$aadharnumber')";
        
        if (mysqli_query($conn, $sql)) {
            $_SESSION['email'] = $email;
            header("Location: main.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
?>
