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
			$this->db->query("select * from forum where post_id = '{$p}'");
		}
		
	}
	
}

?>