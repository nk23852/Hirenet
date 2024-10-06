<?php
//Include connection php file
require_once "connection.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $email =$_POST["email"];
    $message=$_POST["userMessage"];

    $sql= "INSERT INTO faq_form_details(Name,Email,Message)
    VALUES ('$name','$email','$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data Added Succcessfully')</script>";
        echo "<script>window.location.href='./display.php'</script>";
    } else {
        echo "Error : " . $sql . "<br>" . $conn->error;
    }

 $conn->close();
}

?>

