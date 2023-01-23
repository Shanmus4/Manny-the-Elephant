<?php

//$servername = "jdbc:mysql://sql6.freesqldatabase.com:3306/sql12592661";
$servername = "sql12.freesqldatabase.com";
$username = "sql12592661";
$password = "Cs8cPVJT6b";
$dbname = "sql12592661";

echo "connected";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

$sql = "INSERT INTO mannyfeedback (name, email, feedback) VALUES ('$name', '$email', '$feedback')";
$conn->query($sql);



if ($conn->query($sql) === TRUE) {
    echo "Feedback submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>