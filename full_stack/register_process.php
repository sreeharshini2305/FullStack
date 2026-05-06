<?php
include "db.php";
session_start();   

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";

if(mysqli_query($conn,$sql)){
    $_SESSION['email'] = $email;   
    header("Location: plan.html");
}
else{
    echo "Error: " . mysqli_error($conn);
}
?>