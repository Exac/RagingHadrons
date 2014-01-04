<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Store extends CI_Controller {
	
	public function index() #/streams/
	{
		$this->load->view('v_temp_head', array() );
		$this->load->view('v_store');
		$this->load->view('v_temp_foot');
	}
	
}

/* End of file store.php */
/* Location: ./application/controllers/store.php */