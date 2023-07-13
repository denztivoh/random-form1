<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$message = $_POST['message'];

// Connect to the database
$servername = "dennis";
$username = "jay_robin";
$password = "your_password";
$dbname = "sms";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert form data into table
$sql = "INSERT INTO form_data (name, email, age, gender, message)


        VALUES ('$name', '$email', $age, '$gender', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully.";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Retrieve data from the table
$sql = "SELECT * FROM form_data";
$result = $conn->query($sql);

$conn->close();
?>



