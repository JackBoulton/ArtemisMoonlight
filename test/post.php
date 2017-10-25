<?php
include('session.php');
include('configData.php');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $postTitle = mysqli_real_escape_string($conn, $_POST['txtTitle']);
    $post = mysqli_real_escape_string($conn,$_POST['txtPost']);
    $topicID = mysqli_real_escape_string($conn,$_POST['topic']);
    $login_user = $_SESSION[login_user];    
    $sql="INSERT INTO post (userID, topicID, postTitle, post) VALUES ('$login_user','$topicID','$postTitle','$post')";
    if(mysqli_query($conn,$sql)){
        $info = "Post successful";
    }
    else
    {
        $info = "Something went wrong trying to post";
    }
}
?>
<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
    <link rel="shortcut icon" href="assets/fcCrest.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    <title>Artemis Moonlight</title>
</head>

<body>
<div class="background-image"></div>
<div class="foreground">
    <!--navbar-->
<?php include ('configData.php'); include('session.php');?>
<div class="navbar transparent navbar-fixed-top foreground">
    <div class="ic_crest_64">
         <span alt="brand"><a href="index.html">
             <img src="assets/fcCrest.png" height="64" width="64"></img>
         </span>
    </div>
    <div class="fuckingMove">
        <p class="artMoon"><font color="a8fcb0">Artemis</font> <font color="74FDF5">Moonlight</font></p>
    </div></a>
        <!--dropdown menu-->          
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navHeaderCollapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    <div class="transparent collapse navbar-collapse navHeaderCollapse">
            <ul id="nav" class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="forum.php">Forum</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Roster <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="roster.php">Free Company Roster</a></li>
                        <li><a href="rosterRaid.php">Raid Group 1</a></li>
                        <li><a href="rosterRaid.php">Raid Group 2</a></li>
                    </ul>
                </li>
                <li><a href="apply.php">Apply</a></li>
                <li><a href="links.php">Useful Links</a></li>
                <?php if(!isset($_SESSION["login_user"])){ ?>
                <li><a href="#login" data-toggle="modal">Log in</a></li>
                <?php } else { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="logout.php">Log out</a></li>
                    </ul>
                </li>
                <?php } ?>
        </ul>
    </div>
</div>
    <!--navbar end-->
<div class="spacer"></div>
<div class="container foreground">
    <div class="row">
    <!--TeamSpeak channel-->
        <div class="col-md-2" id="TS3">
            <div class="container" style="position:fixed">
                <div id="vcv-b"><div id="vcv-l"><div class="hd"><img alt="Multiplay" src="http://commsviewer.com/imgs/multiplay.png" />&nbsp;<a href="http://commsviewer.com" target="_blank">Multiplay Voice Comms Viewer</a></div><div id="vcv-i">Loading... <img src="http://commsviewer.com/imgs/progress.gif" alt="Progress" /></div><div class="ft"><b>Need Voice Comms?</b>&nbsp;<a href="http://www.multiplaygameservers.com/voice-comms/" target="_blank">Multiplay's Voice Comms Servers!</a></div></div></div><script type="text/javascript"> var _vcv={cfg:'cvserverid=13721'}; (function() {var mp=document.createElement('style'); mp.type='text/css'; var s='#vcv-l{ border:1px solid #99BBE8; font-family:serif; font-family:tahoma,arial,verdana,sans-serif; -moz-box-shadow:2px 2px 5px rgba(0, 0, 0, 0.5); -webkit-box-shadow:2px 2px 5px rgba(0, 0, 0, 0.5); box-shadow:2px 2px 5px rgba(0, 0, 0, 0.5); width:300px; text-align:center; font-size:13px; color:#000;} #vcv-i{ background-color:#fff; padding:5px;} #vcv-l a, #vcv-l a:hover, #vcv-l a:visited { text-decoration:none; color:#15428B; font-weight:bold;} #vcv-l a:hover { text-decoration:underline; color:#15428B;} #vcv-l .hd,#vcv-l .ft{ background-color:#D2DFF0; padding:3px 5px;} #vcv-l .hd{ border-bottom:1px solid #99BBE8; text-align:left;} #vcv-l .ft{ border-top:1px solid #99BBE8; font-size:10px;} #vcv-l img{ border:0; vertical-align:sub;}'; if ( mp.styleSheet ) {mp.styleSheet.cssText=s;} else {mp.innerHTML=s;} var s=document.getElementsByTagName('head')[0]; s.appendChild(mp); mp=document.createElement('script'); mp.type='text/javascript'; mp.async=true; mp.src=('https:' == document.location.protocol ? 'https://' :'http://') + 'commsviewer.com/js/loader-min.js'; s=document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(mp, s);})(); </script><noscript id="vcv-ns">You need Javascript enabled to use <a href="http://commsviewer.com" target="_blank">Voice Comms Viewer</a></noscript>
            </div>
        </div>
    <!--Teamspeak End-->
        <div class="col-md-10">
            <div class="panel panel-primary panel-transparent">
                 <div class="panel-body">
                         <!--body context-->
                     <form action="" method="POST">
                        <div class="form-group">
                                    <label for="txtTitle" class="col-lg-2 control-label">Post Title: </label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="txtTitle"/>
                                    </div>
                                </div>
                        <div class="form-group">
                        <label for="txtPost" class="col-lg-2 control-label">Post: </label>
                        <div class="col-lg-10">
                            <textarea name="txtPost" class="form-control" rows="8"></textarea>
                        </div>
                    </div>
                         <div class="form-group">
                             <label for="topic" class="col-lg-2 control-label">Topic</label>
                             <div class="col-lg-10">
                         <div class="radio">
                            <label><input type="radio" name="topic" value="1">Content Guides</label>
                         </div>
                         <div class="radio">
                             <label><input type="radio" name="topic" value="2">Discussion</label>
                         </div>
                         <div class="radio">
                             <label><input type="radio" name="topic" value="3">Other</label>
                         </div>
                                 </div>
                             </div>
                        <button type="submit" class="btn btn-success">Submit</button><br/>
                        <div style="font-size:11px; color:#cc0000;margin-top:10px"><?php echo $info;?></div>
                        
                    </form>
                     <!--body end-->
                </div>
           </div>
        </div>
    </div>
