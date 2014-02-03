<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_index extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('v_temp_head');
		
		$this->load->model('M_maingrid_factory', '', TRUE);#load database too
		
		$data['posts'] = $this->M_maingrid_factory->get_posts_list();
		$data['news'] = $this->M_maingrid_factory->get_news_list();

		$this->load->view('template_welcome', $data);
		$this->load->view('v_temp_foot');
	}
	
	public function template($one = "1", $two = "2", $three = "3", $four = "4")
	{
		echo "inner/{$one}/{$two}/{$three}/{$four}";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */