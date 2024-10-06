<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "hirenetdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $job_id = $_GET['id'];

    // Delete job from the database
    $sql = "DELETE FROM job_posts WHERE job_id=$job_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: job_posting.php"); // Redirect back to job posting page
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
