<?php
include "db.php";
session_start();

if(!isset($_SESSION['email'])){
    header("Location: index.html");
    exit();
}

$plan = $_POST['plan'];
$email = $_SESSION['email'];

$sql = "UPDATE users SET plan='$plan' WHERE email='$email'";

if(mysqli_query($conn, $sql)){
    header("Location: payment_success.html"); // ✅ go to payment success page
    exit();
}
else{
    echo "ERROR: " . mysqli_error($conn);
}
?>