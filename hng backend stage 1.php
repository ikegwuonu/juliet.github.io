<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="hng.php?slack_name=juliet ikegwuonu&track=backend"><button type="submit" method="get">send</button></a>
</body>
</html>

<?php

if (isset($_GET['slack_name'])) {
	# code...

	$me=new stdClass();
	$me->slack_name = $_GET['slack_name'];
	$me->current_day= date("l");
	$me->utc_time=  gmdate("Y-m-d H:i:s ");
	$me->track = $_GET['track'];
	$me->github_file_url="j";
	$me->github_repo_url="g";
	$me->status_code=200;
	$myJSON = json_encode($me);
	
	echo $myJSON;
}
 ?>
 
