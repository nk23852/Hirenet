<?php                                                         //RPNS Pathiranage IT23538696
require 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the applicant from the database
    $query = "DELETE FROM job_applicants WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $id); // 'i' for integer

    if ($stmt->execute()) {
        header("Location: Applications.php");
        exit();
    } else {
        echo "Error deleting applicant.";
    }
}
?>
