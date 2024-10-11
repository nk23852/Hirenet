<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hirenet</title>
    <link rel="stylesheet" href="../css/header3(nk).css">
    <link rel="stylesheet" href="../css/homepage(nk).css">

    <!--javascript part-->
    <script>
    document.addEventListener("DOMContentLoaded", () => {
        const jobItems = document.querySelectorAll('.job-post');

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

<header>

    <div class="logo">
        <img src="../images/logo.png" alt="Hirenet Logo">
    </div>
    <nav>
        <ul>
            <li><a href="homenew.php">Home</a></li>
            <li><a href="./job(nk).php">Jobs</a></li>
            <li><a href="../kaveesha/insert.php">FAQ</a></li>
            <li><a href="../jobSeekerUser(nk).php">Profile</a></li>
        </ul>
    </nav>

    <div class="user-section">
        <img src="../images/pIcon.png" alt="User Icon" class="user-icon" style="width: 100px; height: 100px;">
        <button id="logoutBtn">Log out</button>
    </div>

</header>


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
    <script>
        
        document.getElementById('logoutBtn').addEventListener('click', function() {
            window.location.href = 'http://localhost/HIRENET/index.php'; 
        });
    </script>
</body>

<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h3>About +Us</h3>
            <p>
                We are a company dedicated to providing top-notch services. Our mission is to ensure customer satisfaction and build long-lasting relationships.
            </p>
        </div>

        <div class="footer-section">
            <h3>Useful Links</h3>
            <ul>
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="terms&conditions(nk).php">Terms & Conditions</a></li>
                <li><a href="privacy.php">Privacy Policy</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Follow Us</h3>
            <div class="social-links">
                <a href="https://www.instagram.com/yourprofile" target="_blank">
                    <img src="../images/ins.png" alt="Instagram">
                </a>
                <a href="https://www.facebook.com/yourprofile" target="_blank">
                    <img src="../images/fb.png" alt="Facebook">
                </a>
                <a href="mailto:youremail@example.com">
                    <img src="../images/gmail.png" alt="Email">
                </a>
            </div>
        </div>
    </div>
    
</footer>

<!-- Link to external CSS and JS -->
<link rel="stylesheet" href="../css/footer(nk).css">
<script src="../Hirenet/js/footer(nk).js"></script>

</html>