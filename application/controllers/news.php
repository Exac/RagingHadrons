<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

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
	public function index() #/news/
	{
		$this->load->view('v_temp_head');
		
		$this->load->model('M_news_article', '', TRUE);#load database too
		
		//this is the main /news page, so we will load the most recent news article here.
		
		
		
		$this->load->view('v_temp_foot');
	}
	
	public function article($number = "1") #/news/article/8
	{
		echo "inner/{$one}/{$two}/{$three}/{$four}";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */