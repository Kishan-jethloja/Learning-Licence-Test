<?php
session_start();

// Check if the user is logged in, if not redirect to login page
if (!isset($_SESSION['email'])) {
    header("Location: main.php");
    exit;
}


// Retrieve score and result from the session
$score = isset($_SESSION['score']) ? $_SESSION['score'] : 0;
$result = isset($_SESSION['result']) ? $_SESSION['result'] : "";

// Get the email of the logged-in user
$email = $_SESSION['email'];

$questions = array(
    "1 Near a pedestrian crossing, when the pedestrians are waiting to cross the road, you should?
    "=> array(
        "A" => "Sound horn and proceed",
        "B" => "Slow down, sound horn and pass",
        "C" => "Stop the vehicle and wait till the pedestrians cross the road and then proceed",
        "answer" => "C"
    ),
    "2 When a vehicle is involved in an accident causinginjury to any person?" => array
    (
        "A" => "Take the vehicle to the nearest police station and report the acciden",
        "B" => "Stop the vehicle and report to the police station", 
        "C" => "Take all reasonable steps to secure medical attention to the injured and report to the  nearest
                police station within 24 hours",
        "answer" => "C"
    ),
    "3 You can overtake a vehicle in front?"=>array
    (
        "A"=>"Through the right side of that vehicle",
        "B"=>"Through the left side",
        "C"=>"Through the left side, if the road is wide",
        "answer"=>"A"
    ),
    "4 Free passage should be given to the following types of vehicles ?"=>array
    (
        "A"=>"Police vehicles",
        "B"=>"Ambulance and fire service vehicles",
        "C"=>"Express, Super Express buses",
        "answer"=>"B"
    ),
    "5 Validity of learners licence?"=>array
    (
        "A"=>"Till the driving licence is obtained",
        "B"=>"6 months",
        "C"=>"30 days",
        "answer"=>"B"
    ),
    "6 Where the slippery road sign is seen on the road, the driver shall ?"=>array
    (
        "A"=>"reduce the speed by changing the  gear",
        "B"=>"apply brake",
        "C"=>"proceed in the same speed",
        "answer"=>"A"
    ),
    "7 Records of a private vehicle are?"=>array
    (
        "A"=>"Registration Certificate, G.C.R, Insurance Certificate ",
        "B"=>"Registration certificate, Insurance Certificate, Tax Token, Driving Licence ",
        "C"=>"Registration Certificate, Permit, Trip Sheet",
        "answer"=>"B"
    ),
    "8 Over speeding?"=>array
    (
        "A"=>"is an offence leading to suspension or cancellation of driving licence ",
        "B"=>"is an offence leading to punishment by fine only",
        "C"=>"is not an offence",
        "answer"=>"A"
    ),
    "9 While you are approaching an intersection where the yellow signal light is blinking, you should?"=>array
    (
        "A"=>"As there is no restriction, proceed at the same speed ",
        "B"=>"Stop the vehicle and wait for the green light to appear",
        "C"=>"Slow down the vehicle and proceed only after ensuring that it is safe to do so",
        "answer"=>"C"
    ),
    "10 Where the road is marked with continuous yellow line the vehicle should?"=>array
    (
        "A"=>"Not touch or cross the yellow line",
        "B"=>"Allow to overtake only through the right side of yellow line",
        "C"=>"Cross the line only when overtaking a vehicle in front",
        "answer"=>"A"
    ),
    "11 While you are driving on gradient roads, you should"=>array
    (
        "A"=>"Give precedence to the vehicles coming down the hill ",
        "B"=>"Give precedence to the vehicles going up the hill",
        "C"=>"Give precedence to the vehicles carrying heavy load",
        "answer"=>"B"
    ),
    "12 You can overtake a vehicle in front?"=>array
    (
        "A"=>"Through the right side of that vehicle",
        "B"=>"Through the left side",
        "C"=>"Through the left side, if the road is wide",
        "answer"=>"A"
    ),
    "13 While a vehicle entering a main road from a branch road, the driver shall give preference…?"=>array
    (
        "A"=>"To the vehicles coming from the left",
        "B"=>"To the vehicles coming from the right",
        "C"=>"To all vehicles proceeding along the main road",
        "answer"=>"C"
    ),
    "14 What is Tail-gating?"=>array
    (
        "A"=>"Driving too close behind a vehicle in a dangerous manner ",
        "B"=>"Keeping safe distance from the vehicle ahead regulating the speed proportionately ",
        "C"=>"Keeping a distance of atleast 7 metres from the vehicle ahead",
        "answer"=>"A"
    ),
    "15 According to section 112 of the Motor Vehicles Act 1988
    ?"=>array
    (
        "A"=>"Speed limit shall not be exceeded ",
        "B"=>"Shall not drive after consuming alcohol",
        "C"=>"Shall not use vehicle on road without paying tax",
        "answer"=>"A"
    ),

);

// Initialize score variable
$questionskey = array_keys($questions);

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Connect to MySQL database
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "hi"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO responses (email, question, response) VALUES (?, ?, ?)");
    
    $score=0;
    // Bind parameters and execute the statement for each submitted answer
    foreach ($_POST as $question => $answer) {
        $question= str_replace("_"," ",$question);

        $stmt->bind_param("sss", $email, $question, $answer);
        $stmt->execute();
        
        
        foreach($questions as $Hkey=>$Hvalue)
        {
            if ($question==$Hkey)
            {
                foreach($Hvalue as $key=>$value)
                {
                    if($key==='answer')
                    {
                        if($answer==$value)
                        {
                            $score++;
                        }
                    }
                }
            }
        }

    }


    $stmt->close();

    // Determine pass/fail status

    $result = ($score > 12) ? "Pass" : "Fail";

    // Close MySQL connection

    $conn->close();
}
// Unset session variables
unset($_SESSION['score']);
unset($_SESSION['result']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Result</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>
body {
            font-family: Arial, sans-serif;
            background-color: #eff4fd;
            margin: 0;
            padding: 0;
        }
        /* Main Content Styles */
        .content {
            padding: 20px;
        }

        /* Login Section Styles */
        .container {
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

        #madhav{
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

        #madhav[type="submit"]:hover {
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
        .ani{
  position: relative;
  white-space: nowrap;
  overflow:hidden;
  animation-name: typing;
  animation-duration: 6s;  
}

@keyframes typing {
  from {width: 0%;}
  to {width: 100%;}
}
        
        
       
    </style>
<body>
   
    <div class="container">
        <h2>Test Result</h2>
        <div class="ani">
        <p>Email: <?php echo $email; ?></p>
        <p>Score: <?php echo $score; ?>/15</p>
        <p>Status: <?php echo $result; ?></p>
        </div>

    </div>
    <div class="container">
        <h2>Congratulations if you are Pass,Else better Luck next time!</h2>
        <form action="logout.php">
        <button id="madhav" type="submit">Logout</button>
        </form>

    </div>

</body>
</html>
