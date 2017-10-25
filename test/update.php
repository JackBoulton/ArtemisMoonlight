<?php
include('configData.php');
session_start();
function displayUser($conn,$login_user){
    $sql ="SELECT userID, charName, password FROM user WHERE userID ='$login_user'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    return $row;
}
function updatePass($conn,$login_user){        
    $myPassword = mysqli_real_escape_string($conn,$_POST["txtPassword"]);
    $passVeri = mysqli_real_escape_string($conn,$_POST["txtPassVeri"]);
if ($myPassword == $passVeri)
{
    $error = "Account successfully updated";
    $hash = password_hash($myPassword, PASSWORD_DEFAULT);
    
    $sql = "UPDATE user SET password = '$hash' WHERE userID = '$_SESSION[login_user]'";
    
    if(mysqli_query($conn,$sql)){
        $info = "Updated User Successfully";
        header("Location: dashboard.php");
    } else{
        $info = "Error Updating User" . mysqli_error($conn);
    }
    $info = "Password successfully updated";
    return $info;
}
else
{
    $info = "Passwords do not match";
    return $info;
}
}
function updateName($conn,$login_user){
    $charName = mysqli_real_escape_string($conn,$_POST["txtCharName"]);
    $sql = "UPDATE user SET charName = '$charName' WHERE userID = '$_SESSION[login_user]'";
    
    if(mysqli_query($conn,$sql)){
        $info = "Name updated successfully";
        header("Location: dashboard.php");
    } else{
        $info = "Error updating user";
    }
}


function deleteUser($conn, $login_user){
    $sql = "DELETE FROM user WHERE userID = '$_SESSION[login_user]'";
    if(mysqli_query($conn,$sql)){
        $info = "User deleted successfully";
        header("Location: logout.php");
    } else{
        $info = "Error deleting User: " .mysqli_error($conn);
    }
    return $info;
}

if(isset($_POST["updatePass"])){
    $info = updatePass($conn, $_SESSION["login_user"]);
}
else if(isset($_POST["updateName"])){
    $info = updateName($conn, $_SESSION["login_user"]);
}

else if (isset($_POST["delete"])){
    $info = deleteUser($conn, $_SESSION["login_user"]);
}
else
{
    $row = displayUser($conn, $_SESSION["login_user"]);
}
mysqli_close($conn);
?>