<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class U extends CI_Controller {
	
	public function index() #/u/
	{
		$this->ser();
		
	}
	
	public function ser($username = "raginghadrons")
	{
		$this->load->model('M_u', '', TRUE);#load database
		$this->M_u->load($username);
		
		$data['username'] = $this->M_u->username;
		$data['avatar'] = "/upload/user/".$this->M_u->avatar;
		$data['tag'] = $this->M_u->tag;
		$data['bio'] = $this->M_u->bio;
		
		$this->load->view('v_temp_head');
		$this->load->view('v_u', $data);
		$this->load->view('v_temp_foot');
	}
}

/* End of file u.php */
/* Location: ./application/controllers/u.php */