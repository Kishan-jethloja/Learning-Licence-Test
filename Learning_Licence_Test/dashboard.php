<?php
session_start();

// Check if user is logged in, if not redirect to login page
if (!isset($_SESSION['email'])) {
    header("Location: main.php");
    exit;
}
// Get the email of the logged-in user
$email = $_SESSION['email'];

// test questions and answers
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

//     // Add more questions here
);
// Initialize score variable
$questionskey = array_keys($questions);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
   <script>
// Set the date we're counting down to
const d = new Date();
let time = d.getTime();
var countDownDate = new Date().getTime()+600000;

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "Time Up"; 
    document.getElementById("madhav").click();
  }
}, 1000);
</script>
    <style>
        #demo {
            position: -webkit-sticky;
  position: sticky;
  top: 0;
        /* position: sticky; */
        text-align: center;
        font-size: 60px;
        margin-top: 50px;
}

        /* CSS theme from login.php */
        body {
            font-family: Arial, sans-serif;
            background-color: #eff4fd;
            margin: 0;
            padding: 0;
        }
        /* Main Content Styles */
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h2 { margin-top: 0; }

        .test-section {
            margin-bottom: 20px;
        }

        form {
            margin-top: 20px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        button[type="submit"]
         {
            background-color: lightcoral;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: red;
        }

        .card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container" id="demo">
    Timer Starts<br>
</div>



<div class="container">
   
    <h2>Welcome, <?php echo $email; ?>!</h2>
    <div class="test-section">
        <h3>Test Section</h3>
        <form action="result.php" method="post">

            <?php foreach ($questions as $question => $options) : ?>
                <p><?php echo $question; ?></p>
                <?php foreach ($options as $option => $value) : ?>
                    <?php if ($option != 'answer') : ?>
                        <input type="radio" name="<?php echo $question; ?>" value="<?php echo $option; ?>"><?php echo $value; ?><br>
                    <?php endif; ?>
                <?php endforeach; ?>
                <br>
            <?php endforeach; ?>
            <button id="madhav" type="submit">Submit</button>
            
        </form>
    </div>

     <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
    <div class="card">
        <h3>Test Result</h3>
        <p>Name: <?php echo $email; ?></p>
        <p>Score: <?php echo $score; ?>/15</p>
        <p>Status: <?php echo $result; ?></p>
    </div>
    <?php endif; ?> 
</div>

</body>
</html>
