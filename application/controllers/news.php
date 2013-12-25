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
		$this->article();
	}
	
	public function article($number = "0") #/news/article/8
	{
		$this->load->view('v_temp_head');
		
		$this->load->model('M_news_author', '', TRUE);#load database too
		$this->load->model('M_news_article', '', TRUE);#load database too
		
		$this->load->view('v_news_article', $this->_get_article($number) );
		
		$this->load->view('v_temp_foot');
	}
	
	private function _get_article($article_num = 0)#0 is default for the newest article
	{
		$news_article_data['featured_image'] =  $this->M_news_article->get_featured_image($article_num);
		$news_article_data['title'] =  $this->M_news_article->get_title($article_num);
		$news_article_data['article'] =  $this->M_news_article->get_article($article_num);
		
		$news_article_data['author_name'] = $this->M_news_author->get_name($article_num);
		$news_article_data['author_tag'] = $this->M_news_author->get_tag($article_num);
		$news_article_data['author_avatar'] = $this->M_news_author->get_avatar($article_num);
		
		return $news_article_data;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */