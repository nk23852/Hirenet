
<html>

<head>

    <title>Job Seeker Sign Up</title>

    <link rel="stylesheet" href="./css/jseeksignup(dev).css">

</head>

<body>

    <div class="container">

        <h1>Job Seeker Sign Up</h1>

        <form action="./insert.inc.php" method="post">


            <label for="username">Username:</label>

            <input type="text" id="username" name="username"><br><br>

            <label for="email">Email:</label>

            <input type="email" id="email" name="email" required><br><br>

            <label for="password">Password:</label>

            <input type="password" id="password" name="password" required><br><br>

            <label for="confirm-password">Confirm Password:</label>

            <input type="password" id="confirm-password" name="confirm-password" required><br><br>
            
            <label for="phone number">Phone Number:</label>

            <input type="phone_number" id="Phone_Number" name="Phone_Number"><br><br>

            <input type="hidden" name="user_type" value="recruiter">

            <input type="submit" name ="register" value="Sign Up">
        

        </form>

        <div id="error-message"></div>

    </div>


    <script src="../Hirenet/js/jseeksignup(dev).js"></script>

</body>

</html>