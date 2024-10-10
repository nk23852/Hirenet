<html>
<head>
    <title>Job Seeker Sign Up</title>
    <link rel="stylesheet" href="./css/jseeksignup(dev).css">
</head>

<body>
    <div class="container">
        <h1>Job Seeker Sign Up</h1>
        <form action="./insert.inc.php" method="post" enctype="multipart/form-data">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            
            <label for="confirm-password">confirm-password:</label>
            <input type="password" id="confirm-password" name="confirm-password" required><br><br>

            <label for="phone_number">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number"><br><br>

            <input type="hidden" name="user_type" value="job_seeker">
            <input type="submit" name="register" value="Sign Up">
        </form>
    </div>
</body>
</html>
