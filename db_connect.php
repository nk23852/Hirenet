<?php
$servername="localhost";
$username="root";
$password="";
$dbname="hirenetdb";

//create connection

$conn = new mysqli($servername,$username,$password,$dbname);

//check

if ($conn -> connect_error){
    die("connestion Failed: ".$conn -> connect_error);
}
else{
    echo"connection succeeded";
}

?>