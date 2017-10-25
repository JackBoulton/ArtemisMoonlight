<?php
   include('session.php');
   include('configData.php');

   $sql = "SELECT userID, charName, password FROM user WHERE userID = '$_SESSION[login_user]' ";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   mysqli_close($conn);
?>
<?php include('update.php'); ?>
<!--<html>
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome </h1>
      <h2><a href="update.php">Update Details</a></h2>
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>-->

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
                <li><a href="forum.php">Forum</a></li>
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
                <li class="active dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="logout.php">Log out</a></li>
                    </ul>
                </li>
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
                    <h1>Welcome <?php echo $row["charName"];?></h1>
            <div class="panel panel-transparent panel-primary">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Update information</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
          <h3>Update Name</h3>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
              <label>Name: </label><input style="position:relative; left:100px; color:black;" type="text" name="txtCharName"/><br/><?php echo $info;?><br/><button class="btn btn-success" type="submit" name="updateName">Update</button></form>
          <h3>Update Password</h3>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
              <label>Password: </label><input style="position:relative;left:75px;color:black;" type="password" name="txtPassword"/><br/><label>Retype Password: </label><input style="position:relative; left:25px;color:black;" type="password" name="txtPassVeri"/><br/><br/><button class="btn btn-success" type="submit" name="updatePass">Update</button></form>
      </div>
    </div>
</div>
                     <div class="panel panel-transparent panel-primary">
            <div class="panel-heading" role="tab" id="headingTwoe">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Delete User</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
              <button class="btn btn-success" type="submit" name="delete">Delete</button></form>
      </div>
    </div>
</div>
                     <!--body end-->
                </div>
           </div>
        </div>
    </div>
</div>
<!--modal start-->
    <!--modal end-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>