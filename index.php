<?php
include 'header(nk).php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings - Hirenet</title>
    <link rel="stylesheet" href="../Hirenet/css/homepage(nk).css">

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const jobItems = document.querySelectorAll('.job-item');

            jobItems.forEach(item => {
                item.addEventListener('mouseenter', () => {
                    item.style.transform = 'scale(1.05)';
                    item.style.transition = 'transform 0.3s ease';
                });

                item.addEventListener('mouseleave', () => {
                    item.style.transform = 'scale(1)';
                });
            });
        });
    </script>

</head>

<body>


    <section class="intro-section">
        <h2>Welcome to Hirenet</h2>
        <p>
            Hirenet is your one-stop solution for job seekers and recruiters. Whether you're looking to advance your career or find top talent, our platform connects you with the right opportunities and people. Explore job listings, connect with employers, and take the next step in your professional journey.
        </p>
    </section>


    <!-- Job Posts Section -->
    <section class="job-posts-section">

        <div class="job-posts-container">
            <?php
            // Connect to the database
            $conn = new mysqli('localhost', 'root', '', 'hirenetdb');

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Query to get the job posts
            $sql = "SELECT job_id, job_title, job_description, job_location FROM job_posts";
            $result = $conn->query($sql);

            // Check if there are job posts
            if ($result->num_rows > 0) {
                // Output data for each job post
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='job-post'>";
                    echo "<h4>" . $row["job_title"] . "</h4>";
                    echo "<p>" . $row["job_description"] . "</p>";
                    echo "<p>" . $row["job_location"] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>No job posts available at the moment.</p>";
            }

            // Close the connection
            $conn->close();
            ?>
        </div>
    </section>

</body>


<?php
include 'footer(nk).php';
?>