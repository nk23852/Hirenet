<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hirenet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
        }
        .btn {
            padding: 15px 30px;
            margin: 10px;
            font-size: 18px;
            cursor: pointer;
            border: none;
            color: white;
            border-radius: 5px;
        }
        .recruiter-btn {
            background-color: #28a745;
        }
        .seeker-btn {
            background-color: #007bff;
        }
        .btn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Welcome to Hirenet</h1>
        <button class="btn recruiter-btn" onclick="window.location.href='rec_sign_up.php'">Job Recruiter</button>
        <button class="btn seeker-btn" onclick="window.location.href='sign_up.php'">Job Seeker</button>
    </div>

</body>
</html>
