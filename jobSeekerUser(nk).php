<?php
    include 'header(nk).php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Seeker Profile - Hirenet</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            border-bottom: 2px solid #0073e6;
            padding-bottom: 5px;
            color: #0073e6;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"], input[type="email"], input[type="tel"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #0073e6;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #005bb5;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Job Seeker Profile</h1>

        <form>
            <!-- Personal Information Section -->
            <div class="section">
                <h2>Personal Information</h2>
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" name="fullName" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone">

                <label for="address">Address</label>
                <input type="text" id="address" name="address">
            </div>

            
            <button type="submit">Save Profile</button>
        </form>
    </div>

</body>
</html>

<?php
    include 'footer(nk).php'; 
?>
