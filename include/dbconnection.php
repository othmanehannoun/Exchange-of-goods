<?php

$hostname  = "localhost";
$username  = "root";
$password  = "";
$dbname    = "exchange_db";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if(mysqli_connect_error()){
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "";
}
?>