<?php
session_start(); // Start the session
include "db_connect.php";

$error = '';
/*
if ($_SERVER['REQUEST_METHOD'] == 'POST') //&& isset($_POST['register']))
 {
    $username_or_email = $_POST['username_or_email'];
    $password = $_POST['password'];
    //$name = $_POST['name'];
    //$address = $_POST['address'];
    //$phone_number = $_POST['phone_number'];

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
    
}*/


// Login Section
if (isset($_POST['username']) && isset($_POST['password'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Check if the user exists and password is correct
    $user_sql = "SELECT * FROM users WHERE username_or_email='$user' AND password=MD5('$pass')";
    $user_result = $conn->query($user_sql);

    if ($user_result->num_rows > 0) {
        // User login successful
        $row = $user_result->fetch_assoc();

        // Store user ID and role in the session
        $_SESSION['user_id'] = $row['id']; // Assuming the user ID column is 'id'
        $_SESSION['user_type'] = 'jobseeker'; // Storing the role (admin/customer)

        // Redirect based on the user's role
        if ($row['user_type'] === 'admin') {
            header("Location: admin/dashboard.php");
        }if ($row['user_type'] === 'recruiter') {
            header("Location: admin/dashboard.php");
        } else {
            header("Location: homepage(nk).php");
        }
        exit();
    } else {
        $error = "Invalid username or password!";
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>HireNet</title>
    <link rel="stylesheet" href="../Hirenet/css/login(nk).css">

</head>
<body>
    <div class="container">

    <h1><b>Login</b></h1>
    
    <form id="login-form">
        <label for ="username">Username</label>
        <input type="text" id="username" name="username "required>
        <br>
        <br>

        <label for ="password">Password</label>
        <input type="text" id="password" name="psw"required>
        <br><br>
        <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
        <br><br>
        <input type="submit" name="register" value="Login">

    </form>
        <div id="error-message"></div>
        </div> 
    
        <script src="../Hirenet/css/login(nk).js"></script>

</body>
</html>
