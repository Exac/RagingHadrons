<?php

//return "hello World" for anything
echo "default.php\n";




//detect get vars
if($_GET["streamlist"]){
	if(!isset($_GET["streamlist_type"])){
		$_GET["streamlist_type"] = "li";
	}
	
	//get list of streams IDs to show on the site
	$streamlist_arr;
	//get list of live twitch stream IDs
	$streamlist_twitch_arr;
	//match lists
	$streamlist_live = array_intersect($streamlist_arr, $streamlist_live);
	
	foreach($streamlist_live as $livestreams){
		//get USERNAME, USERLINK, USERLOGO
		echo '<'.$_GET['streamlist_type'].'>'.
			 '<span class="stream_username">'.$username.'</span>'.
			 '<span class="stream_userlogo">'.$userlogo.'</span>'.
			 '<a class="stream_link" href="http://STREAMLINK">'.$userlink.'</a>'.
			 '</'.$_GET['streamlist_type'].'>';
	}
}

?>