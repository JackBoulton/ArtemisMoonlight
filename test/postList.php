<?php
   include('session.php');
   include('configData.php');
session_start();

   $sql = "SELECT post.postID, post.post, post.postTitle, topic.topicName, user.charName FROM post INNER JOIN user ON post.userID=user.userID INNER JOIN topic ON post.topicID=topic.topicID ORDER BY postID DESC;";
$result = mysqli_query($conn,$sql);
$i=0;
if (mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result)) {
    $userID = $_SESSION[login_user];
    $postID = $row['postID'];
    $charName = $row['charName'];
    echo "<form action = '' method = 'post'><h2>".$row['postTitle']."</h2>"."<h4>".$row['post']."</h4>"."By user: ".$row['charName']."<br>Topic: ".$row['topicName']."<br><br>". "<a class='btn btn-primary' role='button' data-toggle='collapse' href='#collapseExample".$i."' aria-expanded='false' aria-controls='collapseExample".$i."'>Show Comments</a>
<div class='collapse' id='collapseExample".$i."'>";
        
        $sqlCom = "SELECT comments.comment, user.charName FROM comments INNER JOIN user ON comments.userID=user.userID WHERE comments.postID = '$postID';";
        $resultCom = mysqli_query($conn,$sqlCom);
        if (mysqli_num_rows($resultCom) > 0){
        while($rowCom = mysqli_fetch_assoc($resultCom)) {
            echo "<div style='height:1px;width:auto;background-color:grey;margin:5px 0px;'></div><div><p style='color:grey'>".$rowCom['comment']."<br/>By User: ".$rowCom['charName']."</p></div>";
        }
        }
        echo "</div><br/><label>Comment </label><textarea style='color:grey' class='form-control' type = 'text' name = 'txtComment' class = 'box'></textarea><br><input class='btn btn-success' type = 'submit' value = ' Submit '/><input type='hidden' value='$postID' name='hPostID'/></form>";
        $i++;
}
}    
else {
    echo "0 results";
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $postID = $_POST["hPostID"];
    $comment = mysqli_real_escape_string($conn,$_POST["txtComment"]);
    $sql = "INSERT INTO comments (userID, postID, comment) VALUES ('$userID','$postID','$comment')";
    if(mysqli_query($conn, $sql)){
        $info = "Comment added";
    }
    else{
        $info = "Something went wrong";
    }
}
mysqli_close($conn);
?>