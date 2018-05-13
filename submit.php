<?php

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$comm = $_POST['comm'];


//First create a database in your server and then fill the name and table of your database below//
//Complete the server's info //
$servername = "";
$username = "";
$serverpassword = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $serverpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// name of the table in this example is 'user'
$sql = "INSERT INTO user (name, email, gender, password, communication)
VALUES ('$name', '$email','$gender','$password','$comm')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 