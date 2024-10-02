<?php
session_start(); // Start the session
include "db_connect.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $email =$_POST["email"];
    $password =password_hash($_POST["password"],PASSWORD_DEFAULT);
    $user_type = $_POST["user_type"];

    $sql= "INSERT INTO users(username,email,password, user_type)
    VALUES ('$username','$email','$password', '$user_type')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data Added Succcessfully')</script>";
        echo "<script>window.location.href='./login(nk).php'</script>";
    } else {
        echo "Error : " . $sql . "<br>" . $conn->error;
        
    }

 $conn->close();
}


?>