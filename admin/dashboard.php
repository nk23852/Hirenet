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
    </div>

</header>  
                <div class="card">
                    <h2 class ="main-text">Dashboard</h2>
                    <h3 class ="sub-text">Control panel</h3>
                        <div class="order-btn"  >
                            <a href="job_posting.php"><button type="submit" name='job_posting'>Job Posting</button></a>
                            <a href="../terms&conditions/terms&conditions(dev).php"><button type="submit" name='terms' >Terms & Conditions</button></a>

                                   
					   </div>
                </div>   
            
                             
    </body>
</html>