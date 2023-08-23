<?php
// Database connection parameters
$servername = "localhost";   // Change to your MySQL server's hostname
$username = "root";         // Change to your MySQL username
$password = "M3tg6nvh@987"; // Change to your MySQL password
$dbname = "Portfolio";  // Change to the name of your database

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];

// Insert data into the database
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
