<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_news_author extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function get_name($article_id = 0)
	{
		return $this->get($this->get_author_id($article_id), "name");
	}
	
	public function get_avatar($article_id = 0)
	{
		return "/upload/user/".$this->get($this->get_author_id($article_id), "avatar");
	}
	
	public function get_tag($article_id = 0)
	{
		$author_id = $this->get_author_id($article_id);
		
		return $this->get($author_id, "tag");
	}
	
	private function get_author_id($article_id)
	{
		$author_id = "";
		$query = $this->db->query("select author_id from news where article_id = '{$article_id}'");
		
		foreach($query->result() as $row)
			{
				$author_id = reset($row);
			}
		
		return $author_id;
	}
	
	private function get($author_id, $col = "name")
	{
		$get_item = "";
		if($author_id > 0)
		{
			$query = $this->db->query("select {$col} from users where id = '{$author_id}'");
		}else{
			$query = $this->db->query("select {$col} from users where id = '1'");
		}
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$get_item .= reset($row); //print first item in array
			}
		}else{return 'Error: M_news_author->get() failed to return results. '.$author_id."<br/>";}
		
		return $get_item;
	}
}
?>