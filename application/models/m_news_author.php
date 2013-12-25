<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_news_author extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function get_name($author_id = 0)
	{
		return $this->get($author_id, "name");
	}
	
	public function get_avatar($author_id = 0)
	{
		return "/upload/user/".$this->get($author_id, "avatar");
	}
	
	public function get_tag($author_id = 0)
	{
		return $this->get($author_id, "tag");
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