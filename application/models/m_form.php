<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_form extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function load($formname)
	{
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
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('form_validation');

		$this->form_validation->set_rules('title', 'Title', 'trim|required|max_length[254]|xss_clean');
		$this->form_validation->set_rules('content', 'Content', 'trim|max_length[65534]|xss_clean');

		if ($this->form_validation->run() == FALSE)
		{
			$data['location'] = __FUNCTION__;

			$this->load->view('form/news_create', $data);
		}
		else
		{
			echo "SUCCESS NEWS_CREATE";
		}
	}

}

/* End of file  */
/* Location: ./application/models/m_form */