<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eff4fd;
            margin: 0;
            padding: 0;
        }
      h1{
        color:red;
      }
        /* Main Content Styles */
        .content {
            padding: 20px;
            
        }
       
       
        .image-container img {
            
            width: 15%;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
       

        /* Login Section Styles */
        .login-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 760px;
            text-align: left;
            margin: 20px auto;

        }

        /* About Us Section Styles */
        .Instructions {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
        }
        .about-us {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
        }

        /* Contact Us Section Styles */
        .contact-us {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
        }

        /* Feedback Form Styles */
        .feedback-form {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #cccccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: lightcoral;
            color: white;
            padding: 14px 20px;
            margin-top: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: red;
        }

        .h111{
            padding:10px;
            font-size:16px;
            width:100%;
        }

        #hew{
            margin-bottom:10px;
        }
        #animation
        {
           
            /* background: red; */
            position: relative;
            animation-name: typing;
            animation-duration: 4s;  
            animation-fill-mode: forwards;
            overflow:hidden;
            white-space:nowrap;
       
        }
@keyframes typing {
  from {width:0%;height:0px;}
  to {width: 100%; height:50px;}
}

    </style>
</head>
<body>

<div class="content">
<div class="image-container">
         <center > 
            <img src="rto.png" alt="2%" width="2%">
        <h1 id="animation">Welcome to Learner's liecense Test</h1>

        </center>   
       

    </div>
    <div id="home">
       
   
        <div id="Instructions" class="Instructions">
        <h2>Instructions</h2>
        <p>1. Here are some of the instruction followed by you:<br>
           2. Here You Entered "Learners' License Application Form:"<br>
           3. If you are a new user then Please signup first and then login..<br>
           4. Or otherwise Enter the username and password for login<br>
           5. After Login you are redirect to a page where you can read the Instructions<br>
           6. After reading the instructions the user had to click on the Test button<br>
           7. There will be a 10mins of test and after that you will be provided your result<br>

           </p>
         </div>
    </div>

    <div id="login" class="login-container">
        <h2 class="displayleft">Login</h2>
        <form action="login.php" method="post" class="logininner">
            <input type="email"  name="email" placeholder="Email" class="h111" id="hew" required><br>
            <input type="password"  name="password" placeholder="Password" class="h111" required><br>
            <input type="submit" value="Login">
        </form>
        <p>Don't have an account? <a class="signup-link" href="signup.php">Sign Up</a></p>
    </div>

    
        <div id="aboutus" class="about-us">
    <h2>About Us</h2>
    <p>
        Welcome to the Learner's License Test portal managed by the Regional Transport Office (RTO). The RTO is a government organization responsible for maintaining a database of drivers and vehicles for various states in India. Our primary objective is to ensure road safety and manage the issuance of driving licenses.
    </p>
    <p>
        The RTO provides a range of services, including vehicle registration, issuance of driving licenses, conducting driving tests, and implementing road safety measures. We are committed to providing efficient and transparent services to the public.
    </p>
    <p>
        Our Learner's License Test is designed to evaluate the knowledge of road rules and regulations of new drivers. The test is mandatory for anyone who wishes to obtain a learner's license, which is the first step towards becoming a licensed driver.
    </p>
    <p>
        Our team at the RTO works diligently to ensure that all processes are streamlined and user-friendly. We aim to educate and assist citizens in understanding and following the traffic laws, contributing to a safer driving environment for everyone.
    </p>
    <p>
        Thank you for visiting our website. If you have any questions or need further assistance, please do not hesitate to contact us through the contact information provided in the "Contact Us" section.
    </p>
</div>



   
        <div id="contactus" class="contact-us">
    <h2>Contact Us</h2>
    <p>If you have any questions or need further assistance, please feel free to contact us:</p>
    <ul>
        <li>Email: <a href="mailto:contact@rto.gov.in">contact@rto.gov.in</a></li>
        <li>Phone: +91-1234-567890</li>
        <li>Address: Regional Transport Office, Rajkot, Gujrat, India</li>
    </ul>
    <p>You can also visit our official website for more information: <a href="https://parivahan.gov.in" target="_blank">parivahan.gov.in</a></p>
    <p>For technical support, please write to: <a href="mailto:support@rto.gov.in">support@rto.gov.in</a></p>
</div>


    <div id="feedback" class="feedback-form">
        <h2>Feedback Form</h2>
        <form action="feedback.php" method="post">
            <input type="text" name="name" placeholder="Your Name" required><br>
            <input type="text" name="email" placeholder="Your Email" required><br>
            <textarea name="message" rows="4" placeholder="Your Message" required></textarea><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</div>

</body>
</html>


