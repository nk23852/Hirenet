<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "hirenetdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $job_id = $_GET['id'];

    // Fetch job details for editing
    $sql = "SELECT * FROM job_posts WHERE job_id=$job_id";
    $result = $conn->query($sql);
    $job = $result->fetch_assoc();
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


textarea {
    height: 100px;
    resize: vertical;
}


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


@media (max-width: 600px) {
    form {
        width: 90%;
    }
}

    </style>
</head>
<body>
    <form action="update_job.php" method="POST">
        <input type="hidden" name="job_id" value="<?php echo $job['job_id']; ?>">
        
        <label for="job_title">Job Title:</label>
        <input type="text" id="job_title" name="job_title" value="<?php echo $job['job_title']; ?>" required><br>

        <label for="job_description">Job Description:</label>
        <textarea id="job_description" name="job_description" required><?php echo $job['job_description']; ?></textarea><br>

        <label for="job_location">Job Location:</label>
        <input type="text" id="job_location" name="job_location" value="<?php echo $job['job_location']; ?>" required><br>

        <input type="submit" value="Update Job">
    </form>
</body>
</html>

<?php
$conn->close();
?>
