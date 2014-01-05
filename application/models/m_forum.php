<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_forum extends CI_Model
{
	public $next = 0;
	public $previous = 0;
	
	public $name, $tag, $avatar, $title, $post_id, $content, $created;
	public $replies;
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function load($post_id = 1) #load a post
	{
		 
		if(!is_numeric($post_id)){
			return $this->load(1);
		}
		
		$query = $this->db->query("	select users.username as name, users.company as tag, users.last_name as avatar, sf.title, sf.post_id, sf.content, sf.created from 
										(select *
										from forum
										where forum.post_id={$post_id}) as sf
									inner join users on sf.author_id = users.id");
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$this->name = $row->name;
				$this->tag = $row->tag;
				$this->avatar = $row->avatar;
				$this->title = $row->title;
				$this->post_id = $row->post_id;
				$this->content = $row->content;
				$this->created = $row->created;
			}
		}
		
		$this->load_replies($post_id);
	}
	
	private function load_replies($post_id)
	{
		$query = $this->db->query("	select * from
									(select forum_replies.post_id, forum_replies.user_id, forum_replies.content, forum_replies.posted
									from forum_replies
									where forum_replies.post_id = {$post_id}) as fr
									inner join users on users.id=fr.user_id");
		if($query->num_rows() > 0)
		{
			$index = 0;
			foreach($query->result() as $row)
			{
				$reply[$index]["posted"] = $row->posted;
				$reply[$index]["content"] = $row->content;
				$reply[$index]["commenter_name"] = $row->username;
				$reply[$index]["commenter_id"] = $row->id;
				$reply[$index]["commenter_tag"] = $row->company;
				$index++;
			}
		}else{
			$reply[0]["posted"] = "";
			$reply[0]["content"] = "No replies yet.";
			$reply[0]["commenter_name"] = "";
			$reply[0]["commenter_id"] = "";
			$reply[0]["commenter_tag"] = "";
		}
		
		$this->replies = $reply;
	}
	
	public function get_post_previews($page, $num_posts)
	{
		$post_preview = '<ul class="post_preview">';
		
		if($page >= 1)
		{
			$sql_range = ($num_posts * $page).", ".(($num_posts * $page) + $num_posts);
		}else{
			$sql_range = $num_posts;
		}
		
		$query = $this->db->query("SELECT forum.title, forum.post_id, forum.last_reply, 
									SUBSTRING(forum.content, 1, 150) as content, 
									users.id, users.username as name 
									FROM forum 
									INNER JOIN users ON forum.author_id=users.id 
									ORDER BY forum.last_reply 
									DESC LIMIT {$sql_range}");
		if($query->num_rows() > 0)
		{
			$this->next = $page + 1;
			$this->previous = $page - 1;
			
			foreach($query->result() as $row)
			{
				$post_preview .= "<li>". "<a href='/forum/post/{$row->post_id}'></a><span class='post_name'>{$row->title}</span><span class='age'>".$this->human_timing(strtotime($row->last_reply))." old</span><span class='excerpt'>".strip_tags($row->content)."...</span></li>";
			}
			$post_preview .= "</ul>";
		}else{
			#find the last viable page
			$query = $this->db->query("select count(*) as num from forum");
			$row = $query->row();
			$last_page = floor($row->num / $num_posts);
			#$last_page_num_posts = $row->num % $num_posts;
			
			$this->next = $last_page;
			$this->previous = $last_page - 2;
			
			return "<span class='error'>Page {$last_page} is the last page.</span>\n".$this->get_post_previews($last_page, $num_posts);
		}
		
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