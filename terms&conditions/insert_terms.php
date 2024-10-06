<?php
include "../db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["termName"], $_POST["descript"])) {
        $termName = $_POST["termName"];
        $descript = $_POST["descript"];

        // Insert data into the database
        $sql = "INSERT INTO terms_details (termName, descript) 
                VALUES ('$termName', '$descript')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Data added successfully')</script>";
        } else {
            echo "Error: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "Please fill all required fields.";
    }
}
?>
