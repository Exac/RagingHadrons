<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_maingrid_factory extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_news_list($item_quantity = 7)
	{
		$news_list = "";
		$query = $this->db->query("select article_id, article_title from news order by article_date desc limit ".$item_quantity);
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$news_list .= "<li><a href='/news/article/"
						   .$row->article_id
						   ."'>"
						   .$row->article_title
						   ."</a></li>\n";
			}
		}
		return $news_list;
	}

	public function get_posts_list($item_quantity = 4)
	{
		$post_list = "";
		$query = $this->db->query("select post_id, title from forum order by last_reply desc limit ".$item_quantity);
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$post_list .= "<li><a href='/forum/post/"
						   .$row->post_id
						   ."'>"
						   .$row->title
						   ."</a></li>\n";
			}
		}
		return $post_list;
	}

}

?>