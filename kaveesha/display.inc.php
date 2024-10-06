<?php 
///databace connection
require_once "connection.php";

//data
$sq1= "SELECT * FROM faq_form_details";
$result= $conn-> query ($sq1);

if ($result->num_rows > 0){
    //output data of each row
    while($row= $result->fetch_assoc()){
        $name = $row["Name"];
        $email = $row["Email"];
        $message = $row["Message"];
    }
}
else {
    echo "0 results";
}
$conn->close();
?>