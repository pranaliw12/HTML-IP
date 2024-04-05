<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "register"; // Replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve email from the form
$email = $_POST['email'];

// Query to remove data based on email
$sql = "DELETE FROM registration WHERE email = '$email'";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Record removed successfully";
} else {
    echo "Error removing record: " . $conn->error;
}

// Close connection
$conn->close();
?>
