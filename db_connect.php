<?php
$servername="localhost";
$username="root";
$password="";
$dbname="hirenetdb";


$conn = new mysqli($servername,$username,$password,$dbname);

//check

if ($conn -> connect_error){
    die("connestion Failed: ".$conn -> connect_error);
}

?>