<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Streams extends CI_Controller {
	
	public function index() #/streams/
	{
		$this->load->view('v_temp_head', array() );
		$this->load->view('v_temp_foot');
	}
	
}

/* End of file streams.php */
/* Location: ./application/controllers/streams.php */