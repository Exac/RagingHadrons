<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_form extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function load($formname)
	{
		switch ($formname) {
			case 'news_post':
				$form = $this->get_news_post();
				break;
			
			default:
				$data['form'] = "INVALID formname IN m_form->load({$formname})";
				break;
		}

		return $form;
	}

	private function get_news_post()
	{
		return "news post";
	}

}

/* End of file  */
/* Location: ./application/models/m_form */