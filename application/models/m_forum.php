<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_forum extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_post_previews($page, $num_posts)
	{
		$post_preview = '<ul class="post_preview">';
		
		if($page != 0)
		{
			
		}
		
		$query = $this->db->query("SELECT forum.title, forum.post_id, forum.last_reply, SUBSTRING(forum.content, 1, 150) as content, users.id, users.name FROM forum INNER JOIN users ON forum.author_id=users.id ORDER BY forum.last_reply DESC LIMIT {$num_posts}");
		foreach($query->result() as $row)
		{
			$post_preview .= "<li>". "<a href='/forum/post/{$row->post_id}'>" .$row->title."</a><span class='age'>".$this->human_timing(strtotime($row->last_reply))." old</span><span class='excerpt'>".strip_tags($row->content)."...</span></li>";
		}
		$post_preview .= "</ul>";
		
		return $post_preview;
	}
	
	private function human_timing ($time)
	{
		$time = time() - $time;
	
		$tokens = array (
			31536000 => 'year',
			2592000 => 'month',
			604800 => 'week',
			86400 => 'day',
			3600 => 'hour',
			60 => 'minute',
			1 => 'second'
		);
	
		foreach ($tokens as $unit => $text) {
			if ($time < $unit) continue;
			$numberOfUnits = floor($time / $unit);
			return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
		}
	}
	
}

?>