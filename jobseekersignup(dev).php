<?php
session_start(); // Start the session
include "db_connect.php";

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $username_or_email = $_POST['username_or_email'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    //$address = $_POST['address'];
    $phone_number = $_POST['phone_number'];

    // Check if the username or email already exists
    $check_sql = "SELECT * FROM users WHERE username_or_email='$username_or_email'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        // Username or email already exists
        $error = "Username or email is already registered!";
    } else {
        // Hash the password
        $hashed_password = MD5($password);

        // Insert new user into the database
        $register_sql = "INSERT INTO users (username_or_email, password, user_type, name, phone_number) 
                         VALUES ('$username_or_email', '$hashed_password', '$jobseeker','$name', '$phone_number')";

        if ($conn->query($register_sql) === TRUE) {
            // Registration successful, get the user ID of the newly created user
            $user_id = $conn->insert_id;

            // Set session variables with user_id and role
            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_type'] = 'jobseeker'; // Default role is customer

            // Redirect to the customer home page
            header("Location: ../homepage(nk).php");
            exit();
        } else {
            $error = "Error in registration: " . $conn->error;
        }
    }
}
?>
<html>

<head>

    <title>Job Seeker Sign Up</title>

    <link rel="stylesheet" href="./css/jseeksignup(dev).css">

</head>

<body>

    <div class="container">

        <h1>Job Seeker Sign Up</h1>

        <form id="sign-up-form">

            <label for="name">Name:</label>

            <input type="text" id="name" name="name"><br><br>

            <label for="username_or_email">Email or Username:</label>

            <input type="username_or_email" id="username_or_email" name="username_or_email"><br><br>

            <label for="password">Password:</label>

            <input type="password" id="password" name="password"><br><br>

            <label for="confirm-password">Confirm Password:</label>

            <input type="password" id="confirm-password" name="confirm-password"><br><br>
            
            <label for="phone number">Phone Number:</label>

            <input type="phone number" id="Phone Number" name="Phone Number"><br><br>

            <input type="submit" name ="register"value="Sign Up">

        </form>

        <div id="error-message"></div>

    </div>


    <script src="./js/jseeksignup(dev).js"></script>

</body>

</html>