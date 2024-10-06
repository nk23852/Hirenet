<?php                                                       //RPNS Pathiranage IT23538696
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO job_applicants (applicant_details, applied_date, position, status) VALUES (?, ?, ?, ?)");
    
    // Bind parameters for the error of 404 not found-https://www.php.net/manual/en/mysqli.prepare.php
    $stmt->bind_param("ssss", $applicantDetails, $appliedDate, $position, $status);

    // Get the form data
    $applicantDetails = $_POST['applicant_details'];
    $appliedDate = $_POST['applied_date'];
    $position = $_POST['position'];
    $status = $_POST['status'];

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect back to the applicants page
        header("Location: Applications.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

$conn->close();
?>
