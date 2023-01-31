<?php
$servername = "sql109.epizy.com";
$username = "epiz_33449757";
$password = "O6beDg6eGmxAzBd";
$dbname = "epiz_33449757_manny";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['names'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

$name = filter_var($name, FILTER_SANITIZE_STRING);
$email = filter_var($email, FILTER_SANITIZE_STRING);
$feedback = filter_var($feedback, FILTER_SANITIZE_STRING);


$sql = "INSERT DELAYED INTO mannyfeedback (names, email, feedback) VALUES ('$name', '$email', '$feedback')";

echo $name;
echo "$sql";

if ($conn->query($sql) === TRUE) {
    ?>
    <link rel="stylesheet" href="styles.css" />
    <div class="fullscreencaption" style="max-height: 100%;">
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