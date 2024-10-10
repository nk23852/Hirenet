<?php
session_start();
include 'db_connect.php';

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM users WHERE user_id = $user_id";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "Error: User not found or query failed.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Seeker Profile - Hirenet</title>
    <link rel="stylesheet" href="../Hirenet/css/header3(nk).css">
    <link rel="stylesheet" href="../Hirenet/css/juser.css">
</head>

<header>
    <div class="logo">
        <img src="../Hirenet/images/logo.jpg" alt="Hirenet Logo">
    </div>
    <div class="site-name">Hirenet</div>
    <nav>
        <ul>
            <li><a href="../Hirenet/user/homenew.php">Home</a></li>
            <li><a href="./job(nk).php">Jobs</a></li>
            <li><a href="../kaveesha/insert.php">FAQ</a></li>
            <li><a href="../jobSeekerUser(nk).php">Profile</a></li>
        </ul>
    </nav>

    <div class="user-section">
        <img src="../Hirenet/images/219983.png" alt="User Icon" class="user-icon">
        <button id="logoutBtn" onclick="window.location.href='../HIRENET/homepage(nk).php';">Log out</button>
    </div>
</header>

<body>
    <div class="container">
        <h1>Job Seeker Profile</h1>

        <form method="POST" enctype="multipart/form-data">
            <!-- Personal Information Section -->
            <div class="section">
                <h2>Personal Information</h2>
                <label for="fullName">Full Name</label>
                <input type="text" id="username" name="username" value="<?php echo $user['username']; ?>" required><br>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required><br>

                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" value="<?php echo $user['phone_number']; ?>" required><br>

                <label for="cv">Uploaded CV:</label>
                <?php if (!empty($user['cv'])): ?>
                    <div class="cv-section">
                        <h2>Your CV</h2>
                        <embed src="<?php echo 'uploads/cvs/' . urlencode($user['cv']); ?>" width="600" height="500" type="application/pdf">
                    </div>
                <?php else: ?>
                    <p>No CV uploaded yet.</p>
                <?php endif; ?>


            </div>


            <button type="submit">Save Profile</button>
        </form>


    </div>
</body>

</html>

<?php
include 'footer(nk).php';
?>