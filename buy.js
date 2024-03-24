// <!-- <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>User Registration Check</title>
// </head>
// <body> -->
//     <!-- <h1>User Registration Check</h1>
//     <button onclick="checkUserRegistration()">buy now</button> -->

    // <script>
    let checkUserRegistration = document.getElementById("checkUserRegistration")
        function checkUserRegistration() {
            var username = prompt("Enter username:");
            
            // Simulating user registration check (replace this with your actual logic)
            var isRegistered = checkDatabase(username);

            if (isRegistered) {
                // Redirect to thank you page
                window.location.href = "abuy.html";
            } else {
                // Open register page
                window.open("Registration.html", "_blank");
            }
        }

        // Dummy function to simulate user registration check
        function checkDatabase(username) {
            // Assuming 'userDatabase' is an array of registered usernames
            var userDatabase = ["user1", "user2", "user3"];

            // Check if username exists in the database
            if (userDatabase.includes(username)) {
                return true; // User is registered
            } else {
                return false; // User is not registered
            }
        }
//     </script>
// </body>
// </html>