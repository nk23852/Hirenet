
<?php
    include 'header(nk).php'; 
    include "db_connect.php";

    // Fetching the terms from the database
    $fetchTerms = "SELECT * FROM terms_details";
    $result = $conn->query($fetchTerms);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms and Conditions - Hirenet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        h2 {
            color: #0073e6;
        }
        p {
            color: #666;
            line-height: 1.6;
        }
        section {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 100px 2px 5px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <section>
        <h1><i>Terms and Conditions</i></h1>
        <p>Welcome to Hirenet. By using our platform, you agree to the following terms and conditions:</p>
        
        <?php
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<h2>{$row['termName']}</h2>";
                echo "<p>{$row['descript']}</p>";
            }
        } else {
            echo "<p>No terms and conditions available at this time.</p>";
        }

        // Closing the database connection
        $conn->close();
        ?>
    </section>
</body>

<?php
    include 'footer(nk).php'; 
?>


