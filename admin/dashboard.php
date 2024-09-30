<?php
//session_start();

// Check if the user is logged in
/*if ($_SESSION['user_type'] !== 'admin') {
    echo "<p>Access denied.</p>";
    exit();
}*/ 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>My Account</title>
        <link rel="stylesheet" href="../css/admindashboard.css">
    </head>
    <body>

<header>
    
    <div class="header">
        <h1>Hirenet</h1>
        <nav>
            <a href="dashboard.php">Main Menu</a>
            <a href="../login(nk).php">Login</a>
        </nav>
    </div>

</header>  
                <div class="card">
                    <h2 class ="main-text">Dashboard</h2>
                    <h3 class ="sub-text">Control panel</h3>
                        <div class="order-btn"  >
                            <a href="user_add_remove.php"><button type="submit" name='user'>Job Posting</button></a>
                            <a href="products.php"><button type="submit" name='history' >Terms & Conditions</button></a>
                            <a href="ordersmgt.php"><button type="submit" name='history' >Inquiry</button></a>
                                   
					   </div>
                </div>   
            
            <!-- <footer class="footer">
                 2024 Book Shop. Powered by Hesanda
            </footer> -->
                             
    </body>
</html>