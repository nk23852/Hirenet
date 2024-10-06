<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "hirenetdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize an error message variable
$errorMessage = ""; // Variable to store error messages

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $T_id = intval($_GET['id']); // Ensure T_id is an integer

    // Delete term from the database
    $sql = "DELETE FROM terms_details WHERE T_id=$T_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: terms&conditions(dev).php"); // Redirect back to terms page
        exit(); // Make sure to exit after header to stop further code execution
    } else {
        // Store the error message
        $errorMessage = "Error deleting record: " . $conn->error;
    }
} else {
    $errorMessage = "Invalid Term ID"; // Handle case where T_id is not set or invalid
}

// Close the connection
$conn->close();

// Display error message if it exists
if ($errorMessage) {
    echo "<div style='color: red;'>$errorMessage</div>";
}
?>
