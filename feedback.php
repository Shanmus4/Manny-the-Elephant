<?php
function cors()
{

    // Allow from any origin
    if (isset($_SERVER['HTTP_ORIGIN'])) {
        // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
        // you want to allow, and if so:
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400'); // cache for 1 day
    }

    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            // may also be using PUT, PATCH, HEAD etc
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

        exit(0);
    }

    echo "You have CORS!";
}

cors();


$servername = "sql109.epizy.com";
$username = "epiz_33449757";
$password = "O6beDg6eGmxAzBd";
$dbname = "epiz_33449757_mannyy";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$name = $_POST['names'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$ipaddr = $_SERVER['REMOTE_ADDR'];


$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO mannyfeedback (names, email, feedback, ipaddr) VALUES ('$name', '$email', '$feedback', '$ipaddr' )";

echo "$sql";

if ($conn->query($sql) === TRUE) {
    ?>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap");

        html {
            overflow-x: hidden;
            overflow-y: hidden;
            font-family: "Bubblegum Sans", cursive;
        }

        * {
            font-family: "Bubblegum Sans", cursive;
        }

        .f2text1 {
            color: rgb(143, 81, 54);
            font-size: 2vw;
            text-align: center;
            padding: 2vw;
        }

        .fullscreencaption {
            height: 140vh;
            width: 100vw;
            position: relative;
            align-items: center;
        }
    </style>
    <div class="fullscreencaption" style="max-height: 100%">
        <p class="f2text1">
            Thank you for the feedback!
        </p>
    </div>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>