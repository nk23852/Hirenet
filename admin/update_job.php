<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "hirenetdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $job_id = $_POST['job_id'];
    $job_title = $_POST['job_title'];
    $job_description = $_POST['job_description'];
    $job_location = $_POST['job_location'];

    // Update job in the database
    $sql = "UPDATE job_posts 
            SET job_title='$job_title', job_description='$job_description', job_location='$job_location' 
            WHERE job_id=$job_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: job_posting.php"); // Redirect back to job posting page
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
