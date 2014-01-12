<?php

class Form extends CI_Controller {

	/**
	* FORM VALIDATION EXAMPLE
	* $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[2]|max_length[16]|is_unique[users.username]|xss_clean|md5|matches[usernameconf]');
	*/
	
	function index()
	{
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[2]|max_length[16]|is_unique[users.username]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[40]|md5');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[99]|is_unique[users.email]');
		
		if ($this->form_validation->run() == FALSE)
		{

			$this->load->view('form/news');
		}
		else
		{
			echo "SUCCESS";
		}

	}

	function get($formname)
	{
		$this->load->model('m_form', '', TRUE);
		$data['form'] = $this->m_form->load($formname);


		$this->load->view('v_form', $data);

	}
}
?>