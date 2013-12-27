<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_news_article extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_article($article_id = 0)
	{
		return $this->get($article_id, "article");
	}
	
	public function get_featured_image($article_id = 0)
	{
		return "/upload/news/".$this->get($article_id, "article_featured_image");
	}
	
	public function get_title($article_id = 0)
	{
		return $this->get($article_id, "article_title");
	}
	
	public function get_date($article_id = 0)
	{
		return date("M j, Y", strtotime($this->get($article_id, "article_date") ) );
	}
	
	public function get_last($article_id = 0)
	{
		return $this->article_move($article_id, 1);
	}
	
	public function get_next($article_id = 0)
	{
		return $this->article_move($article_id, -1);
	}
	
	private function article_move($id, $move_by)
	{
		$first = 1;
		
		$query = $this->db->query("select max(article_id) from news");
		foreach($query->result() as $row)
		{
			$last = reset($row);
		}
		
		if($id == $last || $id == $next)
		{
			return $id."#end";
		}
		
		if($id < $first)
		{
			return $last;
		}
		else if ($id > $last)
		{
			return $first;
		}
		else
		{
			return $id - $move_by;
		}
		
		return 1;
	}
	
	private function get($article_id, $col = "title")
	{
		$get_item = "";
		
		if($this->is_valid_article_id($article_id))
		{
			$query = $this->db->query("select {$col} from news where article_id = '{$article_id}' limit 1");
		}else{
			//get the newest article
			$query = $this->db->query("select {$col} from news order by article_date desc limit 1");
		}
		
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$get_item .= reset($row); //print first item in array
			}
		}else{return 'Error: M_news_article->get() failed to return results.';}
		
		return $get_item;
	}
	
	private function is_valid_article_id($article_id)
	{
		//if id = 0, get the newest article.
		$query = $this->db->query("select count(*) as num_articles from news");
		$row = $query->row();
		
		$num_articles = $row->num_articles;
		
		if(is_numeric($article_id) && $article_id > 0 && $article_id < $num_articles)
		{
			return true;
		}
		return false;
	}
}

?>