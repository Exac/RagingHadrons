<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Streams extends CI_Controller {
	
	public function index() #/streams/
	{
		$this->load->view('v_temp_head', array() );
		
		$this->load->model('M_streams', '', TRUE);#load database
		$data['featured_stream'] = $this->M_streams->get_featured_stream();#get featured stream
		$data['streams'] = $this->M_streams->stream_data;
		if(!isset($data['streams']))
		{
			$data['avaliable'] = false;
		}else{
			$data['avaliable'] = true;
		}
		$this->load->view('v_streams', $data);#output to v_streams
		$this->load->view('v_temp_foot');
	}
	
}

/* End of file streams.php */
/* Location: ./application/controllers/streams.php */