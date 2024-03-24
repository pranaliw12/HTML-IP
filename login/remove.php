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

    // Prepare SQL statement to delete data from the table
    $sql = "DELETE FROM details WHERE email = $email ";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);

    // Execute the query
    if ($stmt->execute() === TRUE) {
        echo "Account removed successfully";
    } else {
        echo "Error removing account: " . $conn->error;
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