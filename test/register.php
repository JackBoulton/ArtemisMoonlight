<?php
include('configData.php');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    //username and password send from form
    $charNamer = mysqli_real_escape_string($conn,$_POST["txtRegiUsername"]);
    $mypasswordr = mysqli_real_escape_string($conn,$_POST["txtRegiPassword"]);
    $mypasswordConfirmr = mysqli_real_escape_string($conn,$_POST["txtRegiPasswordConfirm"]);    
if($charNamer !== "")
{
    $passHashr = password_hash($mypasswordr, PASSWORD_DEFAULT);
    if ($mypassword == $mypasswordConfirm){
    $sql = "INSERT INTO user (charName, password) VALUES ('$charNamer','$passHashr')";
        
        if(mysqli_query($conn, $sql)){
            $info = "User successfully created!";
        } else{
            $info ="Unable to add user!";
        }
    }
    else{
        $info ="Passwords do not match!";
    }
}
}
?>