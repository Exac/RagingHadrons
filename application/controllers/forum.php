<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forum extends CI_Controller {
	
	public function index() #/forum/
	{
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
		
		$post_list_data = $this->M_forum->get_post_previews($num_posts);
		
		return $post_list_data;
	}
}

/* End of file forum.php */
/* Location: ./application/controllers/forum.php */