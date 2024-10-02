<?php
session_start(); // Start the session
include "db_connect.php"; // Include database connection

$error = '';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture username and password from the form
    $user = $_POST['uname']; // Use 'uname' from the form
    $pass = $_POST['psw'];   // Use 'psw' from the form

    // Check if the user exists
    $user_sql = "SELECT * FROM users WHERE username='$user'";
    $user_result = $conn->query($user_sql);

    // If the user is found
    if ($user_result->num_rows > 0) {
        $row = $user_result->fetch_assoc();

        // Verify the password using password_verify()
        if (password_verify($pass, $row['password'])) {
            // Store user ID and type in the session
            $_SESSION['user_id'] = $row['user_id']; // Adjust based on your user ID column name
            $_SESSION['user_type'] = $row['user_type']; // Store the user type

            // Redirect based on the user's role
            if ($row['user_type'] === 'admin') {
                header("Location: admin/dashboard.php");
            } elseif ($row['user_type'] === 'recruiter') {
                header("Location: recruiter/dashboard.php"); // Different dashboard for recruiters
            } else {
                header("Location: homepage(nk).php");
            }
            exit(); // Stop further execution
        } else {
            $error = "Invalid username or password!"; // Set error message
        }
    } else {
        $error = "Invalid username or password!"; // Set error message
    }

    $conn->close(); // Close the database connection
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HireNet - Login</title>
    <link rel="stylesheet" href="../Hirenet/css/login(nk).css"> <!-- Link to CSS -->
</head>
<body>
    <div class="container">
        <h1><b>Login</b></h1>
        <form action="" method="post"> <!-- Action is the same page -->
            <label for="uname"><b>Username</b></label>
            <input type="text" id="username" name="uname" required placeholder="Enter Username">

            <label for="psw"><b>Password</b></label>
            <input type="password" id="password" name="psw" required placeholder="Enter Password">

            <button type="submit">Login</button> <!-- Submit button -->
            <label>
                <input type="checkbox" name="remember" checked="checked"> Remember me
            </label>
        </form>

        <!-- Display error message if there's one -->
        <?php if ($error): ?>
            <div id="error-message" style="color:red;"><?= $error ?></div>
        <?php endif; ?>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </div>
</body>
</html>
