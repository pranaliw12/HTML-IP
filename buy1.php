<?php
session_start();

// Check if the buy now button is clicked
if(isset($_POST['buy_now'])) {
    // Get the value of the item purchased (you can replace this with your own logic)
    $item_value = 50; // Example item value
    
    // Store the item value in a session variable
    $_SESSION['item_value'] = $item_value;
    
    // Redirect to another page
    header("Location: abuy.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Now Page</title>
</head>
<body>
    <h1>Buy Now Page</h1>
    
    <!-- Form to trigger the purchase -->
    <form method="post" action="">
        <input type="submit" name="buy_now" value="Buy Now">
    </form>
</body>
</html>