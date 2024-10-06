<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "hirenetdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $job_title = $_POST['job_title'];
    $job_description = $_POST['job_description'];
    $job_location = $_POST['job_location'];

    // Insert job into the database
    $sql = "INSERT INTO job_posts (job_title, job_description, job_location) 
            VALUES ('$job_title', '$job_description', '$job_location')";

    if ($conn->query($sql) === TRUE) {
        header("Location: job_posting.php"); // Redirect back to job posting page
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
