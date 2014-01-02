<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forum extends CI_Controller {
	
	private $page;
	
	public function index($page = 0) #/forum/
	{
		$this->page = $page;
		
		$this->load->view('v_temp_head');
		$this->load->view('v_forum_post_preview', $this->_get_post_list(30) );
		$this->load->view('v_temp_foot');
	}
	
	public function post($post_id) #/forum/post/8
	{
		$this->load->view('v_temp_head');
		$this->load->view('v_temp_foot');
	}
	
	private function _get_post_list($num_posts)
	{
		$this->load->model('M_forum', '', TRUE);#load database
		
		$post_list_data["post_list"] = $this->M_forum->get_post_previews($this->page, $num_posts);
		
		return $post_list_data;
	}
}

/* End of file forum.php */
/* Location: ./application/controllers/forum.php */