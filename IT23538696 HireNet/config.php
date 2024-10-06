<?php                                                            //RPNS Pathiranage IT23538696
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hirenetdb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
