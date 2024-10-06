<?php 
// Include Connection PHP file
include "../db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $termName = $_POST["termName"];
    $descript = $_POST["descript"];
    
    // Insert new term into the database
    $terms = "INSERT INTO terms_details (termName, descript) VALUES ('$termName', '$descript')";

    if ($conn->query($terms) === TRUE) {
        // Redirect to the same page after successful insertion
        header("Location: terms&conditions(dev).php");
        exit(); // Make sure to exit after header to stop further code execution
    } else {
        echo "Error: " . $conn->error;
    }
}

// Fetch existing terms to display in the table
$fetchTerms = "SELECT * FROM terms_details";
$result = $conn->query($fetchTerms);

// Close the connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Terms and Conditions</title>
    <link rel="stylesheet" href="./terms.css"> <!-- Link to CSS -->
</head>
<body>

<div class="container">
    <h1>Adding Terms and Conditions</h1>

    <!-- Directly reference the page name in the form action -->
    <form action="terms&conditions(dev).php" method="POST">
        <label for="termName">Enter Term Name:</label>
        <input type="text" id="termName" name="termName" required><br><br>

        <label for="descript">Add a Description:</label>
        <textarea id="descript" name="descript" required></textarea><br><br>

        <input type="submit" name="register" value="Add">
    </form>

    <div id="error-message"></div>
</div>

<h2>Terms & Conditions</h2>
<table>
    <tr>
        <th>Term</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    <?php
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['termName']}</td>
                <td>{$row['descript']}</td>
                <td>
                    <a href='edit_term.php?id={$row['T_id']}'>Edit</a> |
                    <a href='delete_term.php?id={$row['T_id']}'>Delete</a>
                </td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No terms found.</td></tr>";
    }
    ?>
</table>

<script src="./terms.js"></script>

</body>
</html>
