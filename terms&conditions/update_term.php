<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "hirenetdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data from POST request
    $T_id = $_POST['T_id'];          // The primary key for the term
    $termName = $_POST['termName'];  // Term name
    $descript = $_POST['descript'];  // Term description

    // Update term in the database
    $sql = "UPDATE terms_details 
            SET termName='$termName', descript='$descript' 
            WHERE T_id=$T_id";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to the terms and conditions page after updating
        header("Location: terms&conditions(dev).php"); 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
