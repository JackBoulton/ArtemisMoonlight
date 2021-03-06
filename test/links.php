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
<?php include ('configData.php');include('session.php');?>    <!--navbar-->
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
                <li class="active"><a href="links.php">Useful Links</a></li>
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
    <!--TeamSpeak channelww-->
        <div class="col-md-2" id="TS3">
            <div class="container" style="position:fixed">
                <div id="vcv-b"><div id="vcv-l"><div class="hd"><img alt="Multiplay" src="http://commsviewer.com/imgs/multiplay.png" />&nbsp;<a href="http://commsviewer.com" target="_blank">Multiplay Voice Comms Viewer</a></div><div id="vcv-i">Loading... <img src="http://commsviewer.com/imgs/progress.gif" alt="Progress" /></div><div class="ft"><b>Need Voice Comms?</b>&nbsp;<a href="http://www.multiplaygameservers.com/voice-comms/" target="_blank">Multiplay's Voice Comms Servers!</a></div></div></div><script type="text/javascript"> var _vcv={cfg:'cvserverid=13721'}; (function() {var mp=document.createElement('style'); mp.type='text/css'; var s='#vcv-l{ border:1px solid #99BBE8; font-family:serif; font-family:tahoma,arial,verdana,sans-serif; -moz-box-shadow:2px 2px 5px rgba(0, 0, 0, 0.5); -webkit-box-shadow:2px 2px 5px rgba(0, 0, 0, 0.5); box-shadow:2px 2px 5px rgba(0, 0, 0, 0.5); width:300px; text-align:center; font-size:13px; color:#000;} #vcv-i{ background-color:#fff; padding:5px;} #vcv-l a, #vcv-l a:hover, #vcv-l a:visited { text-decoration:none; color:#15428B; font-weight:bold;} #vcv-l a:hover { text-decoration:underline; color:#15428B;} #vcv-l .hd,#vcv-l .ft{ background-color:#D2DFF0; padding:3px 5px;} #vcv-l .hd{ border-bottom:1px solid #99BBE8; text-align:left;} #vcv-l .ft{ border-top:1px solid #99BBE8; font-size:10px;} #vcv-l img{ border:0; vertical-align:sub;}'; if ( mp.styleSheet ) {mp.styleSheet.cssText=s;} else {mp.innerHTML=s;} var s=document.getElementsByTagName('head')[0]; s.appendChild(mp); mp=document.createElement('script'); mp.type='text/javascript'; mp.async=true; mp.src=('https:' == document.location.protocol ? 'https://' :'http://') + 'commsviewer.com/js/loader-min.js'; s=document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(mp, s);})(); </script><noscript id="vcv-ns">You need Javascript enabled to use <a href="http://commsviewer.com" target="_blank">Voice Comms Viewer</a></noscript>
            </div>
        </div>
    <!--Teamspeak End-->
        <div class="col-md-10">
        <div style="color:white" class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-transparent panel-primary">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Combat</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
          <h3><a href="http://ffxiv.ariyala.com">Ariyala - Gear Builder</a></h3>
          <p>Plan your gear ahead of time with this gear builder. Find your best in slot and save the unique link so you can come back another time.</p>
          <h3><a href="http://ffxiv.ariyala.com/HuntTracker/Cerberus">Ariyala - Hunt Tracker</a></h3>
          <p>Fast track your iLvl by farming hunts and trading in your seals for gear upgrades. Track each hunt and search for those live</p>
          <h3><a href="http://forum.square-enix.com/ffxiv/forums/619-English-Forums">FFXIV Forums</a></h3>
          <p>Whilst this may not fall under just Combat, the forums are a treasure trove of information from the current tanking meta to live letter translations to buying houses. If you have a question, it's probably already been asked and answered.</p>
          <h3><a href="https://www.youtube.com/user/MTQcapture">Mizzteq/MTQCapture</a></h3>
          <p>Whilst she may have fell behind in Alexander, Mizzteq is one of the best dungeon guides out there. Short and consise with easy to ready diagrams and a voice light on the ears. If you're looking for a quick run down on a turn, a trial or a tower, Mizzteq's your gal. Find her Twitch channel <a href="http://www.twitch.tv/mtqcapture/profile">here.</a></p>
          <h3><a href="https://www.youtube.com/user/Xehanort1227">Mr Happy</a></h3>
          <p>He can waffle on but his videos are much more in depth and visit every aspect of the fight. If you find yourself missing information from a Mizzteq video then head straight over to Mr Happy to get all the info. Find his Twitch channel <a href="http://www.twitch.tv/mrhappy1227/profile">here.</a></p>
      </div>
    </div>
        </div>
            <div class="panel panel panel-transparent panel-primary">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Crafting and Gathering
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                    <h3><a href="http://ffxiv.ariyala.com/Gathering">Ariyala - Unspoiled Nodes</a></h3>
                    <p>Track unspoiled nodes with sound alerts and timers. Never miss a node again.</p>
                    <h3><a href="http://ffxivcrafting.com/">FFXIV Crafting/CAAS</a></h3>
                    <p>Calculate the exact amounts of materials you'll need, check up every recipe and keep on top of your levelling gear.</p>
                </div>
            </div>
        </div>
            <div class="panel panel-transparent panel-primary">
            <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Other
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                    <h3><a href="http://www.ffxivgardening.com/">FFXIV Gardening</a></h3>
                    <p>If you own a house, you probably own a garden too. Turn that soil into gil by planning ahead and eliminating trial and error.</p>
                    <h3><a href="http://chocoboconstructioncompany.com/">Chocobo Construction Company</a></h3>
                    <p>Look at furnishings before crafting them and decorate your perfect FC room or home.</p>
                    <h3><a href="https://docs.google.com/spreadsheets/d/1zbpG7GTwoogJpN1vJWu29KYcB0I9KA9Lk7OCd6VWTcU/htmlview?sle=true">FFXIV Loot list</a></h3>
                    <p>With the weekly restrictions on what feels like everthing, plan ahead with the loot list with information on what drops from where in every duty from ilvl 60 gear!</p>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
    </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>