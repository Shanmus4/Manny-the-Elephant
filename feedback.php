<?php
/*$servername = "sql12.freesqldatabase.com";
$username = "sql12592661";
$password = "Cs8cPVJT6b";
$dbname = "sql12592661";*/

$servername = "sql109.byetcluster.com";
$username = "epiz_33449757";
$password = "O6beDg6eGmxAzBd";
$dbname = "epiz_33449757_manny";


$conn = new mysqli($servername, $username, $password, $dbname);

/*$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$to = "s4.shanmugsundar@gmail.com";
$subject = "Manny the Elephant Feedback";
$headers = "From: " . $email;
$txt = "You have received a feedback from" . $name . ".\n\n" . $feedback;
mail($to, $subject, $txt, $headers);*/

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$sql = "INSERT INTO mannyfeedback (name, email, feedback) VALUES ('$name', '$email', '$feedback')";

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