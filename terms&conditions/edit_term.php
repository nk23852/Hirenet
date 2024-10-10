<?php

$conn = new mysqli("localhost", "root", "", "hirenetdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $T_id = $_GET['id'];

    $sql = "SELECT * FROM terms_details WHERE T_id=$T_id";
    $result = $conn->query($sql);
    $term = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Job Post</title>
    <style>
       
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

form {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 400px;
}

/* Labels and inputs */
label {
    display: block;
    font-size: 16px;
    color: #333;
    margin-bottom: 10px;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

/* Textarea styling */
textarea {
    height: 100px;
    resize: vertical;
}

/* Submit button styling */
input[type="submit"] {
    background-color: #5cb85c;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
}

input[type="submit"]:hover {
    background-color: #4cae4c;
}

/* Responsive design */
@media (max-width: 600px) {
    form {
        width: 90%;
    }
}

    </style>
</head>
<body>
<form action="update_term.php" method="POST">
        <input type="hidden" name="T_id" value="<?php echo $term['T_id']; ?>">
        
        <label for="termName">Term Name:</label>
        <input type="text" id="termName" name="termName" value="<?php echo $term['termName']; ?>" required><br>

        <label for="descript">Description:</label>
        <textarea id="descript" name="descript" required><?php echo $term['descript']; ?></textarea><br>

        <input type="submit" value="Update Term">
    </form>
</body>
</html>

<?php
$conn->close();
?>
