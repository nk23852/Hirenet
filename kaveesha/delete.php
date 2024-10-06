<?php

require 'connection.php';

$sql1 = "SELECT MAX(Id) AS max_id FROM faq_form_details";
$result = $conn->query($sql1);
//check condition
if ($result->num_rows > 0){
    $row = $result->fetch_assoc ();
    $max_id=$row['max_id'];
}

$sql3="DELETE FROM faq_form_details WHERE Id= '$max_id'";
if($conn->query($sql3))
{
    echo "delete successfully";
    echo "<script>alert('deleted successfully')</script>";
    echo "<script>window.location.href='./insert.php'</script>";
}

$conn->close();
?>