<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_streams extends CI_Model
{
	private $streams;
	private $online_streams;
	private $online_streams_json; #foreach($json_array as $i=>$js)
	private $avaliable = true;
	
	public $stream_data;
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_featured_stream()
	{
		$this->set_rh_streams();
		
		$priority_order = array();
		
		foreach($this->online_streams_json as $js)
		{
			foreach($this->streams as $streams)
			{
				if($streams['streamname'] == $js['channel']['login']) #if chosen stream is promoted
				{
					if(!$streams['promoted'])
					{
						array_push($priority_order, $js); #put non-promoted streams last
					}else{
						array_unshift($priority_order, $js); #put promoted streams first
					}
				}
			}
		}
		
		#the featured stream will be the first stream in $priority_order
		$stream_data = array();
		
		foreach($priority_order as $po)
		{
			$stream_data['object'] = '<object type="application/x-shockwave-flash" height="480px" width="100%" id="live_embed_player_flash" data="http://www.twitch.tv/widgets/live_embed_player.swf?channel='.$po['channel']['login'].'" bgcolor="#000000"><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><param name="allowNetworking" value="all" /><param name="movie" value="http://www.twitch.tv/widgets/live_embed_player.swf" /><param name="flashvars" value="hostname=www.twitch.tv&channel='.$po['channel']['login'].'&auto_play=true&start_volume=25" /></object>';
			$stream_data['object_chat'] = '<iframe class="stream_chat" src="http://www.twitch.tv/chat/embed?channel='.$po['channel']['login'].'&popout_chat=true" seamless></iframe>';
			$stream_data['title'] = htmlentities($po['title']);
			$stream_data['name'] = htmlentities($po['channel']['login']);
			$stream_data['background'] = htmlentities($po['channel']['image_url_huge']);
			$stream_data['ss'] = $po['channel']['screen_cap_url_large'];
			$this->stream_data[] = $stream_data;
		}
		
		return $this->stream_data[0];
		
	}
	
	public function set_rh_streams()
	{
		$this->streams = array(array());
		
		//first list the streams we are going to use
		$query = $this->db->query("select streamname, promoted from twitch_channels");
		$index = 0;
		foreach($query->result() as $row) //foreach($query->result as $index => $row)
		{
			$this->streams[$index]['streamname'] = $row->streamname;
			
			if($row->promoted == 0)
			{
				$this->streams[$index]['promoted'] = true;
			}else{
				$this->streams[$index]['promoted'] = false;
			}
			
			$index++;
		}
		
		//second, get the list of current streams from twitch.tv
		$user_grab = "http://api.justin.tv/api/stream/list.json?channel=raginghadrons";
		foreach($this->streams as $i => $value)
		{
			$user_grab .= ",".$value['streamname'];
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
		$json_file = file_get_contents($user_grab, 0, $context, null);
		$json_array = json_decode($json_file, true);
		
		$num_streams = 0;
		foreach($json_array as $i=>$js){
			$num_streams++;	
			$this->online_streams[] = $json_array[$i]['channel']['login'];
		}
		$this->online_streams_json = $json_array;
		if($num_streams == 0){
			$this->avaliable = false;
			return false;//no streams live
		}
		
	}
	
	public function get_stream_list() {
		//get list of streams IDs to show on the site
		$streamlist_arr = array();
		
		include_once($_SERVER["DOCUMENT_ROOT"] . "/php/sql.php");#connect to MySQL db
	
		$query = "select streamname, promoted from twitch_channels";
		$result = mysql_query($query);
		if(!$result){
			die("<".$wrapper." style='color:red;'>".
			mysql_error()."<br/>".$query."</".$_GET["streamlist_wrapper"].">");
		}
		while($row = mysql_fetch_assoc($result)){
			$streamlist_arr[] =  $row["streamname"];
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
		
		$num_streams = 0;
		foreach($json_array as $i=>$js){
			$num_streams++;
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
		
		$streamlist .= "<{$type} style=\"display:none;\" id=\"num_streams\" data-num-streams=\"{$num_streams}\"></{$type}>";
		
		return $streamlist;
	}

}

?>