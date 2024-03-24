<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Account</title>
</head>
<body>

<?php
// Database connection
$servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "register"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];
    $newemail = $_POST['emailnew'];

    // Retrieve other fields you want to update
    // For example, if you want to update the user's name
    // $new_name = $_POST['new_name'];

    // Prepare SQL statement to update data in the table
    $sql = "UPDATE details SET email = $newemail WHERE email = $email ";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $new_name, $email, $password); // Adjust parameter types and number accordingly

    // Execute the query
    if ($stmt->execute() === TRUE) {
        echo "Account updated successfully";
    } else {
        echo "Error updating account: " . $conn->error;
    }

    // Close statement
    $stmt->close();
} else {
    echo "Invalid request method";
}

// Close connection
$conn->close();
?>

</body>
</html>
