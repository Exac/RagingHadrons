<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_news_article extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_post_previews($num_posts)
	{
		for($p = /*current_post*/; )
		{
			$this->db->query("SELECT forum.title, forum.post_id, forum.last_reply, users.id, users.name FROM forum INNER JOIN users ON forum.author_id=users.id ORDER BY forum.last_reply DESC LIMIT {$num_posts}'");
		}
		
	}
	
}

?>