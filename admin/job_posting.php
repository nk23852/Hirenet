<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "hirenetdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch job posts from the database
$sql = "SELECT * FROM job_posts";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Job Posts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        h1, h2 {
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #5cb85c;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
    <script src="adminjs/delete.js"></script>
</head>
<body>
    <h1>Manage Job Posts</h1>

    <!-- Form for adding a new job post -->
    <form action="add_job.php" method="POST">
        <label for="job_title">Job Title:</label>
        <input type="text" id="job_title" name="job_title" required><br>

        <label for="job_description">Job Description:</label>
        <textarea id="job_description" name="job_description" required></textarea><br>

        <label for="job_location">Job Location:</label>
        <input type="text" id="job_location" name="job_location" required><br>

        <input type="submit" value="Add Job">
    </form>

    <h2>Existing Job Posts</h2>
    <table>
        <tr>
            <th>Job Title</th>
            <th>Description</th>
            <th>Location</th>
            <th>Actions</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['job_title']}</td>
                    <td>{$row['job_description']}</td>
                    <td>{$row['job_location']}</td>
                    <td>
                        <a href='edit_job.php?id={$row['job_id']}'>Edit</a> 
            
                        <a href='#' onclick=confirmDeletion({$row['job_id']});return false;'>Delete</a>
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No job posts found.</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
