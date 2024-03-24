<?php

// Connect to MySQL database (using XAMPP)
$servername = "localhost";
$username = "root"; // Assuming default username in XAMPP
$password = ""; // Assuming default password in XAMPP
$database = "register"; // Replace 'your_database_name' with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming you have a table named 'users' with columns 'username' and 'password'
$usernameToCheck = $_POST['email']; // Username received from the AJAX request
$passwordToCheck = $_POST['password']; // Password received from the AJAX request

// Prepare SQL query
$sql = "SELECT * FROM registration WHERE email = '$usernameToCheck' ";
$result = $conn->query($sql);

if ($result !== false && $result->num_rows > 0){
    
    header("Location: after.html");
} else {
    // User not found
    echo "Error: Username or password is incorrect.";
}

$conn->close();

?>


