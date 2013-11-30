<?php

//return "hello World" for anything
echo "default.php\n";

//detection
if($_GET["streamlist"]){echo get_stream_list();}

//get twitch.tv streams
function get_stream_list(){
	$streamlist = "";
	//default list-item is <li>
	if(!isset($_GET["streamlist_type"])){
		$_GET["streamlist_type"] = "li";
	}
	//default list-wrapper is nothing
	if(!isset($_GET["streamlist_wrapper"])){
		$_GET["streamlist_wrapper"] = false;
	}
	
	//get list of streams IDs to show on the site
	$streamlist_arr = array();
	//get list of live twitch stream IDs
	$streamlist_twitch_arr = array();
	//match lists
	$streamlist_live = array_intersect($streamlist_arr, $streamlist_twitch_arr);
	//output wrapper
	if($_GET["streamlist_wrapper"]){
		$streamlist .= "<".$_GET["streamlist_wrapper"].">";
	}
	foreach($streamlist_live as $livestreams){
		//get USERNAME, USERLINK, USERLOGO
		$streamlist .= '<'.$_GET['streamlist_type'].'>'.
			 '<span class="stream_username">'.$username.'</span>'.
			 '<span class="stream_userlogo">'.$userlogo.'</span>'.
			 '<a class="stream_link" href="http://STREAMLINK">'.$userlink.'</a>'.
			 '</'.$_GET['streamlist_type'].'>';
	}
	//output wrapper end-tag
	if($_GET["streamlist_wrapper"]){
		$streamlist .= "</".$_GET["streamlist_wrapper"].">";
	}
	
	return $streamlist;
}

?>