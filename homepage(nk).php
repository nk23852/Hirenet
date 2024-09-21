<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hirenet</title>
    <!-- Link to external CSS -->
    <link rel="stylesheet" href="../Hirenet/css/header(nk).css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="../Hirenet/images/logo.jpg" alt="Hirenet Logo">
        </div>
        <div class="site-name">Hirenet</div>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="jobs.php">Jobs</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="faq.php">FAQ</a></li>
            </ul>
        </nav>
        <div class="buttons">
            <button id="recruiterBtn">Job Recruiter</button>
            <button id="seekerBtn">Job Seeker</button>
        </div>
    </header>

    <section class="intro-section">
    <h2>Welcome to Hirenet</h2>
    <p>
        Hirenet is your one-stop solution for job seekers and recruiters. Whether you're looking to advance your career or find top talent, our platform connects you with the right opportunities and people. Explore job listings, connect with employers, and take the next step in your professional journey.
    </p>
    </section>

    <!-- Job Post Slider Section -->
    <section class="job-slider">
        <h2>Featured Jobs</h2>
        <div class="slider-container">
            <button class="prev" id="prevBtn">&#10094;</button>
            <div class="job-posts" id="jobPosts">
                <div class="job-post">
                    <h3>Software Developer</h3>
                    <p>Company: ABC Corp</p>
                    <p>Location: New York, NY</p>
                    <p>Salary: $80,000 - $100,000</p>
                    <a href="#">View Details</a>
                </div>
                <div class="job-post">
                    <h3>Data Analyst</h3>
                    <p>Company: XYZ Inc</p>
                    <p>Location: San Francisco, CA</p>
                    <p>Salary: $70,000 - $90,000</p>
                    <a href="#">View Details</a>
                </div>
                <div class="job-post">
                    <h3>UI/UX Designer</h3>
                    <p>Company: DesignPro</p>
                    <p>Location: Remote</p>
                    <p>Salary: $60,000 - $85,000</p>
                    <a href="#">View Details</a>
                </div>
                <div class="job-post">
                    <h3>Product Manager</h3>
                    <p>Company: InnovateTech</p>
                    <p>Location: Seattle, WA</p>
                    <p>Salary: $90,000 - $120,000</p>
                    <a href="#">View Details</a>
                </div>
            </div>
            <button class="next" id="nextBtn">&#10095;</button>
        </div>
    </section>


    <!-- Link to external JS -->
    <script src="../Hirenet/js/header(nk).js"></script>
</body>
</html>
