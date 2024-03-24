<?php
// Start session if not already started
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection code
    include_once "db1_connection.php";

    // Get form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = $_POST['Type'];

    // Hash the password (you should use password_hash() for better security)
    $hashed_password = md5($password);

    // SQL to insert data into users table
    $sql = "INSERT INTO registration (username, email, password, type) VALUES ('$username', '$email', '$hashed_password', '$type')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to another HTML page after successful registration
        header("Location: ../main.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

