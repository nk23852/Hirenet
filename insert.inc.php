<?php
session_start(); // Start the session
include "db_connect.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $email =$_POST["email"];
    $password =$_POST["password"];

    $sql= "INSERT INTO users(username,email,password)
    VALUES ('$username','$email','$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data Added Succcessfully')</script>";
        echo "<script>window.location.href='./homepage(nk).php'</script>";
    } else {
        echo "Error : " . $sql . "<br>" . $conn->error;
        
    }

 $conn->close();
}




?>
