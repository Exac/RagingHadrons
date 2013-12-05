<?php
class Twitch {
	private $streamlist;
	
	public function __construct() {
		$this->init();
		echo $this->check_get();
	}
	
	private function init() {
		$this->streamlist = "";
	}
	
	private function check_get() {
		// streamlist
		if(isset($_GET["streamlist"])){
			if(isset($_GET["streamlist_type"]) && isset($_GET["streamlist_wrapper"])){
				return $this->get_stream_list($_GET["streamlist_type"], $_GET["streamlist_wrapper"]);
			}else if(isset($_GET["streamlist_type"])){
				return $this->get_stream_list($_GET["streamlist_type"]);
			}else if(isset($_GET["streamlist_wrapper"])){
				return $this->get_stream_list($_GET["streamlist_wrapper"], false);
			}else{
				return $this->get_stream_list();
			}
		}
	}
	
	private function check_post() {
		// streamlist
		if(isset($_POST["streamlist"])){
			if(isset($_POST["streamlist_type"]) && isset($_POST["streamlist_wrapper"])){
				return $this->get_stream_list($_POST["streamlist_type"], $_POST["streamlist_wrapper"]);
			}else if(isset($_POST["streamlist_type"])){
				return $this->get_stream_list($_POST["streamlist_type"]);
			}else{
				return $this->get_stream_list("li", $_POST["streamlist_wrapper"]);
			}
		}
	}
	
	public function get_stream_list($type = "li", $wrapper = false) {
		$streamlist = $this->streamlist;
		
		//get list of streams IDs to show on the site
		$streamlist_arr = array();
		$streamlist_arr_promoted = array();
		
		include_once($_SERVER["DOCUMENT_ROOT"] . "/php/sql.php");#connect to MySQL db
	
		$query = "select streamname, promoted from twitch_channels";
		$result = mysql_query($query);
		if(!$result){
			die("<".$wrapper." style='color:red;'>".
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
		
		
		//output wrapper
		if($wrapper){
			$streamlist .= "<".$wrapper.">";
		}
		
		foreach($json_array as $i=>$js){
			//get USERNAME, USERLINK, USERLOGO		
			$streamlist .= '<'.$type.' title="'.$json_array[$i]['channel']['login'].' is live with '.(2 + $json_array[$i]['stream_count']).' viewers!">'.
				 '<a class="stream_link" href="http://www.twitch.tv/'.
				 $json_array[$i]['channel']['login']. '"></a>'.
				 '<span class="stream_username">'.
				 $json_array[$i]['channel']['login'].'</span>'.
				 '<span class="stream_userlogo" style="background-image:url(\''.$json_array[$i]['channel']['image_url_small'].'\');">'.
				 '</span>'.
				 '<span class="stream_preview" style="background-image:url(\''.$json_array[$i]['channel']['screen_cap_url_medium'].'\');">'.
				 '</span>'.
				 '<span class="stream_game">'.
				 $json_array[$i]['channel']['meta_game'].
				 '</span>'.
				 
				 '</'.$type.'>';
		}
		
		//output wrapper end-tag
		if($wrapper){
			$streamlist .= "</".$wrapper.">";
		}
		
		return $streamlist;
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
	
	
	//output wrapper
	if($_GET["streamlist_wrapper"]){
		$streamlist .= "<".$_GET["streamlist_wrapper"].">";
	}
	
	foreach($json_array as $i=>$js){
		//get USERNAME, USERLINK, USERLOGO		
		$streamlist .= '<'.$_GET['streamlist_type'].' title="'.$json_array[$i]['channel']['login'].' is live with '.(2 + $json_array[$i]['stream_count']).' viewers!">'.
			 '<a class="stream_link" href="http://www.twitch.tv/'.
			 $json_array[$i]['channel']['login']. '"></a>'.
			 '<span class="stream_username">'.
			 $json_array[$i]['channel']['login'].'</span>'.
			 '<span class="stream_userlogo" style="background-image:url(\''.$json_array[$i]['channel']['image_url_small'].'\');">'.
			 '</span>'.
			 '<span class="stream_preview" style="background-image:url(\''.$json_array[$i]['channel']['screen_cap_url_medium'].'\');">'.
			 '</span>'.
			 '<span class="stream_game">'.
			 $json_array[$i]['channel']['meta_game'].
			 '</span>'.
			 
			 '</'.$_GET['streamlist_type'].'>';
	}
	
	//output wrapper end-tag
	if($_GET["streamlist_wrapper"]){
		$streamlist .= "</".$_GET["streamlist_wrapper"].">";
	}
	
	return $streamlist;
}


?>