<?php

//$servername = "jdbc:mysql://sql6.freesqldatabase.com:3306/sql12592661";
$servername = "sql12.freesqldatabase.com";
$username = "sql12592661";
$password = "Cs8cPVJT6b";
$dbname = "sql12592661";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

$sql = "INSERT INTO mannyfeedback (name, email, feedback) VALUES ('$name', '$email', '$feedback')";

if ($conn->query($sql) === TRUE) { ?>
    <div style=" height: 100vh;
                              width: 100vw;
                              display: flex;
                              justify-content: center;
                              align-items: center;">
        <p style="color: rgb(143, 81, 54);
                          font-size: 2vw;
                          text-align: center;
                          padding: 2vw;">
            Thank you for the feedback!
        </p>
    </div>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>