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

// Retrieve email and new email from the form
$email = $_POST['email'];
$newEmail = $_POST['emailnew'];

// Query to update email in the database
$sql = "UPDATE registration SET email = '$newEmail' WHERE email = '$email'";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Email updated successfully";
} else {
    echo "Error updating email: " . $conn->error;
}

// Close connection
$conn->close();
?>

