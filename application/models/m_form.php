<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_form extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function load($formname)
	{
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('form_validation');

		switch ($formname) {
			case 'news_create':
				$form = $this->news_create();
				break;
			
			default:
				$data['form'] = "INVALID formname IN m_form->load({$formname})";
				break;
		}

		// return $form;
	}

	private function news_create()
	{
		$this->form_validation->set_rules('title', 'Title', 'trim|required|max_length[254]|xss_clean');
		$this->form_validation->set_rules('content', 'Content', 'trim|max_length[65534]|xss_clean');

		if ($this->form_validation->run() == FALSE || !$this->ion_auth->logged_in() || $this->ion_auth->is_admin())
		{
			$data['location'] = __FUNCTION__;
			$data['errors'] = "Ensure that you are logged into your admin account before posting news.";


			$this->load->view('form/news_create', $data);
		}
		else
		{
			$author_id;
			$article_title = mysql_real_escape_string();
			$article = mysql_real_escape_string();
			$article_featured_image = "";
			$query = $this->db->query("insert into news (author_id, article_title, article_date, article, article_featured_image) values ('{$author_id}', '{$article_title}', '', '{$article}', '{$article_featured_image}');");
		}
	}

}

/* End of file  */
/* Location: ./application/models/m_form */