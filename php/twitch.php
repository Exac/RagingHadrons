<?php

function get_url_contents($url){
    $crl = curl_init();
    $timeout = 5;
    curl_setopt ($crl, CURLOPT_URL,$url);
    curl_setopt ($crl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($crl, CURLOPT_CONNECTTIMEOUT, $timeout);
    $ret = curl_exec($crl);
    curl_close($crl);
    return $ret;
}

function post_url_contents($url, $fields) {

    foreach($fields as $key=>$value) { $fields_string .= $key.'='.urlencode($value).'&'; }
    rtrim($fields_string, '&');

    $crl = curl_init();
    $timeout = 5;

    curl_setopt($crl, CURLOPT_URL,$url);
    curl_setopt($crl,CURLOPT_POST, count($fields));
    curl_setopt($crl,CURLOPT_POSTFIELDS, $fields_string);

    curl_setopt ($crl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($crl, CURLOPT_CONNECTTIMEOUT, $timeout);
    $ret = curl_exec($crl);
    curl_close($crl);
    return $ret;
}

//checks if player streams are online
function onlinecheck($live, $viewers){  
	//If the variable online is not equal to null, there is a good change this person is currently streaming
	if ($live != null){
		echo '<a href="http://www.twitch.tv/'.$live.'"> ".
		"<strong>'.$live.'</strong></a>';
		echo '&nbsp <img src="/images/online.png">".
		"<strong> Status:</strong> Online! </br>'; 
		echo '<img src="/images/viewers.png">".
		"<strong>Viewers:</strong> &nbsp' .
		$viewers.'</br>';
	}
}
	
//This funcion add's online channel names to the checked online array
function signin($person){
	if($person != null){
		return $person;
	}else{
		return null;
	}
}

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
	$streamlist_arr_promoted = array();
	
	include_once($_SERVER["DOCUMENT_ROOT"] . "/php/sql.php");#connect to MySQL db
	
	$query = "select streamname, promoted from twitch_channels";
	$result = mysql_query($query);
	if(!$result){
		die("<".$_GET["streamlist_wrapper"]." style='color:red;'>".
		mysql_error()."<br/>".$query."</".$_GET["streamlist_wrapper"].">");
	}
	while($row = mysql_fetch_assoc($result)){
		$streamlist_arr[] =  $row["streamname"];
		$streamlist_arr_promoted[] = $row["promoted"]; //BTI 0 or 1 (0=promoted)
	}
	
	//get list of live twitch stream IDs
	$streamlist_twitch_arr = array();
	
	$userGrab = "http://api.justin.tv/api/stream/list.json?channel=raginghadrons";
	
	foreach($streamlist_arr as $i =>$value){
		$userGrab .= ",";
		$userGrab .= $value;
	}
	unset($value);
	
	// Customize headers and get stream list
	$opts = array(
	  'http'=>array(
		'method' => "GET",
		'header' =>	"Accept-language: en\r\n" .
					"Accept: application/vnd.twitchtv.v2+json" .
					"x-api-version: 2\r\n".
					"Client-ID: do17chojf6qhk12fjqnxlcgfzd1aeot\r\n"
	  )
	);
	$context = stream_context_create($opts);
	//grabs the channel data from twitch.tv streams
	$json_file = file_get_contents($userGrab, 0, $context, null);
	$json_array = json_decode($json_file, true);
	
	$streamlist_live = array( # 0,1,2...
		array(), #login 'rhexact', 'raginghadrons'...
		array(), #channel_url 'twitch.tv/rhexact', 'twitch.tv/mlg'
		array(), #meta_game 'Hearthstone'
		array(), #image_url_small 'http://profile-image-70x70.png'
		array()  #screen_cap_url_medium '/live_user_rhexact-320x240.jpg
	);
	
	foreach($json_array as $i=>$js){
		$streamlist_live[] = $json_array[$i]['channel']['login'];
	}
	
	unset($value);
	unset($i);
	
	//output wrapper
	if($_GET["streamlist_wrapper"]){
		$streamlist .= "<".$_GET["streamlist_wrapper"].">";
	}
	foreach($streamlist_live as $livestreams){
		//get USERNAME, USERLINK, USERLOGO
		$streamlist .= '<'.$_GET['streamlist_type'].'>'.
			 '<span class="stream_username">'.$username.'</span>'.
			 '<span class="stream_userlogo">'.$userlogo.'</span>'. #http://static-cdn.jtvnw.net/previews/live_user_rhexact-200x112.jpg
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