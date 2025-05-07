<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .login-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 350px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333333;
        }

        input[type="email"],
        input[type="text"],
        input[type="BIG INT"],
        input[type="int"],
        input[type="password"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #cccccc;
            border-radius: 4px;
            font-size: 16px;
        }
        .GEN{
            text-align:left;
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #cccccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .main.php {
            color: #333333;
            text-decoration: none;
            font-size: 14px;
        }

        .main.php:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Sign Up</h2>
        <form action="signup_process.php" method="post">


        <input type="text" name="fname" placeholder="First Name" required><br>

        <input type="text" name="surname" placeholder="Surname" required><br>
        <div class="GEN">
        <label>Gender :</label>
        <label>Male</label>
        <input type="radio" name="Gender" value="Male" required>
        <label>Female</label>
        <input type="radio" name="Gender" value="Female">
        <label>Other</label>
        <input type="radio" name="Gender" value="Other" ><br>
        </div>


            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="BIG INT" name="phonenumber" placeholder="PhoneNumber" required><br>
            <input type="BIG INT" name="aadharnumber" placeholder="AadharNumber" required><br>


            <!-- <button type="submit">Login</button> -->
            <input type="submit" value="SignUp">

        </form>
        <p>Already have an account? <a href="main.php">Sign In</a></p>
    </div>
</body>
</html>