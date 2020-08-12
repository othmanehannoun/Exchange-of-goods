<?php 
session_start();
include '../include/dbconnection.php';

// Partier Login
if(isset($_POST['login'])){
    $email     =  $_POST['email'];
    $password  =  $_POST['password'];

    $query  = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        $_SESSION['user'] = mysqli_fetch_array($result);
        header("Location: Index.php");
    } else { echo "########" ;}
}

// Partier register
if(isset($_POST['register'])){
    $firstname   =  $_POST['fname'];
    $lastname    =  $_POST['lname'];
    $email       =  $_POST['email'];
    $phone       =  $_POST['phone'];
    $password    =  $_POST['password'];
    $c_password  =  $_POST['c_password'];

    if($password == $c_password){
        $stmt = $conn->prepare("INSERT Into users (firstname, lastname, email, phone, password) values(?,?,?,?,?)");
        $stmt->bind_param("sssis", $firstname, $lastname, $email, $phone, $password);
        $stmt->execute();
    }

    
}


?>