</div>
<!--modal start-->
    <div class="modal fade" id="login" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
        <!--modal form start-->
                <form action="" method="post" class="form-horizontal">
                    <?php include('login.php'); echo $info;?>
                    <!--Log in-->
                            <div class="modal-header">
                                <h4 style="color:grey">Log In</h4>
                            </div>
                    <!--modal body-->
                            <div class="modal-body">
                            <!--name-->
                                <div class="form-group">
                                    <label for="txtUsername" style="color:grey;" class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="txtUsername" placeholder="Character Name"/>
                                    </div>
                                </div>
                            <!--email-->
                                <div class="form-group">
                                    <label for="txtPassword" style="color:grey;"class="col-lg-2 control-label">Password</label>
                                    <div class="col-lg-10">
                                        <input type="password" class="form-control" name="txtPassword"/>
                                    </div>
                                </div>
                            <!--contact -->                               
                            </div>
                    <!--modal footer-->
                            <div class="modal-footer">
                                <button class="btn btn-success" type="submit">Send</button>
                            </div>
                </form>
                <form action="" method="post" class="form-horizontal">
                    <?php include ('register.php');?>
                    <!--register-->
                    <div class="modal-header">
                                <h4 style="color:grey">Register</h4>
                    </div>
                    <!--modal body-->
                            <div class="modal-body">
                            <!--name-->
                                <div class="form-group">
                                    <label for="txtRegiUsername" style="color:grey;" class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control box" name="txtRegiUsername" placeholder="Character Name"/>
                                    </div>
                                </div>
                            <!--email-->
                                <div class="form-group">
                                    <label for="txtRegiPassword" style="color:grey;"class="col-lg-2 control-label">Password</label>
                                    <div class="col-lg-10">
                                        <input type="password" class="form-control box" name="txtRegiPassword"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="txtRegiPasswordConfirm" style="color:grey;"class="col-lg-2 control-label">Password</label>
                                    <div class="col-lg-10">
                                        <input type="password" class="form-control box" name="txtRegiPasswordConfirm"/>
                                    </div>
                                </div>
                            <!--contact -->                               
                            </div>
                    <!--modal footer-->
                            <div class="modal-footer">
                                <a class="btn btn-default" data-dismiss="modal">Close</a>
                                <button class="btn btn-success" type="submit">Send</button>
                            </div>
                    <?php echo $info;?>
        <!--modal form end-->            
                </form>
            </div>
        </div>
    </div>
    <!--modal end-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
<!--<html>
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
</html>-->