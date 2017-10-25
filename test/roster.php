<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
    <link rel="shortcut icon" href="assets/fcCrest.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    <script type="text/javascript">
  <!--
  if (screen.width < 768) {
    window.location = "rosterMoblie.html";
  }
  //-->
</script>
    <title>Artemis Moonlight</title>
</head>

<body>
<div class="background-image"></div>
<div class="foreground">
<?php include ('configData.php');include('session.php');?>        <!--navbar-->
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
                <li class="dropdown active">
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
            <div class="panel-body panel-transparent"><p>This page refreshes once a week on Monday 00:01.</p></div>
                 <div id="roster" class="panel-body">

<!-- Check if jQuery has been loaded... -->
<script>
	window.jQuery || document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><\/script>')
</script>
<?php
include('config.php');
include('functions.php');
startTime();
$mysqli = startDBConnection( $db_server, $db_user, $db_pass, $db_database, $db_port );

// Fetch how many rows we have so we can fill the select box
$query = "SELECT COUNT(*) AS n FROM classinfo";
$res = $mysqli->query( $query );
if( !$res )
	die( $mysqli->error );
$obj = $res->fetch_object();
$rows = intval( $obj->n );
unset( $obj );
unset( $res );
print "<link rel='stylesheet' type='text/css' href='".curPageURL()."css/styleR.css'>
		<script type='text/javascript' src='".curPageURL()."js/jquery.tablesorter.min.js'></script>
		<script type='text/javascript' src='".curPageURL()."js/jquery.tablesorter.widgets.min.js'></script>
		<script type='text/javascript' src='".curPageURL()."js/jquery.tablesorter.pager.min.js'></script>";
pager( $rows );
echo "<table class='tablesorter'><thead><tr><th width='20%'>Name</th><th width='5%'>Rank</th>";

// Generate table headers (this is also a decent place to fill our max values, there's no point doing a for loop twice)
foreach( $classes as $data )
{
		echo "<th class='".$data['type']."' title='".ucwords( $data['name'] )."'><img src=".curPageURL().$data['image']."></th>";
		
		//Max query and array storage
		$query = "SELECT MAX( `".$data['name']."` ) AS n FROM classinfo";
		$res = $mysqli->query( $query );
		if( !$res )
			die( $mysqli->error );
		$obj = $res->fetch_object();
		$values[$data['name']] = intval( $obj->n );
		unset( $obj );
		unset( $res );
}
echo "</tr></thead><tbody>";

// Generate our query
$query = "SELECT * FROM classinfo";
if ( $result = $mysqli->query( $query ) )
{
	// We have our result, generate our table data
	foreach( $result as $row )
	{
		print "<tr>
		<td width='20%' title='".$row['name']."' style='text-align: left;'><img class='members' src='".$row['avatar_url']."'/> <a href=http://eu.finalfantasyxiv.com/lodestone/character/".$row['id']."/ target=_blank>".$row['name']."</a></td>
		<td>".$row['rank']."</td>";
		foreach( $classes as $data )
		{
			$row[$data['name']] == $values[$data['name']] ?	$num = "<b>".$row[$data['name']]."</b>" : $num = $row[$data['name']];
			echo "<td class=".$data['name']." style='text-align: center;'>$num</td>";
		}
		echo "</tr>";
	}
	unset( $result );
}
else
	die( $mysqli->error );

echo "</tbody></table>";

pager( $rows );
closeDBConnection( $mysqli );
endTime();
?>
<script type='text/javascript'>
	jQuery('table').tablesorter({
		widgets: ['zebra', 'columns'],
		sortInitialOrder: "desc"
	}).tablesorterPager({
		container: jQuery(".pager"),
		output: '{startRow} to {endRow} ({totalRows})',
		size: <?php echo $perPage; ?>,
		removeRows: true
	});
</script>

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