<?php
session_start();
include 'db_connect.php';

$user_id = $_SESSION['user_id'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];

    if ($action === 'save') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $sql = "UPDATE users 
            SET username='$username', email='$email', phone_number='$phone'
            WHERE user_id=$user_id";

        if ($conn->query($sql) === TRUE) {

            header("Location: jobSeekerUser(nk).php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }elseif($action==='delete'){
        $sql = "DELETE FROM users WHERE user_id = $user_id";

        if ($conn->query($sql) === TRUE) {

            header("Location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }    
    }
}

$conn->close();
