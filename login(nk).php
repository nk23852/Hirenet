<?php
session_start(); 
include "db_connect.php"; 

$error = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $user = $_POST['uname']; 
    $pass = $_POST['psw'];   

    
    $user_sql = "SELECT * FROM users WHERE username='$user'";
    $user_result = $conn->query($user_sql);

    
    if ($user_result->num_rows > 0) {
        $row = $user_result->fetch_assoc();

        
        if (password_verify($pass, $row['password'])) {
            
            $_SESSION['user_id'] = $row['user_id']; 
            $_SESSION['user_type'] = $row['user_type']; 

            
            if ($row['user_type'] === 'admin') {
                header("Location: admin/dashboard.php");
            } elseif ($row['user_type'] === 'recruiter') {
                header("Location: IT23538696 HireNet/Applications.php"); 
            } else {
                header("Location: user/homenew.php");
            }
            exit(); 
        } else {
            $error = "Invalid username or password!"; 
        }
    } else {
        $error = "Invalid username or password!"; 
    }

    $conn->close(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HireNet - Login</title>
    <link rel="stylesheet" href="../Hirenet/css/login(nk).css"> 
</head>
<body>
    <div class="container">
        <h1><b>Login</b></h1>
        <form action="" method="post"> 
            <label for="uname"><h3>Username</h3></label>
            <input type="text" id="username" name="uname" required placeholder="Enter Username">

            <label for="psw"><h3>Password</h3></label>
            <input type="password" id="password" name="psw" required placeholder="Enter Password">
            <br>
            <br>

            <button type="submit" class="login">Login</button>
		 
            
        </form>

        
        <?php if ($error): ?>
            <div id="error-message" style="color:red;"><?= $error ?></div>
        <?php endif; ?>

    </div>
</body>
</html>
