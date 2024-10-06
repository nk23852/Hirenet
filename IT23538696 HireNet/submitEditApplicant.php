<?php                                                                 //RPNS Pathiranage IT23538696
require 'config.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $name = $_POST['applicant_details'];
    $position = $_POST['position'];
    $status = $_POST['status'];

    // Update the applicant in the database
    $query = "UPDATE job_applicants SET applicant_details = ?, position = ?, status = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    
    // Bind parameters: 'sss' for three strings and 'i' for an integer for errors
    $stmt->bind_param('sssi', $name, $position, $status, $id);

    if ($stmt->execute()) {
        header("Location: Applications.php");
        exit();
    } else {
        echo "Error updating applicant.";
    }
}
?>
