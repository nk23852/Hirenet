<?php
session_start(); // Start the session
include "db_connect.php"; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $user_type = $_POST["user_type"];
    $phone_number = $_POST["phone_number"]; // Phone number

    // Initialize CV path as null
    $cv_path = null;

    // Handle CV upload if provided
    if (isset($_FILES['cv']) && $_FILES['cv']['error'] == 0) {
        $cv_path = 'uploads/cvs/' . basename($_FILES['cv']['name']); // Path to save the CV
        move_uploaded_file($_FILES['cv']['tmp_name'], $cv_path); // Move uploaded file
    }

    // Insert user details into the database
    $sql = "INSERT INTO users (username, email, password, user_type, phone_number, cv) 
            VALUES ('$username', '$email', '$password', '$user_type', '$phone_number', '$cv_path')";

    // Execute query and handle success/failure
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data Added Successfully'); window.location.href='./login(nk).php';</script>";
    } else {
        echo "Error: " . $conn->error; // Show error
    }

    $conn->close(); // Close database connection
}
?>
