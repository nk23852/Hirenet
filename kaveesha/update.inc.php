<?php

require 'connection.php';

if (isset($_POST["msg"])) {
    $fname = $_POST["msg"];

    $sql4 = "SELECT MAX(Id) AS max_id FROM faq_form_details";
    $result = $conn->query($sql4);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $max_id = $row['max_id'];

        $sql3 = "UPDATE faq_form_details SET Message='$fname' WHERE Id='$max_id'";
        if ($conn->query($sql3) === TRUE) {
            echo "<script>alert('updated successfully')</script>";
            echo "<script>window.location.href = 'display.php';</script>";
        } else {
            echo "<script>alert('updating Error: ')</script>" . $conn->error;
        }
    } else {
        echo "<script>alert('No records found')</script>";
    }
} else {
    echo "<script>alert('No data submitted.')</script>";
}

$conn->close();
?>