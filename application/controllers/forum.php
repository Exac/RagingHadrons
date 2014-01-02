<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forum extends CI_Controller {
	
	private $page;
	
	public function index($page = 0) #/forum/
	{
		$this->page = $page;
		$data["previous_enabled"] = "";
		
		$this->load->view('v_temp_head');
		$data["post_list_data"] = $this->_get_post_list(30);
		
		$data["previous"] = $this->M_forum->previous;
		$data["next"] = $this->M_forum->next;
		
		if($page <= 0)
		{
			$data["previous_enabled"] = "style='display:none !important;'";
		}
		
		$this->load->view('v_forum_post_preview', $data);
		$this->load->view('v_temp_foot');
	}
	
	public function post($post_id = 1) #/forum/post/8
	{
		$this->load->view('v_temp_head');
		
		$data = $this->_get_post_data($post_id);
		$this->load->view('v_forum_post', $data);
		
		$this->load->view('v_temp_foot');
	}
	
	private function _get_post_list($num_posts)
	{
		$this->load->model('M_forum', '', TRUE);#load database
		$post_list_data = $this->M_forum->get_post_previews($this->page, $num_posts);
		
		return $post_list_data;
	}
	
	private function _get_post_data($post_id = 1)
	{
		$this->load->model('M_forum', '', TRUE);
		
		if(is_numeric($post_id))
		{
			$this->M_forum->load($post_id);
		}else{
			$this->M_forum->load(1);
		}
		
		$data["name"] = $this->M_forum->name;
		$data["tag"] = $this->M_forum->tag;
		$data["avatar"] = $this->M_forum->avatar;
		$data["title"] = $this->M_forum->title;
		$data["post_id"] = $this->M_forum->post_id;
		$data["content"] = $this->M_forum->content;
		$data["created"] = $this->M_forum->created;
		$data["reply"] = $this->M_forum->replies;
		
		return $data;
	}
}

/* End of file forum.php */
/* Location: ./application/controllers/forum.php */