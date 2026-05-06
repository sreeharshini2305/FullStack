<?php
include "db.php";
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1){
    $row = mysqli_fetch_assoc($result);
    $plan = $row['plan'];

    if($plan=="Free"){
        header("Location: free.html");
    }
    elseif($plan=="Standard"){
        header("Location: standard.html");
    }
    else{
        header("Location: premium.html");
    }
}
else{
    echo "Invalid Login";
}
?>