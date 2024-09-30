<?php
    include 'header(nk).php'; 
?>


<section class="intro-section">
    <h2>Welcome to Hirenet</h2>
    <p>
        Hirenet is your one-stop solution for job seekers and recruiters. Whether you're looking to advance your career or find top talent, our platform connects you with the right opportunities and people. Explore job listings, connect with employers, and take the next step in your professional journey.
    </p>
    </section>

    <!-- Job Post Slider Section -->
    <?php
// index.php

// Job postings data
$jobs = [
    [
        "title" => "Software Engineer",
        "company" => "Tech Solutions Inc.",
        "location" => "San Francisco, CA",
        "link" => "#"
    ],
    [
        "title" => "Graphic Designer",
        "company" => "Creative Minds Studio",
        "location" => "New York, NY",
        "link" => "#"
    ],
    [
        "title" => "Data Analyst",
        "company" => "DataWorks Ltd.",
        "location" => "Chicago, IL",
        "link" => "#"
    ],
    [
        "title" => "Marketing Manager",
        "company" => "BrandPro Marketing",
        "location" => "Austin, TX",
        "link" => "#"
    ]
];

// Function to display job posts
function display_jobs($jobs) {
    echo '<ul class="job-list">';
    foreach ($jobs as $job) {
        echo '<li class="job-item">';
        echo '<h2 class="job-title">' . $job["title"] . '</h2>';
        echo '<p class="company-name">' . $job["company"] . '</p>';
        echo '<p class="job-location">' . $job["location"] . '</p>';
        echo '<a class="apply-btn" href="' . $job["link"] . '">Apply Now</a>';
        echo '</li>';
    }
    echo '</ul>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings - Hirenet</title>
    <link rel="stylesheet" href="../Hirenet/css/homepage(nk).css">

<!--
    <style>
        /* CSS styles for the job listings */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
        }

        .job-list {
            list-style-type: none;
            padding: 0;
        }

        .job-item {
            background-color: white;
            margin: 15px 0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out;
        }

        .job-item:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .job-title {
            font-size: 24px;
            color: #333;
        }

        .company-name {
            color: #777;
        }

        .job-location {
            color: #555;
            font-size: 14px;
        }

        .apply-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0073e6;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .apply-btn:hover {
            background-color: #005bb5;
        }
    </style> -->
</head>
<body>

    <div class="container">
        <h1>Latest Job Listings</h1>

        <!-- Call the function to display jobs -->
        <?php display_jobs($jobs); ?>
    </div>




    <script src="../Hirenet/js/homepage(nk).js"></script>
</body>

    
<?php
    include 'footer(nk).php'; 
?>

