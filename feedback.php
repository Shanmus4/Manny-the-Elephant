<?php
$servername = "sql109.epizy.com";
$username = "epiz_33449757";
$password = "O6beDg6eGmxAzBd";
$dbname = "epiz_33449757_manny";


$conn = new mysqli($servername, $username, $password, $dbname);

$name = $_POST['names'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO mannyfeedback (names, email, feedback) VALUES ('$name', '$email', '$feedback')";

echo $name;
echo "$sql";

if ($conn->query($sql) === TRUE) {
    ?>
    <link rel="stylesheet" href="styles.css" />
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