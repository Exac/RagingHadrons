<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forum extends CI_Controller {
	
	public function index() #/forum/
	{
		$this->load->view('v_temp_head');
		
		
		
		$this->load->view('v_forum', $this->_get_posts(30) );
		
		$this->load->view('v_temp_foot');
	}
	
	public function post($post_id) #/forum/post/8
	{
		$this->load->view('v_temp_head');
		$this->load->view('v_temp_foot');
	}
	
	private function _get_posts()
	{
		$this->load->model('M_forum', '', TRUE);#load database
		
		$posts = ""; #retun this with HTML string for forum
		
		return $posts;
	}
}

/* End of file forum.php */
/* Location: ./application/controllers/forum.php */