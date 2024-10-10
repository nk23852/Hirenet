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
        <img src="./images/logo.png" alt="Hirenet Logo">
    </div>
    <nav>
        <ul>
            <li><a href="./user/homenew.php">Home</a></li>
            <li><a href="./user/job(nk).php">Jobs</a></li>
            <li><a href="../kaveesha/insert.php">FAQ</a></li>
            <li><a href="../Hirenet/jobSeekerUser(nk).php">Profile</a></li>
        </ul>
    </nav>

    <div class="user-section">
        <img src="./images/pIcon.png" alt="User Icon" class="user-icon" style="width: 100px; height: 100px;">
        <button id="logoutBtn">Log out</button>
    </div>   

</header>

<body>
    <div class="container">
        <h1>Job Seeker Profile</h1>

        <form action="update_user.php" method="POST">
            <!-- Personal Information Section -->
            <div class="section">
                <h2>Personal Information</h2>
                <label for="fullName">Full Name</label>
                <input type="text" id="username" name="username" value="<?php echo $user['username']; ?>" required><br>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required><br>

                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" value="<?php echo $user['phone_number']; ?>" required><br>

            </div>


            <button type="submit" name="action" value="save">Save Profile</button>
            <button type="submit" name="action" value="delete" style="background-color: red; color: white;">Delete Profile</button>
        </form>


    </div>
    <script>
        
        document.getElementById('logoutBtn').addEventListener('click', function() {
            window.location.href = 'index.php'; 
        });
    </script>
</body>

</html>

<?php
include 'footer(nk).php';
?>