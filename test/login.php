<?php
   include('configData.php');
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $charNamel = mysqli_real_escape_string($conn,$_POST["txtUsername"]);
      $preHashl = mysqli_real_escape_string($conn,$_POST["txtPassword"]);
      $sql = "SELECT password FROM user WHERE charName = '$charNamel'";
       $result = mysqli_query($conn,$sql);
       $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       $hash = $row['password'];
       
if (password_verify($preHashl, $hash)) {
    $sql = "SELECT userID FROM user WHERE charName = '$charNamel' && password = '$hash'";
       $result = mysqli_query($conn,$sql);
       $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count == 1){
        $_SESSION["login_user"] = $row["userID"];
        header("location:dashboard.php");
    }
    else{
        $info = "Your login name or password is incorrect";
    }
} 
else {
    $info = "Your login name or password is incorrect";
}     
}
   mysqli_close($conn);
?>