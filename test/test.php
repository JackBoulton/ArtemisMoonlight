<?php
include('session.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $_POST['txtTitle'];
    $postTitle = mysqli_real_escape_string($conn, $_POST['txtTitle']);
    $post = mysqli_real_escape_string($conn,$_POST['txtPost']);
    $topic = mysqli_real_escape_string($conn,$_POST['drpTopic']);
    $login_user = $_SESSION[login_user];
    echo $login_user . $postTitle . $post . $topic . $topicID;
    $sql ="SELECT topicID FROM topic WHERE topicName='$topic'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $topicID = $row['topicID'];
    
    //$sql="INSERT INTO post (charID, topicID, postTitle, topicName, post) VALUES ('$login_user','$topicID','$postTitle','$topic','$post')";
    $sql= "INSERT INTO post (charID, topicID, postTitle, topicName, post) VALUES ('15','1','anything','test1','test')";
    if(mysqli_query($conn,$sql)){
        $info = "Post successful";
    }
    else
    {
        $info = "Something went wrong trying to post";
    }
}
?>
<html>
    <head>
        <title>Create a post</title>
        <style type="text/css">
            body {
                font-family:Arial, Helvetica, sans-serif;
                font-size:14px;
            }
            label {
                font-weight:bold;
                width:100px;
                font-size:14px;
            }
            .box {
                border:#666666 solid 1px;
            }
        </style>
    </head>
    
    <body bgcolor = "#ffffff">
        <div align = "center">
            <div style="width:300px;border:solid 1px #333333;" align="left">
                <div style="background-color:#333333; color:#ffffff;padding:3px;"><b>Create a post</b></div>
                <div style="margin:30px">
                    <form action="" method="POST">
                        <label>Post Title: </label><input type="text" id="txtTitle" name="txtTitle" class="box"/><br/><br/>
                        <label>Post: </label><input type="text" name="txtPost" id="txtPost" class="box"/><br/><br/>
                        <label>Topic:</label>
                        <td>
                            <select id="drpTopic" name="drpTopic">
                                <option value="test1">Test1</option>
                                <option value="test2">Test2</option>
                                <option value="test3">Test3</option>
                            </select>
                        </td>    
                        <input type="submit" value="Submit"/><br/>
                        <div style="font-size:11px; color:#cc0000;margin-top:10px"><?php echo $info;?></div>
                        
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>