
<?php

$conn = new mysqli("localhost", "root", "", "hirenetdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$T_id = $_GET['id'];  // Get the student ID from the URL

// Delete the student from the database
$sql = "DELETE FROM terms_details WHERE T_id=$T_id";
if (mysqli_query($conn, $sql)) {
    echo "term deleted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Redirect to the homepage
header("Location: terms&conditions(dev).php");

?>
